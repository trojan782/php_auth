<?php
// require_once 'db.json';

session_start();
if(isset($_POST['login'])) {
    $id = $_POST['name'];
    $password = $_POST['password'];
    $files = file_get_contents('db.json');
    $file = json_decode($files);

    foreach ($file as $detail) {
       $name = $detail->name;
    //    $verifiedPass = password_verify($password, $detail->password1);
    $pass = $detail->password1;
    }
    if ($id == $name && $password == $pass) {
        header("location: success.php");
    } else {
        echo "There was a problem logging you in";
    }
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
  
            <div class='bold-line'></div>
            <div class='container'>
                <div class='window'>
                    <div class='overlay'></div>
                    <div class='content'>
                        <div class='welcome'>Hello Welcome back!</div>
                        <form action="" method="post">
                            <div class='input-fields'>
                                <input type='text' name = "name" placeholder='username' class='input-line full-width'></input>
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