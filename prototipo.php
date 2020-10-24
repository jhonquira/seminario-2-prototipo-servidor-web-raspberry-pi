<html>
<head>
	<title>inicio</title>
<link rel="stylesheet" type="text/css" href="estilos\estilos.css">
</head>
<body background="imagenes/fondo2.png"> 



<div  id="cajaformulario" align="center" >
<table border="5" bordercolor=orange  >
<tr><th>
<br>
  <form action="" method="post">
   GPIO 17&nbsp;<input type="submit" name="encender17" value="Encender">
   <input type="submit" name="apagar17" value="Apagar">
   <input type="submit" name="parpadear17" value="Parpadear">
   </th> </tr>
                <tr>
                <th>  <br>
  <form action="" method="post">
   GPIO 27&nbsp;<input type="submit" name="encender27" value="Encender">
   <input type="submit" name="apagar27" value="Apagar">
   <input type="submit" name="parpadear27" value="Parpadear">
   <br>
   <p>.
   </th>
   </tr>
   </table>

  </div>
  
 

 </body>
</html>

<?php

// Funciones PHP del pin GPIO 17

  if ($_POST[encender17]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio17/encender.py");
   echo $a;
  }

  if ($_POST[apagar17]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio17/apagar.py");
   echo $a;
  }

  if ($_POST[parpadear17]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio17/parpadear.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 17


// Funciones PHP del pin GPIO 27

  if ($_POST[encender27]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio27/encender.py");
   echo $a;
  }

  if ($_POST[apagar27]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio27/apagar.py");
   echo $a;
  }

  if ($_POST[parpadear27]) { 
   $a- exec("sudo python /var/www/html/prototipo/gpio27/parpadear.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 27


?>