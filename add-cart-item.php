<?php
    session_start();
    $exists = false;
    if (isset($_SESSION['guest_user_cart'])) {
        foreach ($_SESSION['guest_user_cart'] as $key => $item) {
            if ($item['img_src'] == $_POST['img_src']) {
                $exists = true;
            }
        }
    }
    if (!$exists) {
        $_SESSION['guest_user_cart'][] = array(
            "name"    => $_POST['item'],
            "price"   => $_POST['price'],
            "img_src" => $_POST['img_src']
        );
    }
?>