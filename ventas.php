<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="estilophp.css">
<body>
	<div class="message">
<?php
     $nombre   = $_POST[ 'nombre'  ] ;
     $direccion= $_POST['direccion'] ;
	 $prenda   = $_POST[ 'prenda'  ] ;
	 
	     if(isset($_POST['procesar'])){ 	
			 if(empty($nombre)){
				 
			 }
			 if(empty($direccion)){
				 echo "<p class='error'> *INGRESA TU DIRECCION  </p>";
			 }
			 if(empty($prenda)){
				 echo "<p class='error'> *INGRESA LA PRENDA </p>";
			 } else{
			 	echo "Prenda: $prenda <br>vendida a: $nombre  ";
			 }
		 }
?>
</div>
<div class="btn"> <form action="index.html" method="post">
	<input type="submit" value="Regresar" id="btn">
</form></div>

</body>
</html>