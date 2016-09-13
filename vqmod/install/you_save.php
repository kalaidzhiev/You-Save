<?php
        // Add database
        require('../../config.php');
        $con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
        mysqli_select_db(DB_DATABASE, $con);
        $CARTSQL = "ALTER TABLE `" . DB_PREFIX . "cart` ADD `yousave` INT NOT NULL DEFAULT '0' AFTER `quantity`";
        mysqli_query( $con,$CARTSQL);

        $CARTPRODUCTSQL = "ALTER TABLE `" . DB_PREFIX . "order_product` ADD `yousavetotal` INT NOT NULL DEFAULT '0' AFTER `quantity`";
        mysqli_query( $con,$CARTPRODUCTSQL);
        
        die('Setup Successful !');
?>
