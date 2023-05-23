<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML, CSS">
        <meta name="description" content="....">
		<link rel="stylesheet" href="style_web.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <title>
        BidStars
    </title>
    </head> 
    <style>
        em{
            color: yellow;
            font-style: oblique;
        }
    </style>
    <body>
	<section class="header">
        <nav>
		<a href ="index.php"><img src="img/bidstar logo1.jpg"></a>
		<div class="nav-links" id="navlinks">
          <i class="fa fa-times circle" onclick="hideMenu()"></i>
		    <ul>	
            <li><a href ="index.php">HOME</a></li>    
            <li><a href ="login.php">LOGIN</a></li>
		    <li><a href ="Regsitration.php">REGISTER</a></li>
		    <li><a href ="aboutus.php">ABOUT US</a> </li>
	        </ul>
	    </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
        <h1>WELCOME TO BIDSTARS,<em>THE ONLINE AUCTION HOUSE!!</em></h1>
        <h2>TO BUY AND SELL A VARIETY OF RARE AND EXQUISITE ITEMS <br>OUR SITE IS THE DESTINATION</h2>
        <br>
        <a href="login.php" class="hero-btn">Visit us to know more</a>
        </div>
    </section>
    <section class= "course">
        <h1>The auctions that we hold</h1>
        <p>To provide are users with a variety of exqlusive items to bid on, we have provided the following points</p>
        <div class="row">
            <div class="course-col">
                <h3>Live Auctions</h3>
                <p>Live auctions involve announcing the highest bid by an auctioneer. Bidders are given a chance to bid again until the highest bidder takes the item on sale.</p>                                
                </div>
            <div class="course-col">
                <h3>Ended Auctions</h3>
                <p>The auction ends when no participant is willing to bid further, at which point the highest bidder pays their bid.</p> 
            </div>
            <div class="course-col">
                <h3>Upcoming Auctions</h3>
                <p>Auctions that will be entering their bidding stage will be displayed at the bidding portal.</p>
            </div>
        </div>    
    </section>
    <!-----why choose us i.e new features----->
    <section class="features">
        <h1>Why choose us?</h1>
        <p>Being a trusted and fluid auction system wasn't enough so we added some new features:-</p>
        <div class="row">
            <div class="features-col">
                <a href="mostbiditems.php"><img src="https://us.123rf.com/450wm/siberianart/siberianart2001/siberianart200100067/137229152-car-auction-online-vector-illustration-hand-holding-smartphone-with-car-gavel-and-bid-button-on-scre.jpg?ver=6"></a>
                <div class="layer">
                <h3>Most Bid item of the day/week</h3>
                </div>  
            </div>
            <div class="features-col">
                <div class="fitem">                
                <a href="1sttimeitems.php" ><img src="https://cdn.shopify.com/s/files/1/1318/0685/products/Lebron_main-soizing_2048x.jpg">
                    <img src="https://elite-exclusives.co.uk/wp-content/uploads/2019/11/Ronaldo-Real-Madrid-Boot-1.jpg">
                    <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i0yQdemAane4/v1/-1x-1.jpg">
                    <img src="img/NISSAN.png"></a>
                    <div class="layer">
                        <br>
                    <h3>First time items up for auction</h3>
                    </div>
                </div>
            </div>
            <div class="features-col">
                <img src="img/onlineauction1.jpg">
                <div class="layer">
                <h3>Auctions published</h3>
                </div>
                <br>
                <img src="https://image.shutterstock.com/image-illustration/3d-illustration-gavel-word-sold-260nw-74687845.jpg">
                <div class="layer">
                <h3>Auctions awarded</h3>
                </div>
            </div>
        </div>    
    </section>
    <!----testimonials----->
    <section class="testimonials">
        <h1>What are Users Say</h1>
        <p>Our site has a number of visitors and the folowing are our vip users.</p>
        <div class="row">
            <div class="testimonials-col">
                <img src="https://pbs.twimg.com/profile_images/1421008625095647234/Vfg52xtV.jpg">
                <div>
                    <p>It is a very easy to use website.The auction system is user friendly and has a dynamic environment.</p>
                    <h3>Lang Buddha<h3>  
                </div>            
            </div>
            <div class="testimonials-col">
                <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/781da428-ee53-4acb-b1a8-f4540dce5eff-profile_image-300x300.png">
                <div>
                    <p>It is one of the best auction software to do accurate bidding online.Easy bidding and timely ending of auctions what more can a bidder ask.</p>
                    <h3>Anthony Z<h3>  
                </div>   
            </div>
            <div class="testimonials-col">
                <img src="https://staticg.sportskeeda.com/editor/2021/05/dc685-16207586294111-800.jpg">
                <div>
                    <p>I like this auction site, great customer service! I like the fact that I can comfortably bid on what I want and for any queries, the contact us team responds quickly and effectively.I believe everyone should just give it a try, I personally like Online Auction.</p>
                    <h3>Yuno<h3>  
                </div>   
            </div>
        </div>    
    </section>
    <!------ contact us-------->
    <section class="cta">
        <h1>For any queries related to our site and <br>the working of our online auction system</h1>
        <a href="contactus2.php" class="hero-btn">CONTACT US</a>
    </section> 
    <div class="footer">
        <div class="container">
             <div class="row">
                <div class="footer-col-1">
                    <h3>Write a feedback to us</h3>
                    <p> Feedback of perfomance and review on site</p>
                    <a href="feedback.php" class="hero-btn">Give Feedback <style> a{position:relative;}</style></a>
                </div>
                <div class="footer-col-2">
                    <img src="img/bidstar logo1.jpg">
                    <p> Our purpose is to sustanabily make the pleasure and benefits of an Auction house 
                        available for many to use via our website </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>About Us</li>
                        <li>Signup</li>
                        <li>Return Policy</li>
                        <li>Offer</li>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <a href="https://www.facebook.com/"><li>Facebook</li></a>
                        <a href="https://twitter.com/i/flow/login"><li>Twitter</li></a>
                        <a href="https://www.instagram.com/"><li>Instagram</li></a>                        
                        <a href="https://www.youtube.com/"><li>Youtube</li></a>
                </div>
            </div>
        </div>
    </div>
    <!------JavaScript for toggle menu---->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showMenu(){
            navlinks.style.right="0";
        }
        function hideMenu(){
            navlinks.style.right="-200px";
        }
    </script>    
    </body>
</html>

