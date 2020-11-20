<?php
$a=3;
$b=3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
    if ($b>$a){
        echo "Hello World";
    }
    else if($b<$a){
        echo "Min Ga Lar Par";
    }
    else {
        echo "konichiwa";
    }
        ?></h1>
     <h1><?php
    if ($b>$a):
        echo "Hello World";
    elseif ($b<$a):
        echo "Min Ga Lar Par";
    else :
        echo "konichiwa";
    endif;
    ?></h1>
</body>
</html>