<?php
$conexion = mysqli_connect("154.49.247.103:3306", "u560058480_admin", "ch-R2#ER+8euE7P", "u560058480_programacion");

if($conexion){
    echo "conectado";
} else {
    echo "no conectado";
}


?>