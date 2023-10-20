<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $a = 3;
     ?>

     <ul>
       <?php
        while($a>0){
          echo "<li>Hola $a</li>";
          $a--;
        } ?>
     </ul>
  </body>
</html>
