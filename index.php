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


<!--index page --!>
<div id="section1">

	<img id="LOGO1" src="/Images/LOGO1.jpg" alt="LOGO1">

<!-- Trigger/Open The Modal -->
<button id="myBtn">Click to Start Your <br>Family Tree!</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times</span>
      <p>Welcome!</p>
    </div>
    <div class="modal-body">
      <p>Strengthen Your DNA is a web application that allows you to create a potential family
      tree from TROVE databases. Have fun finding & searching for family members!</p> 
    </div>
<div class="modal-footer">
	<p>To start your family tree:</p>
    
    <div id="fb-root"></div>
   	<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="true" 
	data-auto-logout-link="true" onlogin="successfulLogin()"  data-show-faces="true"></div>
	</div> 
	<p id="OR"> OR</p>	
	<div>
	<a id="start_btn" href="http://deco1800-405.uqcloud.net/family_tree.php"><button id=start_btn>Continue without Facebook</button></a>

</div>
  </div>
		
		
		<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</div>


</div>

   
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













