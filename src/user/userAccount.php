<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
    <head>

        <title> 

        </title>
        <link rel="stylesheet" href="userAccount.css">
        <link rel="stylesheet" href="style.css">
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
            <button type="button" class="button-profile">
                <span class="profile__icon"><i class="fa fa-user" aria-hidden="true"></i></i></span>
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
                            <li><a href="product.php?cat=Mens">Mens</a></li>
                            <li><a href="product.php?cat=Womens">Womens</a></li>
                            <li><a href="product.php?cat=Kids">Kids</a></li>
                            <li><a href="product.php?cat=Home & Living">Home & Living </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="product.php?cat=Gift Card">Gift Cards</a></li>
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

<!--User account section (start)-->
    <div id="user-account-section">
        <div class="user-account-main-fream">
            <div class="detail-containers-user-account">
                <div class="detail-container-1">
                    <div class="profile-picture-fream">
                    <form action="upload.php" method="post" enctype="multipart/form-data">

                </form>
                    </div>
                    <span class="wellcome-txt">Wellcome</span><br>
                    <p><span><?php echo $_SESSION['user_name']; ?></span></p>
                    <div class="btns-profile">
                        
                    <div class="account-box" id="account-box">
                        <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                        <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                        <a href="logout.php" class="delete-btn">logout</a>
                    </div>
                    <a href="contact-us.php">
                    <button type="button" class="button-messages-user-account">
                        <span class="box-text">Messages</span>
                    </button>
                    </a>
                    </div>
                </div>
                <div class="detail-container-2">
                    <div class="sub-detail-container-1">
                    <section class="user-account">
                        <h3 class="Title-account">Account Details</h3>
                        <form method="POST">
                                    <input type="text" name="name" placeholder="Your Name" class="input-box"><br><br><br>
                                    <input type="email" name="email" placeholder="Your Email" class="input-box"><br><br><br>
                                    <input type="text" name="number" required placeholder="enter your number" class="input-box"><br><br><br>
                                    <input type="text" name="street" required placeholder="e.g. street name" class="input-box"><br><br><br>
                                    <input type="text" name="city" required placeholder="e.g. colombo" class="input-box"><br><br><br>
                                    <input type="text" name="state" required placeholder="e.g. colombo" class="input-box"><br><br><br>
                                    <input type="text" name="country" required placeholder="e.g. Sri Lanka" class="input-box"><br><br><br>
                        </form>
                    </section>
                    </div>
                    <div class="sub-detail-container-2">

                    </div>
                    <div class="sub-detail-container-3">

                    </div>
                </div>
            </div>
        </div>
    </div>

<!--User account section (end)-->
<!--About Us and partners section (end)-->

<!--footer section (start)-->
            <div id="footer-section">
                <div class="footer-main-fream">
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Information</span>
                                <div class="footer-links">
                                    <span class="link-style"><a href="#">Terms & Conditions</a></span><br><br>
                                    <span class="link-style"><a href="#">Privacy & Policies</a></span><br><br>
                                    <span class="link-style"><a href="#">News & Events</a></span><br><br>
                                    <span class="link-style"><a href="#">Questions & Answers</a></span><br><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="sub-container-info">
                            <div class="info">
                                <span class="title-info">Quick Links</span>
                                <div class="footer-links">
                                    <span class="link-style"><a href="userAccount.php">My Account</a></span><br><br>
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
