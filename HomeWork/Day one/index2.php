<?php
$i=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
while ($i<=10){
    echo $i++;
    echo "</br>";
}
    ?>
    </h1>
    <h1>
    <?php
while ($i<=10):
    echo $i++;
    echo "</br>";
endwhile;
    ?>
    </h1>
</body>
</html>