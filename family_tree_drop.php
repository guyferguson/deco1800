<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/google_jquery.min.js"></script>
<script src="js/smartpaginator.js" type="text/javascript"></script>
<script src="js/jsPDF-1.2.60/dist/jspdf.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="css/print.css" media="print">
<link href="css/smartpaginator.css" rel="stylesheet" type="text/css" />
<style>
.ui-widget-content {
	width: 7vw;
	height: 7vw;
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
element.style {
	width: 100%;
}
/* Set height of the grid so .sidenav can be 100% (adjust if needed) GF - this overrides teh stye.css .row.content*/
.row.content {
	height: 1500px
}
 #gallery { float: left; width: 65%; min-height: 12em; }
  .gallery.custom-state-active { background: #eee; }
  .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li span { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
 
  #trash { float: right; width: 32%; min-height: 18em; padding: 1%; }
  #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
  #trash h4 .ui-icon { float: left; }
  #trash .gallery h5 { display: none; }
</style>
<title>Family Tree</title>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1186835531391087";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id= "left_container" class="noprint">
  <div id = "status"></div>
  <p class = "lead">Enter your surname here:</p>
  <form action="#" id="searchTrove">
    <input id="searchTerm" type="text" />
    <button type="submit" id="searchbtn">Search</button>
  </form>
  <div id="smart-paginator" > </div>

  <div id="output" class="ui-widget ui-helper-clearfix">
</div>
</div>
<div id="right_container"> 
  <!--          			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>   -->
    <div class="container" class="noprint">
  <div class="child ui-droppable ui-widget-content ui-state-default" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child ui-droppable ui-widget-content ui-state-default" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child ui-droppable ui-widget-content ui-state-default" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child" id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child" id="div5" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child" id="div6" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child" id="div7" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
  <div class="child" id="div8" ondrop="drop(event)" ondragover="allowDrop(event)">
    <center>
      ...
    </center>
  </div>
</div>
<div class="container" class="noprint">
<div class="child" id="div9" ondrop="drop(event)" ondragover="allowDrop(event)">
  <center>
    ...
  </center>
</div>
<div class="child" id="div10" ondrop="drop(event)" ondragover="allowDrop(event)">
  <center>
    ...
  </center>
</div>
<div class="child" id="div11" ondrop="drop(event)" ondragover="allowDrop(event)">
  <center>
    ...
  </center>
</div>
<div class="child" id="div12" ondrop="drop(event)" ondragover="allowDrop(event)">
  <center>
    ...
  </center>
</div>
</div>
<div class="container" class="noprint">
<div class="child" id="div13" ondrop="drop(event)" ondragover="allowDrop(event)">
  <form action="upload.php" class="dropzone" id="dropzone">
    <div class="fallback">
      <input name="file" type="file" multiple/>
    </div>
  </form>
</div>
<div class="child" id="div14" ondrop="drop(event)" ondragover="allowDrop(event)">
  <form action="upload.php" class="dropzone" id="dropzone">
    <div class="fallback">
      <input name="file" type="file" multiple/>
    </div>
  </form>
</div>
</div>
<div class="container" class="noprint">
<div class="child" id="div15" ondrop="drop(event)" ondragover="allowDrop(event)">
  <form action="upload.php" class="dropzone" id="dropzone">
    <div class="fallback">
      <input name="file" type="file" multiple/>
    </div>
  </form>
</div>
</div>

<!-- Image Slider-->

<button class="next" class="noprint">
Next<br>
Background
</button>
<button class="prev" class="noprint">
Previous<br>
Background
</button>
<div class="image_slider">
  <div style="display: inline-block;"> 
  <img class="tree_background" src="Images/CloudTreeLong_compressed_smallest.png"/>
  <img class = "connector" src="Images/Connector.png"/>   
  </div>
  <div>
  <img src="Images/FlowerTree_smallest.png"/>
  <img class = "connector" src="Images/Connector.png"/>
</div>
  <div> <img src="Images/DotTree_smallest.png"/><img class = "connector" src="Images/Connector.png"/></div>
  <div> <img src="Images/tree_index7.jpg"/><img class = "connector" src="Images/Connector.png"/> </div>
  <div> <img src="Images/FlowerTree_smallest.png"/><img class = "connector" src="Images/Connector.png"/> </div>
  <div> <img src="Images/tree_index6.jpg"/> <img class = "connector" src="Images/Connector.png"/></div>
</div>
</div>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>
<div id="navbar" class="noprint">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#" onClick=" window.print(); return false">Print Your Family Tree</a></li>
    <li><a data-pin-do="buttonBookmark" data-pin-tall="true" data-pin-round="true" 
  	data-pin-save="false" href="https://www.pinterest.com/pin/create/button/"><img 
  	src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" /></a></li>
    <li>
      <div class="fb-share-button" data-href="http://deco1800-405.uqcloud.net/family_tree.php" 
  	data-layout="button_count" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" 
  	target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdeco1800-405.uqcloud.net%2Ffamily_tree.php&amp;src=sdkpreparse">Share</a></div>
    </li>
  </ul>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/strengthen_dna_general.js"></script>
<script src="js/trove.js"></script>
</body>
</html>
