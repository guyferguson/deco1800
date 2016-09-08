<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Strengthen Your DNA</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
  	<style>
/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
.row.content {height: 100%}
    
/* Set gray background color and 100% height */
.col-sm-4 {
	background-color: #f1f1f1;
    height: 100%;
}
    
/* Set black background color, white text and some padding */
footer {
     	background-color: #555;
      	color: white;
      	padding: 15px;
}
    
/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
.sidenav {
       	height: auto;
      	padding: 15px;
}
.row.content {height: auto;}
}
   		 
html {
  position: relative;
  min-height: 100%;
}

body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  
/* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}
</style>
</head>



<body>

	<div class="container-fluid">
		<div class="row">
 			<div id= "right_container" class="col-sm-4">
 					
<!-- Trigger the modal with a SIGN IN button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign In</button>

<!-- SIGN IN Modal -->
			<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">

<!-- SIGN IN Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Sign In</h4>
      		</div>
      		<div class="modal-body">
        		<p>
        		<form>
  				<div class="form-group">
   					<label for="email">Email address:</label>
    				<input type="email" class="form-control" id="email">
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password:</label>
    				<input type="password" class="form-control" id="pwd">
  				</div>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        	</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
		</div>
		</div>

<!-- Trigger the modal with a SIGN UP button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Sign Up</button>

<!-- SIGN UP Modal -->
			<div id="myModal2" class="modal fade" role="dialog">
  			<div class="modal-dialog">

<!-- SIGN UP Modal content-->
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Sign Up</h4>
      		</div>
      		<div class="modal-body">
        		<p>
        		<form>
  				<div class="form-group">
   					<label for="email">First Name:</label>
    				<input type="email" class="form-control" id="fname">
  				</div>
				<div class="form-group">
   					<label for="email">Last Name:</label>
    				<input type="email" class="form-control" id="lname">
  				</div>
				<div class="form-group">
   					<label for="email">Email Address:</label>
    				<input type="email" class="form-control" id="email">
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password:</label>
    				<input type="password" class="form-control" id="pwd">
  				</div>
  				<div class="checkbox">
    				<label><input type="checkbox"> Remember me</label>
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        	</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>
		</div>
		</div>


		</div>


  		<div class="col-sm-8">FAMILY TREE</div>
  		</div>
		</div>
		</div>


<footer class="footer">
		<nav class="navbar navbar-default">
 			<div class="container-fluid">
    			<div class="navbar-header">
     				<a class="navbar-brand" href="index.html">Strengthen My DNA</a>
   				</div>
    		<ul class="nav navbar-nav">
			<li><a href="family_tree.html">Family Tree</a></li> 
      			<li><a href="facial_recog.html">Facial Recognition</a></li> 
      			<li><a href="about.html">About</a></li> 
    		</ul>
		<ul class="nav navbar-nav navbar-right">
      			<li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    		</ul>
    		</nav>
    		</div>
 </footer>










<script type="text/javascript">
	var apiKey = "bjta6lbqejkmpk9k";;
	(function($){
	$(document).ready(function(){
		$('div#search_progress').hide();
		/* action that occurs when the form is submitted - either through hitting the enter key
		// or by clicking on Search
		$("form#searchTrove").submit(function() {
	    	
	    	$('#search_progress').show(); 
	    	//show the progress bar as a search has been initiated
			/
		    // Get the values from our search form
		    var searchTerm = $("#searchTerm").val();
		    // Set the search zone - alternatively you can set this using a form input
		    var searchZone = "newspaper";
		    var sortBy = $("#sortBy").val();
		    
		    /* 
		    *	Construct the URL for the Trove Search API
		    * 	http://api.trove.nla.gov.au/result? is the base URL required for accessing the
TROVE API
		    * 	Additional arguments are sent as key/value pairs separated by the & sign
		    * 	key is the API key needed to access the API
		    * 	encoding tells the API how to return the results - json or xml (default)
		    * 	zone tells the API where to perform the search - book, picture, article, music,
map, collection, newspaper, list or all can be used
		    * 	sortby tells the API how to sort the results - datedesc, dateasc, relevance
		    * 	q is the set of keywords to search on, alternatively you can use Indexes to
refine the search terms (see the API documentation for how to use indexes & which zones support
each one
		    *	callback allows you to specify a function to process the response - even if you
choose not to set one, you need to include the callback parameter
		    * 	See the API documentation for other parameters you can use in the search string
		    */ 
		    var url = "http://api.trove.nla.gov.au/result?key=" 
		        + apiKey + "&encoding=json&zone=" + searchZone 
		        + "&sortby=" + sortBy
		        + "&q=" + searchTerm + "&callback=?";
		
		    /*	
		    * 	Perform the search using jQuery's getJSON method
		    *	Requires the search URL
		    */	
		    console.log(url);
		    	
		    $.getJSON(url, function(data) {
		    	// clear the HTML div that will display the results
		        $('#output').empty();
		        $('#search_progress').hide(); //hide the search bar because the search has been
completed
		        		        
		        if (data.response.zone[0].records.article){
		        	// For each result returned, call getArticleText to retrieve the transcribed
		        	// text
		            $.each(data.response.zone[0].records.article, getArticleText);
		            // Output the search results in JSON format to the console, use developer
		            // tools to see how the data is structured.
		            console.log(data);
		        }else{
			        $('#output').append("<p>No search results found for"+searchTerm+"</p>");
		        }
				});
			});
			}
			/**
			* There is an issue with TROVE applications where the first search will result in
nothing being returned
			* To get around this, we perform an API call once after the page has loaded.
			* Remaining calls return successfully (providing there are results to be returned 
			**/
			var urlFirst = "http://api.trove.nla.gov.au/result?key=" 
		        + apiKey + "&encoding=json&zone=newspaper&q=brisbane&callback=?";
			$.getJSON(urlFirst, function(data){
				if(data.response.zone[0].records.article){
					$('#output').append("<p>Ready...</p>");
				}
			});
			}
		});
function getArticleText(index, item){
	/*
	* Construct the search URL
	* Using the item ID, set the inclusions for the result - using the include parameter
	*/
	var articleURL = "http://api.trove.nla.gov.au/newspaper/"
	+ item.id 
	+ "?key="+apiKey
	+ "&include=articletext,pdf&encoding=json&callback=?";
	// Pull what values you can from the original result - article title & URL
	var title = item.heading;
	var url = item.troveUrl;
	
	// Perform the search
	$.getJSON(encodeURI(articleURL), function(data){
		// Create a div element
		var info = document.createElement("div");
		// Give it the Bootstrap class panel
		$(info).addClass("panel");
		// Add the article title as a link contained in a div
		$(info).append("<div class='panel-heading'><a href='"
			+url+"' alt='Link to Trove Record'>"+title
			+"</a></div>");
		// Add the article text returned in the result to a new div and construct the link to the
		// printable PDF document from the article ID.
		$(info).append("<div class='panel-body'>"
			+data.article.articleText
			+"<a href='http://trove.nla.gov.au/ndp/del/printArticlePdf/"
			+data.article.id
			+"' alt='Link to PDF article'>PDF of Article</a></div>");
			//Add the result to the search results element
		$("#output").append($(info));
	});
	}}
}(jQuery));
</script>

</body>
</html>







<body>
</body>
</html>