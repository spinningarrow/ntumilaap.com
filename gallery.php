<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photo Gallery « Milaap 2011</title>
	<link rel="stylesheet" href="css/milaap2011.css" />
	
	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>	
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".photogallery a").lightBox();
		});
	</script>	
</head>
<body>
	<p><a href="index.html">[home]</a></p>
	<h2>Milaap Photo Gallery</h2>
	<div id="content">
		<h3>Milaap 2010</h3>
		<ul class="photogallery">
			<?php	
			for ($i = 1; $i <= 15; $i++) {				
				echo "\n<li><a href=\"images/gallery/milaap2010/$i.jpg\" target=\"_blank\"><img src=\"images/gallery/milaap2010/thumbs/$i.jpg\" alt=\"Milaap Gallery » Milaap 2010 » Photo $i\"/></a></li>";
			}
			?>
		</ul>
		<!--
		<h3>Some Other Set of Images</h3>
		<ul class="photogallery">
			<?php	
			for ($i = 1; $i <= 15; $i++) {				
				echo "\n<li><a href=\"images/gallery/ANOTHER_DIR/$i.jpg\" target=\"_blank\"><img src=\"images/gallery/ANOTHER_DIR/thumbs/$i.jpg\" alt=\"Milaap Gallery » Some Event » Photo $i\"/></a></li>";
			}
			?>
		</ul>
		-->
	</div> <!-- end #content -->
</body>

</html>