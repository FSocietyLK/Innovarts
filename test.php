<?php
	session_start();
	$curl = curl_init("localhost/innovarts/index.php");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$content = curl_exec($curl);
	$document = new DOMDocument();
	$document->loadHTML($content);
	$xpath = new DOMXPath($document);
	$img_set = $xpath->query("//*[contains(@class, 'image')]//img");
	foreach ($img_set as $img) {
		$img_src = $img->getAttribute('src');
		foreach ($_SESSION['guest_user_cart'] as $key => $item) {
			if ($item['img_src'] == $img_src) {
				$parent_node = $img_div->parentNode;
				$btn = $xpath->query("//*[contains(@class, 'add-cart-item')]", $parent_node);
				$btn->item(0)->setAttribute('id', 'view-cart-items');
				$btn->item(0)->setAttribute('href', '/innovarts/cart.php');
				echo $btn->item(0)->getAttribute('href');
				$btn_txt = $xpath->query("//*[contains(@class, 'add-cart-item')]//span", $parent_node);
				$btn_txt->item(0)->nodeValue = "View Cart";
				echo $btn_txt->item(0)->nodeValue;
			}
		}
	}
?>