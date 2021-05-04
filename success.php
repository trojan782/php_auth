<?php
// session_start();
// if(isset(['logout'])) {
//     header("location: login.php");
// }
echo "Hello world";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>You have successfully logged in!</h2>
    <div class="success">
        <h4>What Do you want to do next??</h4>
        <!-- <button href="reset.php">Reset Password</button> -->
        <a class="nav-link active" aria-current="page" href="./reset.php">Reset Password</a>
        <a class="nav-link active" aria-current="page" href="./logout.php">Logout</a>
    </div>
</body>

</html>