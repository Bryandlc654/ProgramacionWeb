<?php
include "conec.php";
$consulta="SELECT * FROM Productos  AS p, Categorias AS c WHERE 
p.`IdCategoria`=c.`IdCategoria` AND
c.`IdCategoria`=3;";
echo "<table border=1>
        <tr>
        <td> IdProducto </td>
        <td> NomProducto </td>
        <td> Precio </td>
        <td> Presentacion </td>
        <td> FechaVence </td>
        <td> Marca </td>
        <td> IdCategoria </td>
        <td> NombreCategoria </td>
        </tr>
        ";
if($resultado=$conexion -> query($consulta))
{
    while($fila=$resultado-> fetch_assoc())
    {
        echo ' 
        <tr>
        <td>'.$fila['IdProducto'].'</td>
        <td>'.$fila['NombreProducto'] .' </td>
        <td>'.$fila['Precio'].' </td>
        <td> '.$fila['Presentacion'].' </td>
        <td> '.$fila['FVencimiento'].' </td>
        <td> '.$fila['Marca'].' </td>
        <td> '.$fila['IdCategoria'].' </td>
        <td> '.$fila['NombreCategoria'].' </td>
        </tr>
        ';
    }
}
else 
{
    echo "Si esta";
}
?>