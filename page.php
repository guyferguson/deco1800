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
<script type="text/javascript">
     $(document).ready(function() {
		   $('.img6.test:not(:first)').css('display', 'none');
		   
           $('#smart-paginator').smartpaginator({ totalrecords: 5, recordsperpage: 1, datacontainer: 'output', dataelement: '.img6', initval: 0, next: 'Next', prev: 'Prev', first: 'First', last: 'Last', theme: 'green'
 
         });
 
         });
 </script>
<style>
.wrapper {
    position: relative;
    padding: 0;
    width:200px;
    display:block;
}
.text {
    position: absolute;
    top: 0;
    color:black;
  /*  background-color:rgba(255,255,255,0.8);*/
    width: 200px;
    height: 60px;
    line-height:60px;
    text-align: center;
    z-index: 10;
    opacity: .6;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.text:hover {
    opacity:1;
}
}

img {
    z-index:1;
}
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
          <h3>Image Search Results</h3>
          <div id="smart-paginator" > </div>
          <div id="output">
            <div class="img6"> 
            <a href="#" class="wrapper">
   				 <span class="text">
                 1860
                 </span>
           		 <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=102166" alt="Mcleannan Lola Ferguson and Alice, Paisley Scotland" id="draggable" title="1860" draggable="true" ondragstart="drag(event)"> 
            </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1866
                 </span>
            <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=393808" alt="Johnny Ferguson - age 22 - &quot;Nallong Malbill&quot; Goulbourne [Goulburn] Tribe" id="draggable" title="1866" draggable="true" ondragstart="drag(event)"> 
             </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1869
                 </span>
            <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3361532" alt="Sir George Ferguson Bowen / J Botterill" id="draggable" title="1869" draggable="true" ondragstart="drag(event)"> 
             </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1873
                 </span>
            <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3494899" alt="Sir George Ferguson Bowen, Governor of Victoria, Australia. Bradley &amp; Rulofson" id="draggable" title="1873" draggable="true" ondragstart="drag(event)"> 
             </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1885
                 </span>
            <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3058791" alt="Helen Munro-Ferguson [wife of Governor General of Australia, 1814-1820]" id="draggable" title="1885" draggable="true" ondragstart="drag(event)"> 
             </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1890
                 </span>
               <img src="http://nla.gov.au/nla.obj-145708093/representativeImage?wid=900" alt="Miss Ferguson" id="draggable" title="1890" draggable="true" ondragstart="drag(event)"> </div>
                </a>
                 <div class="img6"> 
             <a href="#" class="wrapper">
   				 <span class="text">
                 1896
                 </span>
           
            <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=457553" alt="Wm. Ferguson, 1859 / G. L. Massingham" id="draggable" title="1896" draggable="true" ondragstart="drag(event)"> 
             </a>
             <a href="#" class="wrapper">
   				 <span class="text">
                 1902
                 </span>
            <img src="http://collections.museumvictoria.com.au/content/media/19/719719-thumbnail.jpg" alt="Photograph - Portrait of 'Sister Ferguson', Kimberley, South Africa, 1902" id="draggable" title="1902" draggable="true" ondragstart="drag(event)"> <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=369926" alt="Senator J. Ferguson, Queensland / D. Bernard &amp; Co" id="draggable" title="1902" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136668243/representativeImage?wid=900" alt="Portrait of Ronald Munro Ferguson / Alice Mills" id="draggable" title="1910" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136668354/representativeImage?wid=900" alt="[Portrait of Sir Ronald Munro Ferguson]" id="draggable" title="1910" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136668139/representativeImage?wid=900" alt="Portrait of Ronald Munro Ferguson, 1914-20" id="draggable" title="1910" draggable="true" ondragstart="drag(event)"> </div>
            <div class="img6"> <img src="http://nla.gov.au/nla.obj-136668461/representativeImage?wid=900" alt="Portrait of  R. C. Munro Ferguson / H. Walter Barnett" id="draggable" title="1910" draggable="true" ondragstart="drag(event)"> <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=296917" alt="The Governor General Sir Ronald Munro-Ferguson in open carriage" id="draggable" title="1914" draggable="true" ondragstart="drag(event)"> <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3128275" alt="Gnr. A.H. Ferguson, 42nd Bty. A.I.F" id="draggable" title="1915" draggable="true" ondragstart="drag(event)"> <img src="http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/3c12195r.jpg" alt="[Homer L. Ferguson, head-and-shoulders portrait, facing left]" id="draggable" title="1919" draggable="true" ondragstart="drag(event)"> <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=1273466" alt="[Neva Ferguson, Bus Conductor]" id="draggable" title="1927" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136260767/representativeImage?wid=900" alt="Portrait of Sir John Ferguson / Monte Luke" id="draggable" title="1930" draggable="true" ondragstart="drag(event)"> </div>
            <div class="img6"> <img src="http://collections.museumvictoria.com.au/content/media/48/482698-thumbnail.jpg" alt="Photograph - 'Portrait of D.B Ferguson', Melbourne, Victoria, circa 1932" id="draggable" title="1932" draggable="true" ondragstart="drag(event)"> <img src="http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/3c07083r.jpg" alt="[Elpidio Quirino, head-and-shoulders portrait, facing front] by staff correspondant Richard C. Ferguson" id="draggable" title="1949" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-151263763/representativeImage?wid=900" alt="Group portrait of, from left to right, George Ferguson of Angus and Robertson, Thelma Clune and William Dobell, ca. 1950s" id="draggable" title="1950" draggable="true" ondragstart="drag(event)"> <img src="http://collections.museumvictoria.com.au/content/media/36/431886-thumbnail.jpg" alt="Photograph - Massey Ferguson, Group Portrait, Melbourne, Victoria, 1955-1965" id="draggable" title="1955" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-145873726/representativeImage?wid=900" alt="Portrait of Sir John Ferguson, ca. 1965 / Keast Burke" id="draggable" title="1959" draggable="true" ondragstart="drag(event)"> </div>
            <div class="img6"> <img src="http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=2848945" alt="Sir John Ferguson" id="draggable" title="1960" draggable="true" ondragstart="drag(event)"> <img src="http://collections.museumvictoria.com.au/content/media/19/432069-thumbnail.jpg" alt="Photograph - Massey Ferguson, Portrait of Ernie Nicholls, Australia, circa 1960s" id="draggable" title="1960" draggable="true" ondragstart="drag(event)"> <img src="http://collections.museumvictoria.com.au/content/media/30/381680-thumbnail.jpg" alt="Photograph - Massey Ferguson, Cane Farmer, Queensland, 1960s" id="draggable" title="1960" draggable="true" ondragstart="drag(event)"> <img src="http://collections.museumvictoria.com.au/content/media/35/431885-thumbnail.jpg" alt="Photograph - Massey Ferguson, Group Portrait, Melbourne, Victoria, 1960" id="draggable" title="1960" draggable="true" ondragstart="drag(event)"> <img src="http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&amp;S=1&amp;B=11354941" alt="Personalities - Portrait of Sir Ronald MUNRO-FERGUSON, former Governor General" id="draggable" title="1978" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136335184/representativeImage?wid=900" alt="Portrait of Martin Ferguson, 1988" id="draggable" title="1988" draggable="true" ondragstart="drag(event)"> </div>
            <div class="img6"> <img src="http://nla.gov.au/nla.obj-136519931/representativeImage?wid=900" alt="[Portrait of Martin Ferguson]" id="draggable" title="1990" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-136446944/representativeImage?wid=900" alt="Portrait of Senator Alan Ferguson taken at the Constitutional Convention, Canberra, February 2-13, 1998 / Loui Seselja" id="draggable" title="1998" draggable="true" ondragstart="drag(event)"> <img src="http://nla.gov.au/nla.obj-146665056/representativeImage?wid=900" alt="Portrait of Martin Ferguson, Non-Executive member, National Library of Australia Council, 8 Oct. 1999 / Damian McDonald" id="draggable" title="1999" draggable="true" ondragstart="drag(event)"> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-8"> 
        <!--          			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>   -->
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
