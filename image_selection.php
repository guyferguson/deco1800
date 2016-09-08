<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">  
<title>Image selection</title>
</head>

<body>

	<div class="container-fluid">
		<div class="row">
 			<div id= "right_container" class="col-sm-4">
				<div class="row">
 					<div class="span4">
    						<a href="pulpitrock.jpg" class="img-responsive">
      							<p></p> 
							<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      							<img id="drag1" class="center-block" src="dog.jpg" alt="Pulpit Rock" draggable="true" ondragstart="drag(event)" style="width:150px;height:150px">
    						</a>
  					</div>
					<div class="span4">
    						<a href="pulpitrock.jpg" class="img-responsive">
      							<p></p> 
      							<img class="center-block" src="pulpitrock.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
    						</a>
  					</div>
					<div class="span4">
    						<a href="pulpitrock.jpg" class="img-responsive">
      							<p></p> 
      							<img class="center-block" src="pulpitrock.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
    						</a>
  					</div>
  					<div class="span4">
    						<a href="moustiers-sainte-marie.jpg" class="img-responsive">
      							<p></p>
      							<img class="center-block" src="moustiers-sainte-marie.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
    						</a>
  					</div>
					<div class="span4">
    						<a href="pulpitrock.jpg" class="img-responsive">
      							<p></p> 
      							<img class="center-block" src="pulpitrock.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
    						</a>
  					</div>
  					<div class="span4">
    						<a href="moustiers-sainte-marie.jpg" class="img-responsive">
      							<p></p>
      							<img class="center-block" src="moustiers-sainte-marie.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
    						</a>
  					</div>
					<ul class="pager">
  						<li class="previous"><a href="#">Previous</a></li>
 						 <li class="next"><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 					
<div class="col-sm-8">
      <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
       
</div>

<footer class="footer">
		<nav class="navbar navbar-default">
 			<div class="container-fluid">
    			<div class="navbar-header">
     				<a class="navbar-brand" href="index.php">Strengthen My DNA</a>
   				</div>
    		<ul class="nav navbar-nav">
			<li><a href="family_tree.php">Family Tree</a></li> 
      			<li class="active"><a href="image_selection.php">Facial Recognition</a></li> 
      			<li><a href="about.html">About</a></li> 
    		</ul>
		<ul class="nav navbar-nav navbar-right">
      			<li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    		</ul>
    		</nav>
    		</div>
 </footer>
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