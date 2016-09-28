<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
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
<!--
img[title] {
	color: red;
	text-align: left
}
-->
.ui-draggable, .ui-droppable {
	background-position: top;
}
/* Set height of the grid so .sidenav can be 100% (adjust if needed) GF - this overrides teh stye.css .row.content*/
.row.content {
	height: 1500px
}
</style>
  <title>Family Tree</title>
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
  </head>

  <body id="bootstrap-overrides">
<div class="container-fluid">
    <div class="row">
    <div id= "right_container" class="col-sm-4">
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
    <div class="col-sm-8"> 
        <!--          			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>   -->
        <section>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
      </section>
        <section>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
      </section>
        <section>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple/>
              </div>
          </form>
          </div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple/>
              </div>
          </form>
          </div>
      </section>
        <section>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <form action="/upload" class="dropzone" id="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple/>
              </div>
          </form>
          </div>
      </section>
      </div>
  </div>
  </div>
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
