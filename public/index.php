<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require '../vendor/autoload.php';
	use \HelloWorld\SayHello;
	use \App\Wcs\Hello;

  $blabla = new SayHello;
  echo $blabla::world();

  $news = new Hello;
  echo $news-> talk();
	?>


</body>
</html>