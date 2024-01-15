<?php
$nombre=$_POST['txtNombre'];
echo "hola" .$nombre;
$apellido=$_POST['txtApellido'];
print("Mi apellido es: ") .$apellido;
$edad=$_POST['txtEdad'];
print("Mi edad es:") .$edad;

$sexo=$_POST['txtSexo'];
print("Mi sexo es:") .$sexo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="practica04.php" method="post"> 
 Nombre: 
 <input type="text" name="txtNombre" id="" >
 <br>
 Apellido:
 <br>
 <input type="text" name="txtApellido" id="" >
 <br>
 Edad:
 <br>
 <input type="number" name="txtEdad" id="" >
 <br>
 Sexo
 <br>
 <input type="text" name="txtSexo" id="" >
 <input type="submit" value="enviar">
 

</body>
</html>