<html>
<head>
	<?php include 'stylesheets.php' ?>
	<title>Robin Wilson - Undergraduate Dissertation</title>
</head>
<body>
	<div class="container">
	<h1 class="header">Robin Wilson</h1>
	<hr>
	<h2 class="alt">Undergraduate Dissertation</h2>
	<hr>
	<?php include 'navigation.php' ?>
	<div class="span-20 last">
		<p><img src="GetisSample.png" class="right" alt="Example Getis image">My dissertation was entitled <em>Automated Selection of Suitable Atmospheric Calibration Sites for Satellite Imagery</em>, was completed in 2010 and was supervised by <a href="http://www.southampton.ac.uk/geography/staff_profiles/academic/ejm.html">Prof. E. J. Milton</a>. It received a mark of 81% (the second highest mark in my year). I have written a conference paper based on my dissertation for presentation at <a href="http://www.rspsoc2010.org/">RSPSoc 2010</a> and am hoping to develop this into a longer paper for an academic journal.</p>
		
		<p>Please <a href="contact.php">contact me</a> if you find my dissertation useful or if you have any comments. If you wish to reference it then please follow the guidelines <a href="referencing.php">here</a>.</p>
		
		<h6>Abstract</h6>
		<p>A method was developed to automatically select suitable atmospheric calibration sites
for satellite imagery, using a combination of various processing techniques followed by
a fuzzy classification using eCognition. Desirable characteristics for calibration sites
were identified from the literature, and implemented in a set of procedures combining
ENVI/IDL processing routines and object-based classification using eCognition. Getis-Ord statistics were used to assess local patterns of spatial uniformity, and endmember
abundances (extracted using the SMACC algorithm) were used in a novel method to
ensure a spread of calibration sites throughout the brightness range for each band.
The method was tested on a selection of medium- and high-resolution satellite
imagery, and assessments of the quality of the selected calibration sites were provided
by comparison with the identified desirable criteria, independent assessment by an
expert and by performing an empirical line method calibration using the selected sites.
Results showed that the selected calibration sites were generally good calibration
sites. The calibration produced an average accuracy of 38%, which compares poorly
with results in the literature. However, this is unlikely to be a true reflection of the
quality of the calibration sites, as many other factors combined to produce poor
accuracies.</p>

		<h6>Download</h6>
		<p><a href="./downloads/RWilson_Dissertation_2010.pdf">Original dissertation</a> (PDF, 3.5Mb, 102 pages)
        <br>
        <a href="./downloads/WilsonMilton_2010_RSPSoc.pdf">RSPSoc 2010 Conference Paper</a> (PDF, 396kb, 8 pages)
        </p>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>