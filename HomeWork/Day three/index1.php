<?php

if(isset($_GET['username'])){
    $username=$_GET['username'];
    $password=$_GET['password'];
    $gender=$_GET['gender'];
    $city=$_GET['city'];
    echo $username.$password.$gender.$city;
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
        <div>
            <label for=''>Username</label>
            <input type="text" name='username'>
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name='password'>
        </div>
        <div><label for="gender">Gender</label>
            <div><label for="">Male</label>
                <input type="radio" name='gender' value='male'>
            </div>
            <div><label for="">Female</label>
                <input type="radio" name='gender' value='female'>
            </div>
        </div>
        <div><select name="city" id="">
                <option value="Yangon">Yangon</option>
                <option value="Mandalay">Mandalay</option>
                <option value="Naypyitaw">Naypyitaw</option>
            </select></div>
        <input type="submit">
    </form>
</body>

</html>