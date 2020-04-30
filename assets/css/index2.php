<?php
//conexion a la base de datos
$conexion = mysqli_connect("localhost","root","","phpmysql", "3308");

//comprobar conexion 
if(mysqli_connect_errno()){
    echo " la conexion a la base de datos ha fallado".mysqli_connect_error();
}else{
    echo "conexion realizada correctamente";
}


//consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// consulta select desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    echo "<h2>".$nota['titulo']."</h2>";
    echo($nota['descripcion'])."<br/>";

}


//insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null, 'nota desde php','esto es una nota desde php','blue')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "datos insertados correctamente";
}else{
    echo "ERROR: ".mysqli_error($conexion);
}





?>