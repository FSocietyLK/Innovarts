<?php
    session_start();
    if (isset($_SESSION['guest_user_cart'])) {
        foreach ($_SESSION['guest_user_cart'] as $key => $item) {
            if ($item['img_src'] == $_POST['img_src']) {
                unset($_SESSION['guest_user_cart'][$key]);
            }
        }
    }
?>