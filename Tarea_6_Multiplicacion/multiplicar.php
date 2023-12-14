<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación</title>
    <style>
        table {
            border-collapse: collapse;
            display: inline-flex;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: lightblue;
            font-weight: bold;
            width: 190px;
            
        }
    </style>
</head>
<body>
    <h2>Tablas de multiplicar</h2>
    <?php
    $tablas = ["primera" => 5, "segunda" => 13, "tercera" => 11];
    ?>
        <!-- Iterar tantas tablas de multiplicar como tengamos en el array dentro del siguiente foreach -->
        <?php foreach ($tablas as $key => $value) { ?>
            <table>
                <tr>
                    <th><?php echo "Tabla $key"; ?></th>
                </tr>
                <?php for ($i=1; $i <= 10; $i++) { ?>
                    <tr>
                        <td>
                        <?php echo "$value x $i = " . $value * $i . "<br>"; ?>
                        </td>
                    </tr>
                <?php } // end for?>
            </table>
        <?php } // end foreach ?>
</body>
</html>
