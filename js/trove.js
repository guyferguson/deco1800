// JavaScript Document
// 27.08.2016  Moved here by GuyFerguson, to separate js from main presentation page index.php
// Added a reference on index.php:
//
//         <script src="js/trove.js">

    var loadedImages = [];
    var imageYears = [];


    var urlPatterns = ["flickr.com", "nla.gov.au", "artsearch.nga.gov.au", "recordsearch.naa.gov.au", "images.slsa.sa.gov.au", "collections.museumvictoria.com.au"];

    var found = 0;

(function($){

	function waitForFlickr() {

		if(found == loadedImages.length) {

			printImages();

		} else {

			setTimeout(waitForFlickr, 250);

		}

	}

    $("form#searchTrove").submit(function(event) {

        event.preventDefault();
        loadedImages = [];
		imageYears = [];

		found = 0;

        //get input values
        var searchTerm = $("#searchTerm").val().trim();

        searchTerm = searchTerm.replace(/ /g, "%20");

        searchTerm = searchTerm + "%20portrait";    //200816 FFT addition to return human images

        var sortBy = $("#sortBy").val();

        var apiKey = "bjta6lbqejkmpk9k";



        //create searh query

        var url = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&l-availability=y%2Ff&encoding=json&zone=picture" + "&sortby=relevance&n=100&q=" + searchTerm + "&callback=?";



        //get the JSON information we need to display the images

        $.getJSON(url, function(data) {

            $('#output').empty();

            console.log(data);

            $.each(data.response.zone[0].records.work, processImages);

            //printImages();



	   waitForFlickr(); // Waits for the flickr images to load

        });

    });



    /*

     *   Depending where the image comes from, there is a special way to get that image from the website.

     *   This function works out where the image is from, and gets the image URL

     */

    function processImages(index, troveItem) {

        var imgUrl = troveItem.identifier[0].value;
        var imgYear = troveItem.issued;
		
		//Determine if the year is a valid year 
		
		if (imgYear > 1500 && imgYear < 2100)  {
        // console.log(imgYear + " is the year of the image");
		} else {
		// console.log(imgYear + " is not a valid year");
		 imgYear = "No Date";  // Set it to 9999, then we include 9999 with every generation
		}
		
	    var searchYear = $("#searchYear").val().trim();
		
		if (imgYear == "No Date" || ((Number(imgYear) > Number(searchYear) - 11) && (Number(imgYear) < Number(searchYear) + 11))) {
			console.log("This pic is  " + imgYear + " which is near " + searchYear); 
			  if (imgUrl.indexOf(urlPatterns[0]) >= 0) { // flickr
	  
			  found++;
	  
				  addFlickrItem(imgUrl, troveItem, imgYear);
	  
	  
	  
			  } else if (imgUrl.indexOf(urlPatterns[1]) >= 0) { // nla.gov
	  
			  found++;
	  
				  loadedImages.push(
	  
					  imgUrl + "/representativeImage?wid=900" // change ?wid=900 to scale the image
	  
				  );
				  imageYears.push(imgYear);
	  
	  
			  } else if (imgUrl.indexOf(urlPatterns[2]) >= 0) { //artsearch
	  
			  found++;
	  
				  loadedImages.push(
	  
					  "http://artsearch.nga.gov.au/IMAGES/LRG/" + getQueryVariable("IRN", imgUrl) + ".jpg"
	  
				  );
				  imageYears.push(imgYear);
	  
	  
	  
			  } else if (imgUrl.indexOf(urlPatterns[3]) >= 0) { //recordsearch
	  
			  found++;
	  
				  loadedImages.push(
	  
					  "http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&S=1&B=" + getQueryVariable("Number", imgUrl)
	  
				  );
				  imageYears.push(imgYear);
	  
	  
	  
			  } else if (imgUrl.indexOf(urlPatterns[4]) >= 0) { //slsa
	  
				  found++;
	  
				  loadedImages.push(
	  
					  imgUrl.slice(0, imgUrl.length - 3) + "jpg"
	  
			  );
				  imageYears.push(imgYear);
	  
	  
	  
			  } else if (imgUrl.indexOf(urlPatterns[5]) >= 0) { // collections.museumvictoria.com.au
	  
				  found++;
				  //console.log(troveItem  );
				  //console.log("We should perhaps go to: ");
				  //console.log(troveItem.identifier[1].value);
	  
				  loadedImages.push(
	  
					 troveItem.identifier[1].value
	  
			  );
				  imageYears.push(imgYear);
	  
	  
	  
			  }
	  
			  else { // Could not reliably load image for item
	  
				  // UNCOMMENT FOR DEBUG:
	  
			  // console.log("Not available: " + imgUrl);
	  
			  }
		}


    }



    function addFlickrItem(imgUrl, troveItem, imgYear) {

        var flickr_key = "a4d0bf2f4bde0595521b7bd8317ec428";

        var flickr_secret = "efc7221b694ff55e";

        var flickr_url = "https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=" + flickr_key + "&photo_id=";

        var url_comps = imgUrl.split("/");

        var photo_id = url_comps[url_comps.length - 1];



        $.getJSON(flickr_url + photo_id + "&format=json&nojsoncallback=1", function(data) {

            if (data.stat == "ok") {

                var flickr_image_url = data.sizes.size[data.sizes.size.length - 1].source;

                loadedImages.push(

                    flickr_image_url

                );
			imageYears.push(imgYear);

            }

        });



    }



    function printImages() {



        $("#output").append("<h3>Image Search Results</h3>");



	// Print out all images

        for (var i in loadedImages) {

            var image = new Image();

            image.src = loadedImages[i];

            image.style.display = "inline-block";

            image.style.width = "18%";

            image.style.margin = "1%";

            image.style.verticalAlign = "top";



            $("#output").append(image);
			    $("#output").append(imageYears[i]);

        }



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
