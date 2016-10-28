// JavaScript Document
// 27.08.2016  Moved here by GuyFerguson, to separate js from main presentation page index.php
// Added a reference on index.php:
//
//         <script src="js/trove.js">
// ==================================================================================================================
//      GLOBALS
// ==================================================================================================================
var loadedImages = [];
var newHtml = $('');
var wrapper;
var image;
var imageFinal;
var spn;
var i, currImg = 0;
var counter = 0;
var successCounter = 0;
var total = 0;
var prevYear = 1;
var prevId = 1;
var nextRecord;
var apiKey;
var yrCount;
var searchName;
var minYear;
var maxYear;
var urlPatterns = ["flickr.com", "nla.gov.au", "artsearch.nga.gov.au", "recordsearch.naa.gov.au", "images.slsa.sa.gov.au", "collections.museumvictoria.com.au", "archival-classic.sl.nsw.gov.au", "handle.slv.vic.gov.au", "hdl.loc.gov", "hdl.handle.net", "contentdm.lib.byu.edu", "cms.sl.nsw.gov.au", "gallica2.bnf.fr"];
var found = 0;



(function($) {

    function loadImage(index) {
        $("<img src='" + image.src + "' />").load(function() {
            total += 1;
            $("p.lead").css("font-size", "18px");
            $("p.lead").text("Drag any image across to your tree-->").css("font-size", "14px").text("Found " + total + " other " + searchName + "'s from " + minYear + " to " + maxYear);

            succeed(index);
        }).error(function() {
            fail(index);
        });
    }

    function buildImageHtml() {
        if (found === loadedImages.length) {
            i = 0;
            for (i = 0; i < loadedImages.length; i++) {
                image = new Image();
                image.src = loadedImages[i][1];
                image.alt = loadedImages[i][2];
                image.title = loadedImages[i][0];
                loadImage(i);
            }
        } else {
            setTimeout(buildImageHtml, 250);
        }
    }



    $("form#searchTrove").submit(function(event) {
        loadedImages.length = 0; //Clear the array
        found = 0;
        yrCount = 0;
        successCounter = 0;
        counter = 0;
        event.preventDefault();
        //get input values
        var searchTerm = $("#searchTerm").val().trim();

        searchTerm = searchTerm.replace(/ /g, "%20");
        searchName = searchTerm;
        searchTerm = searchTerm + "%20portrait"; //200816 FFT addition to return human images

        apiKey = "bjta6lbqejkmpk9k";

        //create search query

        var url = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&l-availability=y%2Ff&encoding=json&zone=picture" + "&sortby=relevance&n=300&q=" + searchTerm + "&callback=?";

        //get the JSON information we need to display the images

        $.getJSON(url, function(data) {

            $('#output').empty();
            if (data.response.zone[0].records.next != null) {
                nextRecord = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&" + data.response.zone[0].records.next + "&callback=?";
            } else {
                nextRecord = "0";
            }
            console.log("more records at " + nextRecord);
            console.log(data);

            $.each(data.response.zone[0].records.work, processImages);

            buildImageHtml(); // Waits for the flickr images to load

        });

    });


    /*

     *   Depending where the image comes from, there is a special way to get that image from the website.

     *   This function works out where the image is from, and gets the image URL

     */

    function processImages(index, troveItem) {
        //Very rarely a troveItem does not have an 'identifier' element, so we cannot source it - so skip it
        if (typeof troveItem.identifier !== "undefined" && troveItem.identifier != null) {
            var imgUrl = troveItem.identifier[0].value;
            var imgYear;
            var troveId; //Will store a unique ID to use as an ID in <a> tag for dragging

            console.log("just before hasOwn check " + troveItem.issued);
            //Determine if there is a date tag in JSON 
            if (troveItem.hasOwnProperty('issued')) {
                console.log("Issued = " + troveItem.issued);
                imgYear = String(troveItem.issued);
                if ((Number(imgYear.substring(0, 4)) > 1500 && Number(imgYear.substring(0, 4) < 2100))) {
                    imgYear = imgYear.substring(0, 4); // Set it to 9999, then we include 9999 with every generation
                    if (yrCount == 0 && typeof imgYear != "undefined") {
                        minYear = maxYear = imgYear;
                        console.log("START");
                        console.log(imgYear);
                    }
                    if (Number(imgYear) < Number(minYear) && typeof imgYear != "undefined") {
                        minYear = imgYear;
                        console.log("YEAR MIN");
                        console.log(imgYear);
                    } else if (Number(imgYear) > Number(maxYear) && typeof imgYear != "undefined") {
                        maxYear = imgYear;
                        console.log("YEAR MAX");

                        console.log(imgYear);


                    }
                } else {
                    imgYear = "No Date";
                }
            } else {
                imgYear = "No Date";
            }
            var imageData = [];
            var path;
            yrCount += 1;
            if (imgUrl.indexOf(urlPatterns[0]) >= 0) { // flickr
                found++;
                addFlickrItem(imgUrl, troveItem, imgYear);

            } else if (imgUrl.indexOf(urlPatterns[1]) >= 0) { // nla.gov

                found++;
                imageData[0] = imgYear;
                imageData[1] = imgUrl + "/representativeImage?wid=900"; // change ?wid=900 to scale the image
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);

            } else if (imgUrl.indexOf(urlPatterns[2]) >= 0) { //artsearch

                found++;
                imageData[0] = imgYear;
                imageData[1] = "http://artsearch.nga.gov.au/IMAGES/LRG/" + getQueryVariable("IRN", imgUrl) + ".jpg";
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);

            } else if (imgUrl.indexOf(urlPatterns[3]) >= 0) { //recordsearch

                found++;
                imageData[0] = imgYear;
                imageData[1] = "http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&S=1&B=" + getQueryVariable("Number", imgUrl);
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);

            } else if (imgUrl.indexOf(urlPatterns[4]) >= 0) { //slsa

                found++;
                imageData[0] = imgYear;
                imageData[1] = imgUrl.slice(0, imgUrl.length - 3) + "jpg";
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);
            } else if ((imgUrl.indexOf(urlPatterns[5]) >= 0) || (imgUrl.indexOf(urlPatterns[9]) >= 0) || (imgUrl.indexOf(urlPatterns[10]) >= 0) || (imgUrl.indexOf(urlPatterns[11]) >= 0)) { // collections.museumvictoria.com.au AND hdl.handle.net  AND contentdm.lib.byu.edu AND http://acms.sl.nsw.gov.au 021016 GF

                found++;
                imageData[0] = imgYear;
                if (troveItem.identifier.length > 1) {
                    imageData[1] = troveItem.identifier[1].value;
                } else { // Needed this for surnames PETERS and FITZPATRICK - no 2nd identifier on hdl.handle.net urls
                    imageData[1] = troveItem.identifier[0].value;
                }
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);

            } else if ((imgUrl.indexOf(urlPatterns[6]) >= 0)) { // archival-classic.sl.nsw.gov.au  

                found++;
                imageData[0] = imgYear;
                imageData[1] = troveItem.identifier[0].value;
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);

            } else if (imgUrl.indexOf(urlPatterns[7]) >= 0) { // handle.slv.vic.gov.au
                found++;
                //Hackish way to determine if there is an item in identifier[1]
                if (troveItem.identifier.length > 1) {
                    path = troveItem.identifier[1].value;
                } else {
                    path = "http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/" + imgUrl.substring(String(troveItem.identifier[0].value).length - 7, String(troveItem.identifier[0].value).length);
                }
                imageData[0] = imgYear;
                imageData[1] = path;
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);
            } else if (imgUrl.indexOf(urlPatterns[8]) >= 0) { // hdl.loc.gov

                found++;
                if (troveItem.identifier.length > 1) {
                    path = troveItem.identifier[1].value;
                } else {
                    path = "http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/" + imgUrl.substring(String(troveItem.identifier[0].value).length - 7, String(troveItem.identifier[0].value).length) + "r.jpg";
                }
                imageData[0] = imgYear;
                imageData[1] = path;
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);
            } else if ((imgUrl.indexOf(urlPatterns[12]) >= 0)) { // agallica2.bnf.fr  GF 021016

                found++;
                imageData[0] = imgYear;
                imageData[1] = troveItem.identifier[0].value + "/f1.highres";
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
                loadedImages.push(imageData);
            } else { // Could not reliably load image for item

                // UNCOMMENT FOR DEBUG:

                //	 console.log(found + "Not available: " + imgUrl);

            }

            // TODO turn SORT back on - temp off for testing   
            loadedImages.sort(sortFunction);
            $("p.lead").css("font-size", "18px");
            $("p.lead").text("Drag any image across to your tree-->").css("font-size", "14px").text("Found " + total + " other " + searchName + "'s from " + minYear + " to " + maxYear);
        }
    }


    function sortFunction(a, b) {
        if (a[0] === b[0]) {
            return 0;
        } else {
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
                imageData[2] = troveItem.title;
                imageData[3] = troveItem.id;
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

    function final() {
        console.log("Call more images");

        var url = "";
        url = nextRecord;
        //Reset counters to get next 100 images!
        counter = 0;
        successCounter = 0;

        //get the JSON information we need to display the images

        $.getJSON(url, function(data) {

            //$('#output').empty();
            if (data.response.zone[0].records.next != null) {
                nextRecord = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&" + data.response.zone[0].records.next + "&callback=?";
            } else {
                nextRecord = "0";
            }
            console.log("Even more records at " + nextRecord);
            console.log(data);

            $.each(data.response.zone[0].records.work, processImages);

            buildImageHtml(); // Waits for the flickr images to load

        });
    }




    function succeed(currImg) {
        imageFinal = new Image();
        imageFinal.src = loadedImages[currImg][1];
        imageFinal.style.verticalAlign = "top";
        imageFinal.style.padding = "0";
        imageFinal.style.margin = "0";
        imageFinal.className = "ui-widget-content";
        imageFinal.alt = loadedImages[currImg][2];
        imageFinal.title = loadedImages[currImg][0];
        spn = $("<span>", {
            "class": "text"
        });
        $(spn).text(loadedImages[currImg][0]);
        wrapper = $("<a>", {
            "class": "wrapper lazy tooltip",
            "id": loadedImages[currImg][3]
        }).append(spn);
        $(wrapper).attr("draggable", "true");
        $(wrapper).attr("ondragstart", "drag(event)");
        $(wrapper).attr("data-original", imageFinal.src);
        $(wrapper).attr("alt", imageFinal.alt);

        //Sort the images by year
        if (loadedImages[currImg][0] < prevYear) {
            console.log(loadedImages[currImg][0] + "comes before " + prevYear + ", so prepend");
            console.log("#" + prevId);
            $("#output").prepend(wrapper.append(imageFinal));
        } else {
            console.log(loadedImages[currImg][0] + "comes after " + prevYear + ", so append");
            console.log("#" + prevId);
            $("#output").append(wrapper.append(imageFinal));
        }
        counter += 1;
        successCounter += 1;
        prevYear = loadedImages[currImg][0];
        prevId = loadedImages[currImg][3];
        if (counter > loadedImages.length - 1) { //Not sure why I had to add the '- 1'..gf 071016
            console.log("Call final to turn on pagination, hide images etc");
            final();
        }
    }


    function fail(arrayImg) {
        counter += 1;
        if (counter > loadedImages.length - 1) { //Not sure why I had to add the '- 1'..gf 071016
            console.log("Call final to turn on pagination, hide images etc");
            final();
        }
    }


}(jQuery));

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function(element, renderer) {
        return true;
    }
};

$('#cmd').click(function() {
    alert("PDF Print happening");
    doc.fromHTML($('#right_container').html(), 15, 15, {
        'width': 150,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function(element, renderer) {
        return true;
    }
};

$('#cmd').click(function() {
    alert("PDF Print happening");
    doc.fromHTML($('#right_container').html(), 15, 15, {
        'width': 150,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

//image gallery load
$(function() {
    $("img.lazy").lazyload();
});