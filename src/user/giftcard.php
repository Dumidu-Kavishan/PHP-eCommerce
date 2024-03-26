<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    <link rel="stylesheet" href="giftcard_style.css">
    
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
                <span class="profile__icon"><i class="fa fa-user" aria-hidden="true"></i></i></span>
            </button>
            </a>
        </div>
<!--Header part (end)-->
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

<!--gift cards descriptions (start)-->

    <div id="gift-card-description">
        <div class="main-fream">
            <span class="card-title">Basic Gift Cards</span>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia asperiores voluptatum porro ea doloribus possimus accusamus natus architecto esse error itaque, odio laboriosam cumque unde quae, accusantium molestiae consectetur consequatur!</p>

            <span class="card-title">Premium Edition Gift Cards</span>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia asperiores voluptatum porro ea doloribus possimus accusamus natus architecto esse error itaque, odio laboriosam cumque unde quae, accusantium molestiae consectetur consequatur!</p>
            
            <span class="card-title">Season Pass</span>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia asperiores voluptatum porro ea doloribus possimus accusamus natus architecto esse error itaque, odio laboriosam cumque unde quae, accusantium molestiae consectetur consequatur!</p>
            
        </div>
    </div>

<!--gift cards descriptions (end)-->

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
                        <span class="link-style"><a href="#">My Account</a></span><br><br>
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