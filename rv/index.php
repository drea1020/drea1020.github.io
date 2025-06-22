<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Red Ventures | Frontier</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600" rel="stylesheet"> 
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/slicknav.css" rel="stylesheet" type="text/css" />
<link href="fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
<header class="header clear">
	<div class="container clear">
     	<a class="logo" href="/">
        	<img alt="Frontier Logo" src="img/frontier-logo.png" />
        </a>
        
        <div class="order">
        	<p><em>Call to order today!</em> <span><i class="fa fa-phone"></i><a href="tel:1.888.888.8888">1.888.888.8888</a></span></p>
        </div>
        
        <nav id="navigation">
        	<ul class="nav">
            	<li><a href="#" title="Pricing & Plans">Pricing & Plans</a></li>
                <li><a href="#" title="Internet">Internet</a></li>
                <li><a href="#" title="Bundles">Bundles</a></li>
                <li><a href="#" title="Phone">Phone</a></li>
                <li><a href="#modal" class="fancybox" title="Order Now">Order Now</a></li>
            </ul>
        </nav>  
    </div>
</header>

<section class="banner">
    <div class="slide">
        <div class="container clear">
            <div class="slide-content">
                <h1>High Speed, Low Price</h1>
                <p>See why people across America are switching to Frontier!</p>
                <div class="price clear">
                    <span class="small">Internet plans <br/>starting at</span>
                    <span class="largenum"><sup>$</sup>19<sup>99</sup></span>
                    <span class="small">per month with <br/>qualifying service</span>
                </div>
            </div>
        </div>
    </div>    
</section>

<div class="ribbon">
    <div class="container clear">
        <p>Call <span><i class="fa fa-phone"></i><a href="tel:1.888.888.8888">1.888.888.8888</a></span> to order now or <a href="#" class="button outline" title="Check Availability">Check Availability</a></p>
    </div>
</div>

<section class="content">
	<div class="container clear">
    	
        <div class="main">
        	<h2>More Value, More Savings</h2>
            <p><strong>Free WiFi <span>|</span> FREE Internet <span>|</span> NO Contract</strong> <a class="button fancybox" href="#modal" title="Order Now">Order Now</a></p>
        </div>
        
        <div class="boxes clear">
        	
            <div class="box">
            	<img src="img/speed.jpg" alt="The Speed You Need" />
                <div class="desc">
                    <h3>The Speed You Need</h3>
                    <p>Play games, video chat, stream movies and much more with High-Speed Internet from Frontier.</p>
                    <a href="#" class="button" title="Shop Plans">Shop Plans</a>
                </div>
                <div class="clear"></div> 
            </div>
            
            <div class="box">
            	<img src="img/features.jpg" alt="The Features You Want" />
                <div class="desc">
                    <h3>The Features You Want</h3>
                    <p>Choose from more than 20 advanced calling features, plus dozens of security products for you and your devices.</p>
                    <a href="#" class="button" title="Shop Now">Shop Now</a>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="box">
            	<img src="img/price.jpg" alt="A Price You'll Love" />
                <div class="desc">
                    <h3>A Price You'll Love</h3>
                    <p>Frontier bundles are packed with value. Switch to Frontier and do more online without breaking your budget.</p>
                    <a href="#modal" class="button fancybox" title="Order Now">Order Now</a>
                </div>
                <div class="clear"></div>
            </div>
            
        </div>
    
    </div>
</section>

<section class="callout">
	<div class="container">
    	<p><em>Call to speak with a sales agent and order today!</em> <span><i class="fa fa-phone"></i><a href="tel:1.888.888.8888">1.888.888.8888</a></span></p>
        <img class="agent" src="img/agent.png" alt="Sales Agent" />
        <div class="clear"></div>
    </div>
</section>

<footer class="footer">
	<div class="container">
    	<p>&copy; 2016 Frontier Communications Corporation. <a href="#" title="Terms & Conditions">Terms & Conditions</a>  |  <a href="#" title="Privacy Policy">Privacy</a></p>
    </div>
</footer>

<div id="modal" style="display: none;">
	<h2>Ready to make the switch?</h2>
    <p>Call to speak with a sales agent and order today!</p>
    <div class="call">
    	<i class="fa fa-phone"></i><a href="tel:1.888.888.8888">1.888.888.8888</a></span>
    </div>
    <hr>
    <p>Not sure your area is covered?</p>
    <a class="button">Check Availability</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script src="fancybox/jquery.fancybox.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#navigation').slicknav({
			appendTo: '.header',
			label: ""
		});
		
		$(".fancybox").fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			width		: '70%',
			height		: '70%',
			title		: ""
		});
		
		

	});
</script>

</body>
</html>