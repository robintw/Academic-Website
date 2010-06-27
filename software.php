<html>
<head>
	<?php include 'stylesheets.php' ?>
	<title>Robin Wilson - Software</title>
</head>
<body>
	<div class="container">
	<h1 class="header">Robin Wilson</h1>
	<hr>
	<h2 class="alt">Software</h2>
	<hr>
	<?php include 'navigation.php' ?>
	<div class="span-20 last">
		<p>I have written a number of pieces of software related to remote sensing. Details are given below.</p>
		<h6>RTWTools</h6>
		<p>This is probably the most useful piece of academic software I have written. It is a set of tools for <a href="http://www.ittvis.com/ProductServices/ENVI.aspx">ENVI</a> which add useful new functionality. The code has been released under an open source license, and both the source code and a compiled .sav file are available from the <a href="http://rtwtools.googlecode.com">RTWTools Google Code Repository</a>.</p>
		<p class="nogap">
		The following are examples of some of the tools included in RTWTools:
		<ul>
		<li>Calculate Spatial Statistics (Getis-Ord and Coefficient of Variation)</li>
		<li>Calculate 3D surface area from a DEM</li>
		<li>Shrink ROIs by one pixel or translate them by x and y co-ordinates</li>	
		<li>Take percentile thresholds from images (similar to Band Threshold to ROI, but with percentages)</li>
		<li>Calculate ROI statistics</li>
		<li>Calculate differences between spectra (BETA)</li>
		<li>Create GLT file for use in ATCOR and AZGCORR</li>
		</ul>
		</p>
		
		<h6>RTWOBIA</h6>
		<p>This is still very much a work in progress, but it is designed to be a free, open-source <a href="http://www.definiens.com/">eCognition</a> replacement. Flexibility and customisability are the key features, and it should allow more complex class definitions than eCognition (for example, there will be far more flexibility in defining 'Customised Features') and will be flexible in the type of segmentation and classification which will be performed. All code is available at the <a href="http://code.google.com/p/rtwobia/">RTWOBIA Google Code Repository</a>. In case you're interested, the name is a combination of RTW (my initials) and the acronym for Object-Based Image Analysis</p>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>