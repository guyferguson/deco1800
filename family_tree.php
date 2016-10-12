<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/google_jquery.min.js"></script>
<script src="js/smartpaginator.js" type="text/javascript"></script>
<script src="js/jsPDF-1.2.60/dist/jspdf.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/smartpaginator.css" rel="stylesheet" type="text/css" />
<style>
.ui-widget-content {
	width: 180px;
	height: 180px;
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

<body>
			<style>
			FB.ui({
  				method: 'share',
				href: 'https://developers.facebook.com/docs/',
			}, function(response){});

			</style>




<div id= "left_container">
<button id="cmd">generate PDF</button>
  <p class = "lead">Enter your surname here:</p>
  <form action="#" id="searchTrove">
    <input id="searchTerm" type="text" />
    <button type="submit" id="searchbtn">Search</button>
  </form>
  <div id="smart-paginator" > </div>
  <div id="output"> </div>
</div>

<div id="right_container"> 
  <!--          			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>   -->
  <div class="container">
    <div class="child" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div5" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div6" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div7" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div8" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
  </div>
  <div class="container">
    <div class="child" id="div9" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div10" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div11" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
    <div class="child" id="div12" ondrop="drop(event)" ondragover="allowDrop(event)">
      <center>
        Drag and Drop Image Here
      </center>
    </div>
  </div>
  <div class="container">
    <div class="child" id="div13">
      <form action="upload.php" class="dropzone" id="dropzone">
        <div class="fallback">
          <input name="file" type="file" multiple/>
        </div>
      </form>
    </div>
    <div class="child" id="div14">
      <form action="upload.php" class="dropzone" id="dropzone">
        <div class="fallback">
          <input name="file" type="file" multiple/>
        </div>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="child" id="div15">
      <form action="upload.php" class="dropzone" id="dropzone">
        <div class="fallback">
          <input name="file" type="file" multiple/>
        </div>
      </form>
    </div>
  </div>
  
  <!-- Image Slider-->
  
  <button class="next">Next<br>Background</button>
  <button class="prev">Previous<br>Background</button>
  <div class="image_slider">
    <div style="display: inline-block;"> <img src="Images/CloudTreeLong_compressed_smallest.png"/> </div>
    <div> <img src="Images/DotTree_smallest.png"/> </div>
    <div> <img src="Images/FlowerTree_smallest.png"/> </div>
    <div> <img src="Images/uml2.png"/> </div>
    <div> <img src="Images/tree_index4.jpeg"/> </div>
    <div> <img src="Images/tree_index5.jpeg"/> </div>
  </div>
</div>

<div id="navbar">
  <ul>
  	<li><a href="index.php">Home</a></li>
  </ul>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/trove.js"></script>
<script src="js/strengthen_dna_general.js"></script>
</body>
</html>
