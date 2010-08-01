<html>
<head>
	<?php include 'stylesheets.php' ?>
	<title>Robin Wilson - Dunes GIS</title>
</head>
<body>
	<div class="container">
	<h1 class="header">Robin Wilson</h1>
	<hr>
	<h2 class="alt">Dunes GIS</h2>
	<hr>
	<?php include 'navigation.php' ?>
	<div class="span-20 last">
        <p><img src="Dunes.png" class="top right" alt="Photo of me">
        <p>This is a set of tools for processing Digital Elevation Models (DEMs) of sand dunes.</p>
        
        <p>The main feature is a tool which runs an automated method of extracting sand dune crests from DEMs. It consists of two major parts: an ENVI/IDL process which extracts the crests and an ArcGIS/Python process which calculates dune pattern metrics on the extracted crest lines.</p>
        
        <p>The source code is available at <a href="http://github.com/robintw/DunesGIS">GitHub<a/>.</p>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>