<?php
if(isset($_GET['num'])){
 $num=$_GET['num'];
   for ($i=1;$i<=12;$i++){
      echo $num." x ".$i." = ". $num*$i."<br>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <input type="number" name="num" id="">
    <input type="submit">
    </form>
</body>
</html>