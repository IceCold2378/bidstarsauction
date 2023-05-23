<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML, CSS">
        <meta name="description" content="....">
		<link rel="stylesheet" href="style_otherpgs.css">
        <link rel="stylesheet" href="style_web.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <title>
        Most Bid Auction Items
    </title>
</head>
<body>
    <section class="head">
        <div class="navigation">
            <a href ="index.php"><img src="img/bidstar logo1.jpg"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times circle" onclick="hideMenu()"></i>
                    <ul>	
                    <li><a href ="index.php">HOME</a></li>    
                    <li><a href ="login.php">LOGIN</a></li>
                    <li><a href ="Regsitration.php">REGISTER</a></li>
                    <li><a href ="a.about.php">ABOUT US</a> </li>
                    </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            </div>
        <h1>MOST BID ITEM OF THE WEEK</h1>
        <div class="mostbid">
            <div class="row">
                <div class ="col-2">
                    <img src="https://assets.teenvogue.com/photos/5d38c6f3c9916100099a8da4/master/w_3556,h_2000,c_limit/BTS%20Merch_Story.jpg" class="mostbid img">
                </div>
                <div class ="col-2">
                    <h4>EXCLUSIVELY available for auction only at Bidstars</h4>
                    <h1>BTS Hoodie</h1>
                    <small>Due to recent worldwide shows of the band group BTS, their merch has been disappearing within minutes of arrival.We at Bidstars having predicted this had partnered wiht them to sell their merch on our site thereby keeping their fans happy and our site active!</small>
                    <a href="http://localhost/bidstars/bidding/index.php?page=home&category_id=9" class="hero-btn">Bid/Buy Now</a>   
                </div>
            </div>
        </div>
        <div class="small-container">
            <h2>latest items</h2>
            <div class="row">
                <div class="col-4">
                    <a href="http://localhost/bidstars/bidding/index.php?page=home&category_id=9"><img src="https://static.highsnobiety.com/thumbor/IyrneyDJGZKCho-WjL3pFe__N_Q=/1600x1067/static.highsnobiety.com/wp-content/uploads/2017/01/27160533/lv-hoodie-main.jpg"></a>
                    <h4>Supreme X Louis Vuitton Hoodie</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>Starting Bid:Rs.40,000.00</p>
                </div>
                <div class="col-4">
                    <a href="http://localhost/bidstars/bidding/index.php?page=home&category_id=3"><img src="https://www.officialmemorabilia.com/products/683-949.jpg"></a>
                    <h4>Lionel Messi Signed Barcelona FC Jersey</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>Starting Bid:Rs.75,000.00</p>
                </div>
                <div class="col-4">
                    <img src="https://watchesbysjx.com/wp-content/uploads/2021/07/audemars-piguet-Royal-Oak-Frosted-Gold-Double-Balance-Wheel-Openworked-41-mm-15412-7.jpg">
                    <h4>Audemars Piguet Royal Oak Frosted Watch</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>Starting Bid:Rs.19,20,000.00</p>
                </div>
                <div class="col-4">
                    <a href="http://localhost/bidstars/bidding/index.php?page=home&category_id=7"><img src="https://data.whicdn.com/images/197691632/original.jpg"></a>
                    <h4>Liberty Walk Buggati Veyron</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>Starting Bid:Rs.2,50,00,000.00</p>
                </div>
            </div>
        </div>
    </section>  
</body>
<script>
        var navlinks = document.getElementById("navlinks");
        function showMenu(){
            navlinks.style.right="0";
        }
        function hideMenu(){
            navlinks.style.right="-200px";
        }
    </script>  
</html>