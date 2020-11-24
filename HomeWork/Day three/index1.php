<?php
$name=$_GET('name');
$pass=$_GET('password')
$gender=$_GET('gender')
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
            <label for="name" id='name'>Username</label>
            <input type="text" name='name'>
        </div>
        <div>
            <label for="pass">password</label>
            <input type="password" name='password'>
        </div>
        <div><label for="gender">Gender</label>
            <div><label for="" name='gender' value='female'>Male</label>
                <input type="radio">
            </div>
            <div><label for="">Female</label>
                <input type="radio" name='female'>
            </div>
        </div>
        <div><select name="city" id="">
                <option value="Yangon">Yangon</option>
                <option value="Mandalay">Mandalay</option>
                <option value="Naypyitaw">Naypyitaw</option>
            </select></div>
    </form>
</body>

</html>