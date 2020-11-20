<?php

$name="mg mg";
$pass="1111";
if(isset($_GET['username'])){
    $username=$_GET['username'];
$password=$_GET['password'];
    if($name==$username && $pass==$password){
        echo "completed";
    }
else{
    echo "error";
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
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <label for="">Password</label>
    <input type="password" name="password" id="">
    <input type="submit">
    </form>
</body>
</html>