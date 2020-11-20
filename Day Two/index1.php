<?php
if (isset($_GET['name'])){
    $name=$_GET['name'];
$age=$_GET['age'];
echo $name.$age;
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
    <!-- <form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit">
    </form> -->
    <form action="" method="GET">
    <input type="text" name="name">
    <input type="number" name="age">
    <input type="submit">
    </form>
</body>
</html>