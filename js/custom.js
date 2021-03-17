$(document).ready(function () {
    $('.box-category .menu').find('li>ul')
    $('.box-category .menu li i').on("click", function () {
        if ($(this).hasClass('fa-minus')) {
            $(this).removeClass('fa-minus').parent('li').find('> ul').slideToggle();
        }
        else {
            $(this).addClass('fa-minus').parent('li').find('> ul').slideToggle();
        }
    });

    $('.category').find('h3')
    $('.category h3 i').on("click", function () {
        if ($(this).hasClass('fa-angle-down')) {
            $(this).removeClass('fa-angle-down').parents('.category').find('.box-content').slideToggle();
        }
        else {
            $(this).addClass('fa-angle-down').parents('.category').find('.box-content').slideToggle();

        }
    });

    $('.footer-block').find('h4')
    $('.footer-block h4 i').on("click", function () {
        if ($(this).hasClass('fa-angle-down')) {
            $(this).removeClass('fa-angle-down').parents('.footer-block').find('.list-unstyled').slideToggle();
        }
        else {
            $(this).addClass('fa-angle-down').parents('.footer-block').find('.list-unstyled').slideToggle();

        }
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
	
    $('#back-to-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});

$(document).ready(function () {
    $("#dropdown-toggle, #cart").click(function (event) {
            $("#dropdown-menu").toggle();
			if ($('#cart-items').height() > 206) {
				$(".cart-upper").css('overflowY', 'scroll');
			}
			else {
				$(".cart-upper").css('overflowY', 'auto');
			}
			event.stopPropagation();
    });
	
	$(document).click(function(event) {
		var trigger = $("#dropdown-menu");
		if (trigger !== event.target && !trigger.has(event.target).length) {
			$("#dropdown-menu").hide();
			event.stopPropagation();
		}
	});
});

$(document).ready(function() {
	$(".cart-items").on("click", "a.product-remove", function() {
		$(this).closest('tr').hide('slow', function () {
			$(this).remove();
			var item_price = $(this).closest('tr').children(":nth-child(3)").text();
			var current_total = $(".total-price strong").text();
			var cart_total = parseFloat(current_total.substr(1)) - parseFloat(item_price.substr(1));
			$(".total-price strong").text('$' + cart_total.toFixed(2));
			if (cart_total == 0) {
				$("#cart-total").attr('style', 'display: none;');
				$("#checkout").attr('style', 'display: none;');
				$(".cart-upper").next().attr('style', 'display: none;');
				var cart_tr = $("<tr>").attr('id', 'cart-empty');
				var cart_td = $("<td>").attr({	class: 'text-center',
												colspan: '4',
												style: 'padding-top: 16px;'
											});
				var cart_txt = $("<strong>").attr('style', 'text-transform: uppercase; cursor: default;').text('Your cart is empty!');
				$(".cart-items tbody").append(cart_tr);
				$(".cart-items #cart-empty").append(cart_td);
				$(".cart-items #cart-empty td").append(cart_txt);
				$("#view-cart").attr('style', 'width: 260px;');
				$("#view-cart").find("span").attr('style', 'width: 185px;');
				$("#view-cart").find("i").attr('style', 'width: 75px;');
			}
			if ($('#cart-items').height() > 206) {
				$(".cart-upper").css('overflowY', 'scroll');
			}
			else {
				$(".cart-upper").css('overflowY', 'auto');
			}
			if(window.location.pathname === "/innovarts/cart.php") {
				document.cookie = "reload=true; path=/innovarts/cart.php";
				location.reload();
			}
		});
		
		var item_count = parseInt($("#item-count").text());
		$("#item-count").text(--item_count);
		var item_img_src = $(this).closest('tr').find(".item-img img").attr('src');
		$.post("/innovarts/remove-cart-item.php", { "img_src": item_img_src });
		if ($(".main-image-set").length) {
			if ($(".main-image-set .changeimg").attr('src') === item_img_src) {
				$("a#view-cart-items").attr('href', 'javascript:void(0);');
				$("a#view-cart-items").find(">:first-child").text('Add to Cart');
				$("a#view-cart-items").attr('id', 'add-cart-item').off('click');
			}
		}
		$(".container").find("a.view-cart-items").each(function() {
			if ($(this).closest(".product-thumb").find(".image img").attr('src') === item_img_src) {
				$(this).attr('href', 'javascript:void(0);');
				$(this).find(">:first-child").text('Add to Cart');
				$(this).removeClass('view-cart-items').addClass('add-cart-item').off('click');
				if(!$("li.bx-clone").length) {
					return false;		//break
				}
			}
		});
	});
});

$(document).ready(function(){
	$(document).on("click", "a.add-cart-item, a#add-cart-item", function(event){
		var item_count = parseInt($("#item-count").text());
		++item_count;
		event.preventDefault();
		$(this).attr('href', '/innovarts/cart.php');
		$(this).find(">:first-child").text('View Cart');
		if ($(this).is("a.add-cart-item")) {
			var item_name = $(this).closest(".product-thumb").find(".caption a").text();
			var item_price = $(this).closest(".product-thumb").find(".price-new").text();
			var item_img_src = $(this).closest(".product-thumb").find(".image img").attr('src');
		}
		else {
			var item_name = $(this).closest(".product-content").find("h1").text();
			var item_price = $(this).closest(".product-content").find(".price-list .price-new").text();
			var item_img_src = $(this).closest(".product-content").find(".thumbnails li:nth-child(2) .galleryimg").attr('src');
		}
		$.post("/innovarts/add-cart-item.php",
		{
			"item": item_name,
			"price": item_price,
			"img_src": item_img_src
		});
		var cart_total = $(".total-price strong").text();
		var cart_total = parseFloat(cart_total.substr(1)) + parseFloat(item_price.substr(1));
		var base_path = item_img_src.substring(0, item_img_src.lastIndexOf('/') + 1);
		var cart_item_tr = $("<tr>").attr('id', 'cart-item' + item_count);
		var cart_item_td = $("<td>").attr('class', 'text-center item-img');
		var cart_item_a = $("<a>").attr('href', base_path);
		var cart_item_img = $("<img>").attr({	class: 'img-responsive',
												title: item_name,
												src: item_img_src,
												width: '50'
											});
		$(".cart-items tbody").append(cart_item_tr);
		if ($(".cart-items tbody tr:nth-child(2)").attr("id") !== "cart-empty") {
			var child_selector = item_count + 1;
		}
		else {
			var child_selector = item_count + 2;
		}
		$(".cart-items tbody tr:nth-child(" + child_selector + ")").append(cart_item_td);
		$(".cart-items tbody tr:nth-child(" + child_selector + ") .item-img").append(cart_item_a);
		$(".cart-items tbody tr:nth-child(" + child_selector + ") .item-img a").append(cart_item_img);
		var cart_item_td2 = $("<td>").attr('class', 'text-left');
		var cart_item_a2 = $("<a>").attr({	href: base_path,
											class: 'view_cart cart-product-name'
										}).text(item_name);
		$(".cart-items tbody tr:nth-child(" + child_selector + ")").append(cart_item_td2);
		$(".cart-items tbody tr:nth-child(" + child_selector + ") td:nth-child(2)").append(cart_item_a2);
		var cart_item_td3 = $("<td>").attr('class', 'text-left cart-item-price').text(item_price);
		$(".cart-items tbody tr:nth-child(" + child_selector + ")").append(cart_item_td3);
		var cart_item_td4 = $("<td>").attr('class', 'product-remove text-center');
		var cart_item_a4 = $("<a>").attr({	href: 'javascript:void(0)',
											class: 'product-remove',
											title: 'Remove'
										});
		var cart_item_i = $("<i>").attr('class', 'fa fa-times');
		$(".cart-items tbody tr:nth-child(" + child_selector + ")").append(cart_item_td4);
		$(".cart-items tbody tr:nth-child(" + child_selector + ") td.product-remove").append(cart_item_a4);
		$(".cart-items tbody tr:nth-child(" + child_selector + ") a.product-remove").append(cart_item_i);
		var cart_total_tr = $("<tr>").attr('id', 'cart-total');
		var cart_total_td = $("<td>").attr('class', 'text-left cart-total');
		var cart_total_txt = $("<strong>").text('Total');
		var cart_item_td2 = $("<td>");
		var cart_item_td3 = $("<td>").attr('class', 'text-left cart-total total-price');
		var cart_total_txt3 = $("<strong>").text('$' + cart_total.toFixed(2));
		var cart_item_td4 = $("<td>");
		$("#cart-total").remove();
		$(".cart-items tbody").append(cart_total_tr);
		$(".cart-items #cart-total").append(cart_total_td);
		$(".cart-items #cart-total td:nth-child(1)").append(cart_total_txt);
		$(".cart-items #cart-total").append(cart_item_td2, cart_item_td3);
		$(".cart-items #cart-total td:nth-child(3)").append(cart_total_txt3);
		$(".cart-items #cart-total").append(cart_item_td4);
		$("#cart-empty").remove();
		$("#view-cart").removeAttr("style");
		$("#view-cart").find("span").removeAttr("style");
		$("#view-cart").find("i").removeAttr("style");
		$("#cart-total").removeAttr("style");
		$("#checkout").removeAttr("style");
		$(".cart-upper").next().removeAttr("style").attr('style', 'height: 12px;');
		if ($(this).is("a.add-cart-item")) {
			$(this).removeClass('add-cart-item').addClass('view-cart-items').off('click');
		}
		else {
			$(this).attr('id', 'view-cart-items').off('click');
		}
		if($("li.bx-clone").length) {
			$(".bx-wrapper").find("a.add-cart-item").each(function() {
				if ($(this).closest(".product-thumb").find(".image img").attr('src') === item_img_src) {
					$(this).attr('href', '/innovarts/cart.php');
					$(this).find(">:first-child").text('View Cart');
					$(this).removeClass('add-cart-item').addClass('view-cart-items').off('click');
				}
			});
		}
		$("#item-count").text(item_count);
		$("#dropdown-menu").show();
		if ($('#cart-items').height() > 206) {
			$(".cart-upper").css('overflowY', 'scroll');
		}
		else {
			$(".cart-upper").css('overflowY', 'auto');
		}
		event.stopPropagation();
		if(window.location.pathname === "/innovarts/cart.php") {
			document.cookie = "reload=true; path=/innovarts/cart.php";
			location.reload();
		}
	});
});