<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $edad  = $_POST['edad'];
 





if($nombre == false){

    echo "<script> alert('Debes ingresar tu nombre y edad');
    location.href = 'index.php';
    </script>";

}else{
    $insertar = "INSERT INTO t_personas VALUES ('$nombre','$edad') ";
    $query = mysqli_query($conectar, $insertar);
    echo "<script> 
    location.href = 'index.php';
   </script>";
}






?>