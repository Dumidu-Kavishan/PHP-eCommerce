<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['update_cart'])){
   $cart_id = $_POST['cart_id'];
   $cart_quantity = $_POST['cart_quantity'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
   $message[] = 'cart quantity updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
   header('location:cart.php');
}

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="home_style.css">

</head>
<body>

<!--Header part (start)-->
<div class="top-part">
        <hr class="vertical-lines">
        <div class="search-bar">
          <div class="container-1">
                <input type="text" placeholder="Search Productes" style="width:320px">
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


<div class="heading">
   <h3>shopping cart</h3>
</div>

<section class="shopping-cart">

   <h1 class="title">products added</h1>

   <div class="box-container">
      <?php
         $grand_total = 0;
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
      ?>
      <div class="box">
         <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
         <img src="uploaded_images/<?php echo $fetch_cart['image']; ?>" alt="" style="width:100%">
         <div class="name"><?php echo $fetch_cart['name']; ?></div>
         <div class="price">$<?php echo $fetch_cart['price']; ?>/-</div>
         <form action="" method="post">
            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
            <input type="submit" name="update_cart" value="update" class="option-btn" style="width:100%">
         </form>
         <div class="sub-total"> sub total : <span>$<?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?>/-</span> </div>
      </div>
      <?php
      $grand_total += $sub_total;
         }
      }else{
         echo '<p class="empty">your cart is empty</p>';
      }
      ?>
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all</a>
   </div>

   <div class="cart-total">
      <p>Net total : <span>$<?php echo $grand_total; ?>/-</span></p>
      <div class="flex">
         <a href="home.php" class="option-btn">continue shopping</a>
         <a href="checkout.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
      </div>
   </div>

</section>


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