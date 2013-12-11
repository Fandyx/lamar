<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
	<header>
<?php
include 'header.php';
?>
  </header>
  <div id="content">
  	<div id="homeimgcontainer">
  	<img id="homeimg" src="images/ext.jpg">
  	</div>
  	<div id="homecontent">
  		<h2>Nuestra Creación</h2>
  		<p>
		La mar es un edificio de 12 pisos con apartamentos desde 82,3 hasta 131,6 m2 de construcción, además de amplios penthouses.
  		</p>
  	</div>
  </div>
  <footer>
  	<?php
include 'footer.php';
?>
  </footer>
<script type="text/javascript">
$(document).ready(function(){
  $('a').on('click', function(e){
    e.preventDefault();
  });
    
  $('#ddmenu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('ul',this).stop(true,true).slideDown(200);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('ul',this).stop(true,true).slideUp(200);
    }, this), 100));
  });

});
</script>
</body>
</html>