<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación</title>
    <style>
        td {
            border: 1px solid black;
        }
        span {
            background-color: lightblue;
            font-weight: bold;

        }
        
    </style>
</head>
<body>
    <?php
    $tablas = ["primera" => 5, "segunda" => 13, "tercera" => 11];
    ?>
    <table>
        <tr>
            <?php 
            foreach ($tablas as $key => $value) {
            ?>
            <td>
                <?php 
                    echo "<span>Tabla $key</span>" . "<br>";

                    for ($i=1; $i <= 10; $i++) { 
                        echo "$value x $i = " . $value * $i . "<br>";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
