<html>
<head>
	<?php include 'stylesheets.php' ?>
	<title>Robin Wilson - Summer Bursary</title>
</head>
<body>
	<div class="container">
	<h1 class="header">Robin Wilson</h1>
	<hr>
	<h2 class="alt">Summer Bursary</h2>
	<hr>
	<?php include 'navigation.php' ?>
	<div class="span-20 last">
		<!-- configurable script -->
<script type="text/javascript">
theimage = new Array();


// The dimensions of ALL the images should be the same or some of them may look stretched or reduced in Netscape 4.
// Format: theimage[...]=[image URL, link URL, name/description]
theimage[0]=["http://rtwilson.com/academic/tramway_photos/tramway01.jpg", "", ""];
theimage[1]=["http://rtwilson.com/academic/tramway_photos/tramway02.jpg", "", ""];
theimage[2]=["http://rtwilson.com/academic/tramway_photos/tramway03.jpg", "", ""];
theimage[3]=["http://rtwilson.com/academic/tramway_photos/tramway04.jpg", "", ""];
theimage[4]=["http://rtwilson.com/academic/tramway_photos/tramway05.jpg", "", ""];
theimage[5]=["http://rtwilson.com/academic/tramway_photos/tramway06.jpg", "", ""];

///// Plugin variables

playspeed=3000;// The playspeed determines the delay for the "Play" button in ms
//#####
//key that holds where in the array currently are
i=0;


//###########################################
window.onload=function(){

	//preload images into browser
	preloadSlide();

	//set the first slide
	SetSlide(0);

	//autoplay
	PlaySlide();
}

//###########################################
function SetSlide(num) {
	//too big
	i=num%theimage.length;
	//too small
	if(i<0)i=theimage.length-1;

	//switch the image
	document.images.imgslide.src=theimage[i][0];

	//if they want name of current slide
	document.getElementById('slidebox').innerHTML=theimage[i][2];

}


//###########################################
function PlaySlide() {
	if (!window.playing) {
		PlayingSlide(i+1);
		if(document.slideshow.play){
			document.slideshow.play.value="   Stop   ";
		}
	}
	else {
		playing=clearTimeout(playing);
		if(document.slideshow.play){
			document.slideshow.play.value="   Play   ";
		}
	}
	// if you have to change the image for the "playing" slide
	if(document.images.imgPlay){
		setTimeout('document.images.imgPlay.src="'+imgStop+'"',1);
		imgStop=document.images.imgPlay.src
	}
}


//###########################################
function PlayingSlide(num) {
	playing=setTimeout('PlayingSlide(i+1);SetSlide(i+1);', playspeed);
}


//###########################################
function preloadSlide() {
	for(k=0;k<theimage.length;k++) {
		theimage[k][0]=new Image().src=theimage[k][0];
	}
}


</script>

		<p>During my summer bursary period (ten weeks) I worked on two projects.</p>
		
		<h6>SKRAMVis</h6>
		<p>I created a tool (using the IDL programming language) to visualise some data collected as part of the <a href="http://www.ncaveo.ac.uk">NCAVEO field experiment</a>. This data was collected by an instrument designed by <a href="http://www.sheffield.ac.uk/geography/staff/mcgonigle_andrew/">Andrew McGonigle</a> which took spectral measurements of the sky. The instrument scanned across the sky in both azimuth and zenith, and recorded the spectra of the light at each point. The instrument was designed to provide useful data about the sky radiance distribution, which could then be used as part of an atmospheric correction process. A second version of the software was also created which allowed comparison of the measured sky radiance distribution with that suggested by a model. A screenshot of the software is provided below.</p>
		
		<img src="SKRAMVISPlus.png">
		
		<p>During the bursary period I also wrote a literature review on the optical properties of clear skies. It is available for download as a <a href="./downloads/RWilson_OpticalPropertiesOfSkies.pdf">PDF</a> (0.3Mb, 5 pages)</p>
		
		<h6>Tramway</h6>
		<p>An automated tramway system was designed and installed at <a href="http://www.chilbolton.rl.ac.uk/">Chilbolton Facility for Atmospheric and Radio Research</a> to repeatedly measure the reflectance of ground targets at certain intervals. This was designed to allow us to examine how the reflectance of these surfaces varied over time, prior to them being used as pseudo-invariant targets in atmospheric correction procedures. The tramway was designed by the electronics technician at the University of Southampton, and I helped with the installation and commissioning, as well as writing software to process the output data. Some images of the tramway are shown below, including the tent for the tram that I built with the help of staff from Chilbolton.</p>
		<!-- slide show HTML -->
		<form name="slideshow">
		
		<table>
		<tr>
			<td align="center">
			<a href="#" onmouseover="this.href=theimage[i][1];return false">
			<script type="text/javascript">
				document.write('<img name="imgslide" id="imgslide" src="'+theimage[0][0]+'" border="0">')
			</script>
			</a>
			</td>
		</tr>
		<tr>
			<td align="center"><div id="slidebox"></div></td>
		</tr>
		</table>
		
		</form>
		<!-- end of slide show HTML -->
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</body>
</html>
