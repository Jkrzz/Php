<?php
$showData=false;
$s=10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if ($showData){
      echo "  <h1>Datas</h1>";
  }
  ?>
  <?php 
   for ($i=0;$i<=5;$i++){
        echo "  <h".$i.">Datas</h".$i.">";
   }
  ?>
</body>
</html>