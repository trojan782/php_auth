<?php 
session_start();
if(isset($_POST['reset'])) {
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $files = file_get_contents('db.json');
    $file = json_decode($files);

    foreach($file as $detail) {
        $oldPass = $detail->password1;
    }
    if($oldPassword == $oldPass) {
        $oldPass = $newPassword;
        echo "Password changed successfully";
        header("location: login.php");
    }
    else {
        echo "Your password was not changed, please try again";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset page</title>
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
                        <div class='welcome'>Hello Please Reset Your Password</div>
                        <form action="" method="post">
                            <div class='input-fields'>
                                <input type='password' name="oldPassword" placeholder='old Password' class='input-line full-width'></input>
                                <input type='password' name="newPassword" placeholder='New Password' class='input-line full-width'></input>
                            </div>
                            <!-- <div class='spacing'>or <a href="signup.php" class='highlight'>sign up</a></div> -->
                            <button class='ghost-round full-width' name="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>