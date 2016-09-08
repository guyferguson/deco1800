<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">  
    
    <style>
/* Set height of the grid so .sidenav can be 100% (adjust if needed) GF - this overrides teh stye.css .row.content*/
   .row.content {height: 1500px}
	</style>	
<title>Family Tree</title>
</head>

<body>
<div class="container-fluid">
		<div class="row">
 			<div id= "right_container" class="col-sm-4">
 			<div class="container">
    			<div class="row">
      				<nav class="col-sm-4" id="myScrollspy">
        				<ul class="nav nav-pills nav-stacked">
        					<li><a href="#sixthgen">Sixth Generation</a></li>
        					<li><a href="#fifthgen">Fifth Generation</a></li>
        					<li><a href="#fourthgen">Fourth Generation</a></li>
        					<li><a href="#thirdgen">Third Generation</a></li>
        					<li><a href="#secondgen">Second Generation</a></li>
        					<li><a href="#firstgen">First Generation</a></li>
       					 </ul>
     				 </nav>
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
			</div>
      

	<div class="col-sm-8">
      <div id="sixthgen"> 
          <h1>Sixth Generation</h1>
          <p>pic</p>
        </div>
      <div id="fifthgen"> 
          <h1>Fifth Generation</h1>
          <p>Try to scroll this page and look at the navigation list while scrolling!</p>
        </div>
      <div id="fourthgen"> 
          <h1>Fourth Generation</h1>
          <p>Try to scroll this page and look at the navigation list while scrolling!</p>
        </div>
      <div id="thirdgen"> 
          <h1>Third Generation</h1>
          <p>Try to scroll this page and look at the navigation list while scrolling!</p>
        </div>
      <div id="secondgen"> 
          <h1>Second Generation</h1>
          <p>Try to scroll this page and look at the navigation list while scrolling!</p>
        </div>
        <div id="firstgen"> 
          <h1>First Generation</h1>
          <p>Try to scroll this page and look at the navigation list while scrolling!</p>
        </div> 
       
       </div>
    	</div>
  		</div>
 		</div>
  		</div>
  		</div>
<footer class="footer">
		<nav class="navbar navbar-default">
 			<div class="container-fluid">
    			<div class="navbar-header">
     				<a class="navbar-brand" href="index.php">Strengthen My DNA</a>
   				</div>
    		<ul class="nav navbar-nav">
				<li class="active"><a href="family_tree.php">Family Tree</a></li> 
      			<li><a href="image_selection.php">Facial Recognition</a></li> 
      			<li><a href="about.html">About</a></li> 
    		</ul>
		<ul class="nav navbar-nav navbar-right">
      			<li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    		</ul>
    		</nav>
    		</div>
 </footer>
  			
		
	</div>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/trove.js"></script>
    <script src="js/strengthen_dna_general.js"></script>
    <script type="text/javascript" src="js/jquery.js?ver=1.11.1"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js?ver=1.2.1"></script>
</body>
</html>