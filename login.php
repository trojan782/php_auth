<?php
include 'db.json';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    $username = $_POST['name'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <!-- <form action="post">
                <label for="emali">
                    <input type="email" name="email" placeholder="Email" required>
                </label>

                <label for="password">
                    <input type="password" name="password" placeholder="Password" required>
                </label>
            </form>
        </div> -->
            <div class='bold-line'></div>
            <div class='container'>
                <div class='window'>
                    <div class='overlay'></div>
                    <div class='content'>
                        <div class='welcome'>Hello Welcome back!</div>
                        <form action="" method="post">
                            <div class='input-fields'>
                                <input type='text' name = "name" placeholder='Email' class='input-line full-width'></input>
                                <input type='password' name = "password" placeholder='Password' class='input-line full-width'></input>
                            </div>
                            <div class='spacing'>or <a href="signup.php" class='highlight'>sign up</a></div>
                            <div><button class='ghost-round full-width' name="login">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<!-- https://freefrontend.com/css-login-forms/ -->