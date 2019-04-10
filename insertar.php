<?php 
if (isset($_POST['send']) and $_POST['usuari'] !='' and $_POST['text'] !=''){
include 'connexioBD.php';

$user = mysqli_real_escape_string($con,$_POST['usuari']);
$text = mysqli_real_escape_string($con,$_POST['text']);

$sql = "INSERT INTO missatges VALUES (null,'$user', '$text',time(now()))";

if (mysqli_query($con, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}else{
header("Location: index.php?error=error falta posar les deades de usuari i text");
exit();
}
?>
