<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:loging.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>
<!DOCTYPE html>
<html>
    <head>

        <title> 

        </title>
        <link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<!--Header part (start)-->
      <div class="top-part">
        <hr class="vertical-lines">
        <div class="search-bar">
          <div class="container-1">
                <input type="text" placeholder="Search Productes">
                <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </div>
        
        <div id="logo">
            <img src="images/logo.png" alt="logo" width="135" height="85">
        </div>
<!--log-in/register buttons (start)-->
        <div id="log-reg">
            <div class="loin">
                <a href="loging.php">
                <button type="button" class="button-login">
                    <span class="button__text">sign-in</span>
                    <span class="button__icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                </button>
                </a>
            </div>
            <div class="signup">
                <a href="register.php">
                <button type="button" class="button-signup">
                    <span class="button__text">Register</span>
                    <span class="button__icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                </button>
                </a>
            </div>
        </div>
<!--log-in/register buttons (end)-->
        <div class="cart">
            <a href="cart.php">
            <button type="button" class="button-cart">
                <span class="cart__icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            </button>
            </a>
        </div>
        <div class="profile">
            <a href="userAccount.php">
            <button type="button" class="button-profile">
                <span class="profile__icon"><i class="fa fa-user" aria-hidden="true"></i></span>
            </button>
            </a>
        </div>
<!--Header part (end)-->
     </div>
<!--Navigation bar (start)-->
        <div class="menu-bar">
            <ul>
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#">Categories</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="mens_product.php?cat=Mens">Mens</a></li>
                            <li><a href="mens_product.php?cat=Womens">Womens</a></li>
                            <li><a href="mens_product.php?cat=Kids">Kids</a></li>
                            <li><a href="mens_product.php?cat=Home & Living">Home & Living </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="giftcard.html">Gift Cards</a></li>
                <li><a href="#">Find Stores</a></li>
                <li><a href="contact-us.php">Contact US</a></li>
            </ul>
        </div>
<!--Navigation bar (End)-->

<!--top banner-part (start)-->

<div id="top-banners">
    <div class="top-banner-fream">
        <img src="images/banner/b1.jpg" width="1400">
    </div>
</div>

<!--top banner-part (end)-->

<!--main banner (start) -->
        <div class="slid">
            <div id="slider">
                <figure>
                    <img src="images/banners/main-banner-4.jpg">
                    <img src="images/banners/main-banner-2.jpg">
                    <img src="images/banners/main-banner-3.jpg">
                    <img src="images/banners/main-banner-1.jpg">
                    <img src="images/banners/main-banner-4.jpg">
                </figure>
            </div>
        </div>
<!--main banner(end)-->

<!--Features - section (start)--->
        <div id="features-cards">
            <div class="img-border">
                <div class="feature-img">
                    <img src="images/features/customer-service.jpg" width="220" height="220">
                </div>
            </div>
            <div class="img-border">
                <div class="feature-img">
                    <img src="images/features/safe-wallet.jpg" width="220" height="220">
                </div>
            </div>
            <div class="img-border">
                <div class="feature-img">
                    <img src="images/features/sefe-payments.jpg" width="220" height="220">
                </div>
            </div>
            <div class="img-border">
                <div class="feature-img">
                    <img src="images/features/specialp-offers.jpg" width="220" height="220">
                </div>
            </div>
            <div class="img-border">
                <div class="feature-img">
                    <img src="images/features/world-wide-delivery.jpg" width="220" height="220">
                </div>
            </div>
        </div>
<!--Features - section (end)--->

<!--offers section (start)-->
        <div id="offers-section">
            <div class="main-fream-offers">
                <div id="titles">
                    <span class="titles-offer">Offers</span>
                </div>
                <div class="sub-containers">
                    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="images/products/offers/f1.jpg" width="220" height="215" >
                        </div>
                        <span class="p-tiltle">Jobbs gael mens graphic printed tie dye t-shirt</span>
                        <div class="options">
                            <button type="button-offers" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="o-price">$15.5</span>
                            <span class="n-price">$6.5</span>
                        </div>
                    </div>
                    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="images/products/offers/f2.jpg" width="220" height="215" >
                        </div>
                        <span class="p-tiltle">Colortone Youth & Adult Tie Dye T-Shirt</span>
                        <div class="options">
                            <button type="button-offers" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="o-price">$15.5</span>
                            <span class="n-price">$6.5</span>
                        </div>
                    </div>
                    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="images/products/offers/f3.jpg" width="220" height="215" >
                        </div>
                        <span class="p-tiltle">Gildan Men's V-Neck T-Shirts, Multipack</span>
                        <div class="options">
                            <button type="button-offers" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="o-price">$24.5</span>
                            <span class="n-price">$12.5</span>
                        </div>
                    </div>
                    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="images/products/offers/f4.jpg" width="220" height="215" >
                        </div>
                        <span class="p-tiltle">Hanes Men’s Short Sleeve Graphic T-Shirt Collection</span>
                        <div class="options">
                            <button type="button-offers" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="o-price">$19.5</span>
                            <span class="n-price">$11.5</span>
                        </div>
                    </div>
                    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="images/products/offers/f5.jpg" width="220" height="215" >
                        </div>
                        <span class="p-tiltle">Fruit of the Loom Men's Premium Crew Tees</span>
                        <div class="options">
                            <button type="button-offers" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="o-price">$16.5</span>
                            <span class="n-price">$4.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--offers section (end)-->

