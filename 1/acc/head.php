<?php
include "functions.php";
?>
<div class="main">
        <div class="loko">
            <img src="imgs/0.png" class="loko-img">
        </div>
        <div class="menu">
            <div class="menu-1">
                <form action="search.php" method="get" class="form">
                    <input type="text" name="keyword" class="search-input">
                    <button type="submit" class="search-button">
                        search
                    </button>
                </form>
            </div>
            <div class="menu-2">
                <div class="menu-item">
                    <a href="index.php">
                        Home
                    </a>
                </div>
                <div class="menu-item">
                    <a href="all-product.php">
                        Product
                    </a>
                </div>
                <div class="menu-item">
                    <a href="contact.php">
                        Contact
                    </a>
                </div>
                <?php if ( is_logged_in () ):?>
                <div class="menu-item">
                    <a href="cart.php">
                        Cart
                    </a>
                </div>
                <?php endif;?>
            </div>
        </div>
        <div class="login">
            <div class="menu-item">
                <?php if ( is_logged_in () ):?>
                <img src="imgs/icon1.png" class="log-icon">
                <a href="cart.php">
                    My account
                </a>
                <img src="imgs/icon2.png" class="log-icon">
                <a href="do-logout.php">
                    Logout
                </a>
                <?php else:?>
                <img src="imgs/icon1.png" class="log-icon">
                <a href="login.php">
                    Login/Register
                </a>
                <?php endif;?>
            </div>
        </div>
    </div>