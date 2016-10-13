<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Strengthen Your DNA</title>
    <link rel="stylesheet" href="css/style.css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="facebook_javascript_api_file_src"></script>

  </head>
  
  <body> 
<!-- facebook login-->
<div id="fb-root"></div>
		<script>
    (function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
 			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1186835531391087";
 			 fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
</script>

<script src="js/google_jquery.min.js"></script> 
    <script src="js/strengthen_dna_general.js"></script>

<!--navabr--> 
  <div id="navbar1">
  	<div id="fb-root"></div>
   	<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="true" 
	data-auto-logout-link="true" onlogin="successfulLogin()"  data-show-faces="true"></div>
  		<ul id="index_nav">
   			 <li><a href="#section1">Strengthen My DNA</a>
   			 <li><a href="family_tree.php">Family Tree</a></li>
   			 <li><a href="#about">About</a></li>
   			 <li><a href="#how_to">How to</a></li>
		</ul>
	</div>

<div id="section1" class="parallax">


</div>

<section>
	<div id="about">
	<h1> About </h1>
	<p> Strengthen Your DNA is reimagining TROVE data in a fun and exciting way!<br>
	We allow you to search thousands of potential ansestors that have been lost in <br>
	the TROVE databases to find potential family members. You can even share your discoveries <br>
	with family and friends or print them out. Keep scrolling for How To Steps or simply log<br>
	in to Facebook to start you journey.
	</div>
</section>

<div id="section2" class="parallax">
</div>

<section>
	<div id="how_to">
	<h1> How TO </h1>
	<p>
	</div>
</section>

<div id="section3" class="parallax">


</div>

</body>
   
<!--
    	<div class="row-fluid">
    		<div class="col-xs-2">
    <h4>Better Families Now!</h4>
    <p> Enter a generation year (search returns +/- ten years either side) </p>
		
			<p class = "lead">Enter Generation Year    Enter your surname here:</p>
			<form action="#" id="searchTrove">
        	<input id="searchYear" type="number" />
			<input id="searchTerm" type="text" />
		
			<button type="submit" id="searchbtn">Search</button>
			</form>
		<div id="output">

		</div>
		</div>
         <div class="col-xs-6">
         <h1> This is where the tree will go</h1>
			</div>
			</div>
			</div>
            
            
            -->
	<!--	<footer class="site-footer"><div class=" site-info">Fake Family Tree</div></footer>-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script type="text/javascript" src="js/jquery.js?ver=1.11.1"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js?ver=1.2.1"></script> -->
	
  
    <script src="js/trove.js"></script>
	
        
  </body>
</html>













