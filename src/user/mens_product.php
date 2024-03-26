<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mens Products</title>
    <link rel="stylesheet" href="mens_product.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <!--Header part (start)-->
    <div class="top-part">
        <hr class="vertical-lines">
        <div class="search-bar">
          <div class="container-1" style="display: inline-table;">
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
            <button type="button" class="button-profile">
                <span class="profile__icon"><i class="fa fa-user" aria-hidden="true"></i></span>
            </button>
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
                <li><a href="mens_product.php?cat=Gift Card">Gift Cards</a></li>
                <li><a href="#">Find Stores</a></li>
                <li><a href="contact-us.html">Contact US</a></li>
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


<!--items section(start)-->
<section class="products">



<div class="container-main-fream">
    <div class="box-container">

        <?php  
            $category = $_GET['cat'];
            $select_products = mysqli_query($conn, "SELECT * FROM `products` where category='$category'") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
                
            while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
    <form action="" method="post" class="box">
    <img class="image" src="uploaded_images/<?php echo $fetch_products['image']; ?>" alt="" style="width:100%">
    <div class="name"><?php echo $fetch_products['name']; ?></div>
    <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
    <input type="number" min="1" name="product_quantity" value="1" class="qty" style="width:90%">
    <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
    <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
    <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
    <input type="submit" value="add to cart" style="width:100%" name="add_to_cart" class="btn">
    </form>
 <?php
   }
 }else{
   echo '<p class="empty">no products added yet!</p>';
 }
 ?>
</div>
</div>


</section>

<!--items section(end)-->


<!--footer section (start)-->
<div id="footer-section">
    <div class="footer-main-fream">
        <div class="info-container">
            <div class="sub-container-info">
                <div class="info">
                    <span class="title-info">Information</span>
                    <div class="footer-links">
                        <span class="link-style"><a href="">Terms & Conditions</a></span><br><br>
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