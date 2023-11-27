<?php
function region()
{
    $region = array('Lima', 'Ica', 'Arequipa', 'Cusco', 'Tumbes');
    foreach ($region as $key => $x) {
        echo "<option value='$x'>$x</option>";
    }
}

function provincias()
{
    $select = "";
    switch ($select) {
        case 'Ica':
            $provincia = array('Chincha', 'Pisco', 'Nazca', 'Palpa', 'Ica');
            echo "<select>";
            foreach ($provincia as $key => $y) {
                echo "<option value='$y'>$y</option>";
            }
            echo "</select>";
            break;
        case 'Lima':
            $provincia = array('Cañete', 'La Victoria', 'Lima', 'Huaral', 'Callao');
            echo "<select>";
            foreach ($provincia as $key => $y) {
                echo "<option value='$y'>$y</option>";
            }
            echo "</select>";
            break;
        case 'Arequipa':
            $provincia = array('Camaná', 'Caravelí', 'Caylloma', 'Arequipa', 'Callao');
            echo "<select>";
            foreach ($provincia as $key => $y) {
                echo "<option value='$y'>$y</option>";
            }
            echo "</select>";
            break;
        default:
            echo "No hay provincias cargadas";
    }

}


?>