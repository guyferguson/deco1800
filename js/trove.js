// JavaScript Document
// 27.08.2016  Moved here by GuyFerguson, to separate js from main presentation page index.php
// Added a reference on index.php:
//
//         <script src="js/trove.js">

//	GLOBALS
 	   	var loadedImages = [];
		var newHtml = $('');
		var wrapper;
		var image;
		var spn;
		var  j;
       	var urlPatterns = ["flickr.com", "nla.gov.au", "artsearch.nga.gov.au", "recordsearch.naa.gov.au", "images.slsa.sa.gov.au", "collections.museumvictoria.com.au","archival-classic.sl.nsw.gov.au","handle.slv.vic.gov.au","hdl.loc.gov", "hdl.handle.net", "contentdm.lib.byu.edu", "cms.sl.nsw.gov.au", "gallica2.bnf.fr"];
       	var found = 0;
		var wins = 0;   
		var loses = -1;		
// ========================================================================================================
		
  (function($){  
  
	   	function succeed() {
		    spn = $("<span>", {"class": "text"});
			//console.log(loadedImages);
			$(spn).text(loadedImages[j][0]);
			wrapper =  $("<a>", {"class": "wrapper", "id":loadedImages[j][3]} ).append(spn);
			$(wrapper).attr("draggable","true");
			$(wrapper).attr("ondragstart","drag(event)");
		    if ((j % 6) === 0) {
					//Commence by adding what we have to #output
					console.log("Appending! j="+j);
					$("#output").append(newHtml);
					newHtml=$("<div class = 'img6'>");
					//Add the first image to this img6 div
					newHtml.append(wrapper.append(image));
					 
			} else {
					newHtml.append(wrapper.append(image));
					 
			}
			console.log("Image " + image.src + " loaded");
		    console.log("image loaded correctly..mutex=" + mutex); 
			mutex = 1;
		    console.log("about to exit success..mutex=" + mutex);
		  }

	 function fail() {
		  console.log("image did not load..mutex=" + mutex); 
		  newHtml = $("<p>bad pic!</p>");
		  image = '';
		  wrapper = $('');
		  mutex = 1;
		  }
		  
	function buildImageTag() {
	 	if(found === loadedImages.length) {
			// Change the header above search box.		
  			$("p.lead").css("font-size", "18px");
			$("p.lead").text("Drag any image across to your tree-->");
		//	mutex = 1;  //Set mutex to TRUE on first pass
	    	j = 0;
			for (var i = 0; i < loadedImages.length; i++) {
				
					image = new Image();
					console.log("i = " + 1);
					//console.log(wrapper);
					image.src = loadedImages[i][1];
					image.style.verticalAlign = "top";
					image.className = "ui-widget-content";
					image.alt = loadedImages[i][2];
					image.title = loadedImages[i][0];
					console.log("About to test load");
					 spn = $("<span>", {"class": "text"});
					//console.log(loadedImages);
					$(spn).text(loadedImages[j][0]);
					wrapper =  $("<a>", {"class": "wrapper", "id":loadedImages[j][3]} ).append(spn);
					$(wrapper).attr("draggable","true");
					$(wrapper).attr("ondragstart","drag(event)");
					if ((j % 6) === 0) {
							//Commence by adding what we have to #output
							console.log("Appending! j="+j);
							$("#output").append(newHtml);
							newHtml=$("<div class = 'img6'>");
							//Add the first image to this img6 div
							newHtml.append(wrapper.append(image));
					} else {
					newHtml.append(wrapper.append(image));
					 
					}
					//console.log("Passed back from succeed..mutex=" + mutex);   
					//	image.onerror =  fail;
					//console.log("Passed back from fail..mutex=" + mutex);
					j+=1;
		
				console.log("hmm i am firing heaps i think");
			}
		   // Hide all sets of 'img6' divs except the first one
		   $('.img6.test:not(:first)').css('display', 'none');
		   $('#smart-paginator').smartpaginator({ totalrecords: Math.round(loadedImages.length / 6)-1, recordsperpage: 1, length: 5, controlsalways:true, datacontainer: 'output', dataelement: '.img6', initval: 0, next: '>', prev: '<', first: '<<', last:'>>', theme: 'green', display: 'single'    });
   
		} else {
			setTimeout(buildImageTag, 250);
		}
	}

// ==================================================================================================================
//   Executing Code begins here
// ==================================================================================================================

    $("form#searchTrove").submit(function(event) {
	loadedImages.length = 0;  //Clear the array
	found = 0;

	event.preventDefault();
	//get input values
	var searchTerm = $("#searchTerm").val().trim();

	searchTerm = searchTerm.replace(/ /g, "%20");

	searchTerm = searchTerm + "%20portrait";    //200816 FFT addition to return human images

	var apiKey = "bjta6lbqejkmpk9k";
	
	//create search query

	var url = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&l-availability=y%2Ff&encoding=json&zone=picture" + "&sortby=relevance&n=100&q=" + searchTerm + "&callback=?";

	//get the JSON information we need to display the images

	$.getJSON(url, function(data) {

            $('#output').empty();

            //console.log(data);

            $.each(data.response.zone[0].records.work, processImages);       // Creates the array of arrays, 'loadedImages'
console.log("about to go to wins loop");
			while (wins < 8) {
				image = new Image();
				console.log("about to test wins>loses " + wins);
				while (wins > loses) {
					console.log("about to test onload " + wins);
					image.src = loadedImages[wins][1];
					loses+=1;
					image.onload = function () {
						console.log("wins = " + wins);
						wins++;
					};
				}
			}
	  		buildImageTag(); 												// Construct the html pagination, check if images load

        });

    });

// ==================================================================================================================
//   Executing Code ends here
// ==================================================================================================================


    /*

     *   Depending where the image comes from, there is a special way to get that image from the website.

     *   This function works out where the image is from, and gets the image URL

     */

    function processImages(index, troveItem) {

        var imgUrl = troveItem.identifier[0].value;
		var imgYear;
		var troveId;  //Will store a unique ID to use as an ID in <a> tag for dragging
	
		//Determine if there is a date tag in JSON 
		if (troveItem.hasOwnProperty('issued')) {
        	imgYear = String(troveItem.issued);
			//console.log("About to work with " + imgYear + " on " + imgUrl);
			//console.log("converting imgYear into " + imgYear.substring(0,4));
			if (Number(imgYear) > 1500 && Number(imgYear) < 2100)  {
			// console.log(imgYear + " is the year of the image");
			} else if ((Number(imgYear.substring(0,4)) > 1500 && Number(imgYear.substring(0,4) < 2100))){
			// console.log("converting imgYear into " + imgYear.substring(0,4));
			 imgYear = imgYear.substring(0,4);  // Set it to 9999, then we include 9999 with every generation
			} else {
			//console.log(imgYear + " is not a valid year");	
			 imgYear = "No Date";  // Set it to 9999, then we include 9999 with every generation
			}
		} else {
			//console.log("No year stored for " + imgUrl);
			imgYear = "No Date";
		}
        var imageData = [];
		var path;		  
		
		//console.log("Working with " + imgUrl);

			  if (imgUrl.indexOf(urlPatterns[0]) >= 0) { // flickr
	  		      found++;
	  			  addFlickrItem(imgUrl, troveItem, imgYear);
	  	  
			  } else if (imgUrl.indexOf(urlPatterns[1]) >= 0) { // nla.gov
	  
		   	      found++;
	              imageData[0] = imgYear;
				  imageData[1] =  imgUrl + "/representativeImage?wid=900"; // change ?wid=900 to scale the image
				  imageData[2] =  troveItem.title;
				  imageData[3] =  troveItem.id;
		 	      loadedImages.push(imageData);
	  
			  } else if (imgUrl.indexOf(urlPatterns[2]) >= 0) { //artsearch
	  
		   	       found++;
	               imageData[0] = imgYear;
		  		   imageData[1] =    "http://artsearch.nga.gov.au/IMAGES/LRG/" + getQueryVariable("IRN", imgUrl) + ".jpg";
				  imageData[2] =  troveItem.title;
				  imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
	    
			  } else if (imgUrl.indexOf(urlPatterns[3]) >= 0) { //recordsearch
	  
			  	   found++;
	               imageData[0] = imgYear;
		  		   imageData[1] =   "http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&S=1&B=" + getQueryVariable("Number", imgUrl);
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
	  
			  } else if (imgUrl.indexOf(urlPatterns[4]) >= 0) { //slsa
	  
				   found++;
	  			   imageData[0] = imgYear;
		  		   imageData[1] =    imgUrl.slice(0, imgUrl.length - 3) + "jpg";
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
			  } else if ((imgUrl.indexOf(urlPatterns[5]) >= 0) || (imgUrl.indexOf(urlPatterns[9]) >= 0) || (imgUrl.indexOf(urlPatterns[10]) >= 0) || (imgUrl.indexOf(urlPatterns[11]) >= 0) ) { // collections.museumvictoria.com.au AND hdl.handle.net  AND contentdm.lib.byu.edu AND http://acms.sl.nsw.gov.au/_DAMt/image/16/153/d7_29086t.jpg  021016 GF
	  
				  found++;
				   imageData[0] = imgYear;
		  		   imageData[1] = troveItem.identifier[1].value;
				   imageData[2] = troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
	  
			  } else if ((imgUrl.indexOf(urlPatterns[6]) >= 0)) { // archival-classic.sl.nsw.gov.au  
	  
				   found++;
			   	   imageData[0] = imgYear;
		  		   imageData[1] =   troveItem.identifier[0].value;
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
	  
			  }  else if (imgUrl.indexOf(urlPatterns[7]) >= 0) { // handle.slv.vic.gov.au
	  
				  found++;
				 	//Hackish way to determine if there is an item in identifier[1]
	  				if (troveItem.identifier.length > 1) {
			//			console.log("Using identifier[1]");
						path = troveItem.identifier[1].value;
					} else {
			//			console.log("Using identifier[0]");
						// This weill need changing, but no idea where to get the 3c2000 stuff from...
						path = "http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/" + imgUrl.substring(String(troveItem.identifier[0].value).length-7,String(troveItem.identifier[0].value).length);
				//		console.log("Going to path " + path);
					}
				   imageData[0] = imgYear;
		  		   imageData[1] =   path;
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
		//	console.log("Loaded images = " + imageData[0] + " and url=" + imageData[1]);
	  
			  }  else if (imgUrl.indexOf(urlPatterns[8]) >= 0) { // hdl.loc.gov
	  
				  found++;
	//			  console.log(troveItem  );
				//  console.log("FOUND AN HDL LOC GOV: ");
		//		  console.log(troveItem.identifier[1].value);
					if (troveItem.identifier.length > 1) {
						path = troveItem.identifier[1].value;
					} else {
				  path = "http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/" + imgUrl.substring(String(troveItem.identifier[0].value).length-7,String(troveItem.identifier[0].value).length) + "r.jpg";
					}
		//				console.log("Going to path " + path);
				   imageData[0] = imgYear;
		  		   imageData[1] =   path;
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
		//	console.log("Loaded images = " + imageData[0] + " and url=" + imageData[1]);
	  
			  }  else if ((imgUrl.indexOf(urlPatterns[12]) >= 0)) { // agallica2.bnf.fr  GF 021016
	  
				   found++;
			   	   imageData[0] = imgYear;
		  		   imageData[1] =   troveItem.identifier[0].value + "/f1.highres";
				   imageData[2] =  troveItem.title;
				   imageData[3] =  troveItem.id;
				   loadedImages.push(imageData);
	  
			  } 
	  
			  else { // Could not reliably load image for item
	  
				  // UNCOMMENT FOR DEBUG:
	  
		//	 console.log(found + "Not available: " + imgUrl);
	  
			  }
	//	}

    // TODO turn SORT back on - temp off for testing   
	 loadedImages.sort(sortFunction);
    }


function sortFunction(a, b) {
    if (a[0] === b[0]) {
        return 0;
    }
    else {
        return (a[0] < b[0]) ? -1 : 1;
    }
}

    function addFlickrItem(imgUrl, troveItem, imgYear) {
     
	    var imageData = [];

        var flickr_key = "a4d0bf2f4bde0595521b7bd8317ec428";

        var flickr_secret = "efc7221b694ff55e";

        var flickr_url = "https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=" + flickr_key + "&photo_id=";

        var url_comps = imgUrl.split("/");

        var photo_id = url_comps[url_comps.length - 1];

        $.getJSON(flickr_url + photo_id + "&format=json&nojsoncallback=1", function(data) {

        if (data.stat === "ok") {

                var flickr_image_url = data.sizes.size[data.sizes.size.length - 1].source;

				imageData[0] = imgYear;
				imageData[1] = flickr_image_url;
				imageData[2] =  troveItem.title;
				imageData[3] =  troveItem.id;
				loadedImages.push(imageData);
			
            }

        });



    }






    // from http://css-tricks.com/snippets/javascript/get-url-variables/

    function getQueryVariable(variable, url) {

        var query = url.split("?");

        var vars = query[1].split("&");

        for (var i = 0; i < vars.length; i++) {

            var pair = vars[i].split("=");

            if (pair[0] == variable) {

                return pair[1];

            }

        }

        return (false);

    }

    }(jQuery));