<!--New Arrivals (start)-->
        <div id="New-Arrivals">
            <div class="main-fream-new-arrivals">
                <div id="titles">
                    <span class="titles-New-Arrivals">New Arrivals</span>
                </div>
                <div class="sub-containers">
                <?php  
            $select_products = mysqli_query($conn, "SELECT * FROM `products` order by id desc LIMIT 5") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
    
    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="uploaded_images/<?php echo $fetch_products['image'] ?>" width="220" height="215" >
                        </div>
                        <span class="p-tiltle"><?php echo $fetch_products['name'] ?></span>
                        <div class="options">
                            <form method ="POST">
                                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                            <button type="submit" name="add_to_cart" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="normal-price">$<?php echo $fetch_products['price'] ?></span>

                            </form>
                        </div>
                    </div>

        <?php
         }
        }else{
        echo '<p class="empty">no products added yet!</p>';
        }
        ?>

              
                </div>
            </div>
        </div>
<!--New Arrivals (end)-->

<!--Featured-items (start)-->
        <div id="featured-items">
            <div class="main-fream-Featured-items">
                <div id="titles">
                    <span class="titles-Featured-items">Featured Items</span>
                </div>
                <div class="sub-containers">
                <?php  
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 5") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
    
    <div class="sub-container-box">
                        <div class="item-img">
                            <img src="uploaded_images/<?php echo $fetch_products['image'] ?>" width="220" height="215" >
                        </div>
                        <span class="p-tiltle"><?php echo $fetch_products['name'] ?></span>
                        <div class="options">
                        <form method ="POST">
                                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                            <button type="submit" name="add_to_cart" class="button-cart-offers">
                                <span class="box-text">Add Cart</span>
                            </button>
                            <span class="normal-price">$<?php echo $fetch_products['price'] ?></span>

                            </form>
                        </div>
                    </div>

        <?php
         }
        }else{
        echo '<p class="empty">no products added yet!</p>';
        }
        ?>
                </div>
            </div>
        </div>
<!--Featured-items (end)-->

<!--About Us and partners section (start)-->
            <div id="about-us-section">
                <div class="about-us">
                    <div id="titles-about-us">
                        <span class="titles-about-us">About us</span>
                    </div>
                    <div class="content-txt">
                        <span class="about-us-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem odio tenetur deserunt, 
                            iusto eius mollitia delectus et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem odio tenetur deserunt, iusto eius mollitia delectus 
                            et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!Nobis voluptatem odio tenetur deserunt, iusto eius mollitia delectus 
                            et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!Nobis voluptatem odio tenetur deserunt, iusto eius mollitia delectus 
                            et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!Nobis voluptatem odio tenetur deserunt, iusto eius mollitia delectus 
                            et ea dolores adipisci sapiente ab eligendi ullam similique porro error tempore libero!</span>
                    </div>
                </div>
            </div>
            <div id="partners-section">
                <div class="our-partners">
                    <div id="titles-our-partners">
                        <span class="titles-our-partners">Our Partners</span>
                    </div>
                    <div class="partners-container-box-1">
                        <div class="partner-img">
                            <a href="https://www.toray.com/global/aboutus/">
                            <img src="images/partners/comp-2.jpeg" width="180" height="180" >
                            </a>
                        </div>
                        <div class="partner-img">
                            <a href="https://www.tjx.com/company/history#:~:text=and%20Executive%20Advisor.-,The%20TJX%20Companies%2C%20Inc.,comprised%20of%20Europe%20and%20Australia).">
                            <img src="images/partners/comp-3.png" width="180" height="140" >
                            </a>
                        </div>
                        <div class="partner-img">
                            <a href="https://www.pradagroup.com/en/brands/prada.html">
                            <img src="images/partners/comp-5.png" width="180" height="160" >
                            </a>
                        </div>
                    </div>
                    <div class="partners-container-box-2">
                        <div class="partner-img">
                            <a href="https://about.underarmour.com/">
                            <img src="images/partners/underarmour logo.png" width="170" height="170">
                            </a>
                        </div>
                        <div class="partner-img">
                            <a href="https://www.vfc.com/our-company#:~:text=VF%20Corporation%20is%20one%20of,outdoor%2C%20active%20and%20workwear%20brands.">
                            <img src="images/partners/vf-coperration.png" width="180" height="180" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<!--About Us and partners section (end)-->

<!--footer section (start)-->
            <div id="footer-section">
                <div class="footer-main-fream">
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Information</span>
                                <div class="footer-links">
                                    <span class="link-style"><a href="privacy and policy.html">Terms & Conditions</a></span><br><br>
                                    <span class="link-style"><a href="privacy and policy.html">Privacy & Policies</a></span><br><br>
                                    <span class="link-style"><a href="#">News & Events</a></span><br><br>
                                    <span class="link-style"><a href="FaQ.html">Questions & Answers</a></span><br><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Quick Links</span>
                                <div class="footer-links">
                                    <span class="link-style"><a href="userAccount.html">My Account</a></span><br><br>
                                    <span class="link-style"><a href="#">My Orders</a></span><br><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Opening Hours</span>
                                <div class="footer-links">
                                    <span class="info-txt">Mon-Fri: 9.00 AM to 5.00 PM</span><br><br>
                                    <span class="info-txt">Saturday: 9.00 AM to 5.00 PM</span><br><br>
                                    <span class="info-txt">Sunday: Closed</span><br><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Contact us</span>
                                <div class="footer-links">
                                    <span class="info-txt">+94 77-234 4328</span><br><br>
                                    <span class="info-txt">+94 76-456 4321</span><br><br>
                                    <span class="link-style"><a href="#">online@shop.lk</a></span><br><br>
                                    <span class="link-style"><a href="#">www.shop@gmail.com</a></span><br><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
<!--footer section (end)-->
    </body>
</html>