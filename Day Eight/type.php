<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?
$a='Hello';
$b=23;
$c=2.3;
$d=true;
echo $a.$b.$c.$d;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
?>
    </h2>
</body>

</html>