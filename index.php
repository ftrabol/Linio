<?php
require_once('./src/Multiplos.php');
$obj  = new Multiplos(3,5);
$data = $obj->printMessage();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineo Multiplos</title>
</head>
<body>
<div style="width:80%;margin:0 auto;">
    <div  style="width:20%;margin:0 auto;">
        <h3>Multiplos</h3>
        <h4>Por 3 = LINEO</h4>
        <h4>Por 5 = IT</h4>
        <h4>Por 3 y 5 = LINEADOS</h4>
    </div>
    <div style="width:100%;margin:0 auto;heigth:500px;margin: 0 auto;height: 500px;overflow-y: auto;">
        <table class="table" border=1 style="border-collapse: collapse;width:100%;">
            <tr>
                <td>N°</td>
                <td>Mensaje</td>
            </tr>
            <?php 
            if(count($data)>0): 
                for ($i=1; $i <= count($data) ; $i++):
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$data[$i]."</td>";
                    echo "</tr>";
                endfor;
            endif;?>
        </table>
    </div>
</div>
</body>
</html>