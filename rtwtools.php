<html>
<head>
	<?php include 'stylesheets.php' ?>
	<title>Robin Wilson - RTWTools</title>
</head>
<body>
	<div class="container">
	<h1 class="header">Robin Wilson</h1>
	<hr>
	<h2 class="alt">RTWTools</h2>
	<hr>
	<?php include 'navigation.php' ?>
	<div class="span-20 last">
        <p><img src="GetisSample.png" class="top right" alt="Photo of me">
        This is a set of tools for <a href="http://www.ittvis.com/ProductServices/ENVI.aspx">ENVI</a> which add useful new functionality. The original set of tools were created as part of my <a href="dissertation">dissertation</a>, but a number of tools have been added since then.<p>
		<p class="nogap">
		The tools included in the current version of RTWTools are:
		<ul>
		<li>Calculate Spatial Statistics (Getis-Ord and Coefficient of Variation)</li>
		<li>Calculate 3D surface area from a DEM</li>
		<li>Shrink ROIs by one pixel</li>
        <li>Translate ROIs by x and y distances</li>	
		<li>Percentile thresholds of bands (similar to Band Threshold to ROI, but with percentages)</li>
		<li>Calculate ROI statistics</li>
		<li>Calculate differences between spectra (BETA)</li>
		<li>Create GLT files for use in ATCOR and AZGCORR</li>
		</ul>
		</p>
        <p>The code has been released under an open source license, and the install files and source code are available from the <a href="http://rtwtools.googlecode.com">RTWTools Google Code Repository</a>.</p>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>