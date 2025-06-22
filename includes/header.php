<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1" />

<link  rel="stylesheet" type="text/css" href="/css/styles.css"/>
<link  rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/flaunt.js" type="text/javascript"></script>


<script type="text/javascript">
$(document).ready(function(){
	
	/* Nav Links */
	$('.nav-list li a').each(function() {
		if(this.href.toLowerCase() == (window.location+"").toLowerCase()) {
			$(this).parents("li").addClass("current");	
		}
	});
	
	/* Breadcrumbs */
	$('.breadcrumbs li a').each(function() {
		if(this.href.toLowerCase() == (window.location+"").toLowerCase()) {
			$(this).parents("li").addClass("current");	
		}
	});
	
	/* Projects */
	$("#work .bucket").hover(function() { 
		$(this).children(".view").fadeIn(200); }, function() { 
		$(this).children(".view").fadeOut(200); 
	});
	
});	
</script>

</head>

<body>

<header class="clearfix">

	<section class="width clearfix">
	
        <div class="logo">
            <a href="/"><img src="/img/logo.png" border="0" alt="Andrea Golindano" /></a>
        </div>
        
        <nav class="nav clearfix">
            <ul class="nav-list clearfix">
                <li class="nav-item"><a href="/">Home</a></li>
                <li class="nav-item"><a href="/about.php">About</a></li>
                <li class="nav-item"><a href="/work/">Work</a></li>
                <li class="nav-item"><a href="mailto:acgolindano@gmail.com">Contact</a></li>
            </ul>
        </nav>
        
	</section>
    
</header>