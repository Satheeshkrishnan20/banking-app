<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="conatiner">
        <form action="loginprocess.php" method="post">
            <div>
                <img class="logo" src="bank1.png" alt="">
                <h3>Login</h3>
            </div>
            
            <label for="">UserName</label><br>
            <input type="text" name="username" id=""><br>
            <label for="">Password</label><br>
            <input type="password" name="password" id=""><br>
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>
</html>