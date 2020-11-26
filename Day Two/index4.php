<?php
if(isset($_GET['username'])){
    $username=$_GET['username'];
$password=$_GET['password'];
$gender=$_GET['gender'];
$city=$_GET['city'];
echo $username.$password.$gender.$city;
echo "Hello";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        margin-bottom: 10px;
    }

    label {
        display: inline-block;
        width: 100px;
    }

    .gen {
        display: flex;
        flex-direction: row;
    }
    </style>
</head>

<body>
    <form action="" method="GET">
        <div>
            <label for="">Username</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>

            <div class=gen>
                <label for="">Gender</label>
                <div class='gen'>
                    <input type="radio" value='male' name='gender'>
                    <label for="">Male</label>
                    <input type="radio" value='female' name='gender'>
                    <label for="">Female</label>
                </div>
            </div>
            <div>
                <select name="city" id="">
                    <option value="Yangon">Yangon</option>
                    <option value="Mandalay">Mandalay</option>
                    <option value="Naypyitaw">Naypyitaw</option>
                </select>
            </div>
            <input type="submit">
        </div>
    </form>
</body>

</html>