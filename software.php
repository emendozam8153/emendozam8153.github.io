<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("db.php");

if (isset($_POST["enviar"])) {
  $txtCc = $_POST["txtCc"];
  $txtNombres = $_POST["txtNombres"];
  $txtApellidos = $_POST["txtApellidos"];
  $txtCorreo = $_POST["txtCorreo"];
  $txtCel = $_POST["txtCel"];
  $txtDescripservicio = $_POST["txtDescripservicio"];

    $sqlgrabar = "INSERT INTO instsoftware(Cc, Nombres, Apellidos, Correo, Cel, Descripservicio) values ('$txtCc','$txtNombres',
    '$txtApellidos','$txtCorreo','$txtCel','$txtDescripservicio')";

    if (mysqli_query($conn, $sqlgrabar)) {
      echo "<script> alert('Su solicitud fue enviada correctamente: $txtNombres pronto nos pondremos en contacto con usted, gracias '); </script>";
    } else {
      echo "error";
    }
  
}
