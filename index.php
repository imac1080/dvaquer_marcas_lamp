
<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title>xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 <body>
 <section id="titol">
 <h1>xateja-ho!</h1>
 </section>
 <section id="missatges">
<?php

include 'connexioBD.php';

$sql="SELECT * FROM missatges";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo "<p>";
	printf("%s - %s: %s\n", $row['hora'], $row['usuari'], $row['text']);
echo "</p>";
	
}
mysqli_free_result($result);
mysqli_close($con);
?>
 
 </section>
 <section id="formulari">
 <form method="post" action="insertar.php">
 <!-- COMPLETA EL CONTINGUT DEL FORMULARI -->
 </form>
 </section>
 </body>
</html>
<form action="insertar.php" method="post">
 <p>Su usuario: <input type="text" name="usuari" /></p>
 <p>Su texto: <input type="text" name="text" /></p>
 <p><input name="send" type="submit" /></p>
</form>
<section id="errors">
 <?php
 if ($_GET["error"]){
echo "<p>" . htmlspecialchars($_GET["error"] . '!') . "</p>" ;}
?>
 </section>
