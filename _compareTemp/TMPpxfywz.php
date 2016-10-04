<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/smartpaginator.js" type="text/javascript"></script>
<link href="css/smartpaginator.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script>

<style>

#draggable {
	width: 200px;
	height: 200px;
	padding: 0.5em;
	margin: 10px 10px 10px 0;
}
#droppable {
	width: 200px;
	height: 200px;
	padding: 0.5em;
	margin: 10px;
}
.ui-draggable, .ui-droppable {
	background-position: top;
}
/* Set height of the grid so .sidenav can be 100% (adjust if needed) GF - this overrides teh stye.css .row.content*/
.row.content {
	height: 1500px
}
</style>
<title>Family Tree</title>
</head>

<body id="bootstrap-overrides">
<div class="container-fluid">
  <div class="row">
    <div id= "right_container" class="col-sm-3">
      <div class="container-fluid">
        <div class="row">
          <p class = "lead">Enter your surname here:</p>
          <form action="#" id="searchTrove">
            <input id="searchTerm" type="text" />
            <button type="submit" id="searchbtn">Search</button>
          </form>
          <div id="smart-paginator" > </div>
          <div id="output"> </div>
        </div>
      </div>
    </div>
    <div class="col-sm-9"> 
      <!--          			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>   -->
    <div class="container">  
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
  	</div>
    <div class="container"> 
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
        <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><center>Drag and Drop Image Here</center></div>
	</div>
	
	<div class="container">
        <div class="child">
          <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple/>
            </div>
          </form>
        </div>
        <div class="child">
          <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple/>
            </div>
          </form>
        </div>
  </div>


  
  
  <div class="container">
        <div class="child">
          <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple/>
            </div>
          </form>
        </div>
    </div>
        
<!-- Image Slider-->        

  <button class="next">Next</button>
  <button class="prev">Previous</button>
  <div class="image_slider">
    <div style="display: inline-block;">
      <img src="Images/tree_index.jpeg"/>
    </div>
    <div>
     <img src="Images/tree_index1.jpeg"/>
    </div>
    <div>
      <img src="Images/tree_index2.jpeg"/>
    </div>
    <div>
      <img src="Images/tree_index3.jpeg"/>
    </div>
    <div>
      <img src="Images/tree_index4.jpeg"/>
    </div>
    <div>
      <img src="Images/tree_index5.jpeg"/>
    </div>
  </div>

        
    </div>
  </div>
</div>
</body>



<nav class="navbar navbar-fixed-bottom" id="navbar">
<div class="container-fluid">
  <ul class="nav navbar-inverse navbar-nav">
    <li><a class="navbar-brand" href="index.php">Strengthen My DNA</a>
    <li class="active"><a href="family_tree.php">Family Tree</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
    <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
  </ul>
  </nav>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  --> 
<!--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   --> 
<script src="js/trove.js"></script> 
<script src="js/strengthen_dna_general.js"></script> 
<script type="text/javascript" src="js/jquery.js?ver=1.11.1"></script> 
<script type="text/javascript" src="js/jquery-migrate.min.js?ver=1.2.1"></script>
</body>
</html>
