<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>

.ui-widget-content {
	width: 180px;
	height: 180px;
	padding: 0.5em;
	margin: 10px 10px 10px 0;
}
</style>
</head>

<body>



<script>
var images =['http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=102166',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=47646&custom_att_2=simple_viewer',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=393808',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3361532',
'http://contentdm.lib.byu.edu/cgi-bin/thumbnail.exe?CISOROOT=/Savage&CISOPTR=815',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3494899',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=174545&custom_att_2=simple_viewer',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=305593&custom_att_2=simple_viewer',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3058791',
'http://contentdm.lib.byu.edu/cgi-bin/thumbnail.exe?CISOROOT=/GEA&CISOPTR=11098',
'http://nla.gov.au/nla.obj-145708093/representativeImage?wid=900',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=457553',
'http://collections.museumvictoria.com.au/content/media/19/719719-thumbnail.jpg',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=369926',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=201037&custom_att_2=simple_viewer',
'http://nla.gov.au/nla.obj-136668354/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-136668461/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-136668243/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-136668139/representativeImage?wid=900',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=296917',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=3128275',
'http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/3c12195r.jpg',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=1273466',
'http://nla.gov.au/nla.obj-136260767/representativeImage?wid=900',
'http://collections.museumvictoria.com.au/content/media/48/482698-thumbnail.jpg',
'http://cdn.loc.gov/service/pnp/cph/3c20000/3c24000/3c24100/3c07083r.jpg',
'http://nla.gov.au/nla.obj-151263763/representativeImage?wid=900',
'http://collections.museumvictoria.com.au/content/media/36/431886-thumbnail.jpg',
'http://nla.gov.au/nla.obj-145873726/representativeImage?wid=900',
'http://collections.museumvictoria.com.au/content/media/30/381680-thumbnail.jpg',
'http://digital.slv.vic.gov.au/webclient/DeliveryManager?pid=2848945',
'http://collections.museumvictoria.com.au/content/media/19/432069-thumbnail.jpg',
'http://collections.museumvictoria.com.au/content/media/35/431885-thumbnail.jpg',
'http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&S=1&B=11354941',
'http://nla.gov.au/nla.obj-136335184/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-136519931/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-136446944/representativeImage?wid=900',
'http://nla.gov.au/nla.obj-146665056/representativeImage?wid=900',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44302t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43588t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44300t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43589t.jpg',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=118622&custom_att_2=simple_viewer',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44303t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43587t.jpg',
'http://nla.gov.au/nla.pic-an22676416/representativeImage?wid=900',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=192357&custom_att_2=simple_viewer',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44301t.jpg',
'http://nla.gov.au/nla.obj-145873566/representativeImage?wid=900',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=591329&custom_att_2=simple_viewer',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43593t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43594t.jpg',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=51098&custom_att_2=simple_viewer',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44304t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/135/d3_44299t.jpg',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43590t.jpg',
'http://bishop.slq.qld.gov.au:80/webclient/DeliveryManager?pid=97826&custom_att_2=simple_viewer',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43591t.jpg',
'http://nla.gov.au/nla.pic-an22676416/representativeImage?wid=900',
'http://acms.sl.nsw.gov.au/_DAMt/image/14/133/d3_43592t.jpg']

for (var ii=0;ii<images.length;ii++) {
	$("<img src='"+images[ii]+"' />").load(function(ii){
		 console.log("Success: " + this.src );
		 console.log("ii="+ii);
		 imageFinal = new Image(); 
		imageFinal.src = this.src;
		imageFinal.style.verticalAlign = "top";
		imageFinal.className = "ui-widget-content";
		$("body").append(imageFinal);
		 })
	.error(function(ii){
		 console.log("Failure: " + this.src);
		 
		 });
}
</script>
</body>
</html>