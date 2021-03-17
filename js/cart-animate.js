$(document).ready(function() {
    $(".cart-view").on("click", "a.item-remove", function() {
		$(this).closest('tr').hide('slow', function () {
            $(this).remove();
            var item_img_src = $(this).closest('tr').find(".image img").attr('src');
		    $.post("/innovarts/remove-cart-item.php", { "img_src": item_img_src });
            if(window.location.pathname === "/innovarts/cart.php") {
				location.reload();
			}
        });
    });
});

$(document).ready(function() {
    var cookie_reload = document.cookie.split(';').find(row => row.startsWith('reload=')).split('=')[1];
    if (cookie_reload === "true") {
        $("#dropdown-menu").show();
        document.cookie = "reload=false; path=/innovarts/cart.php";
    }
});