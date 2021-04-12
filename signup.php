<?php require_once 'process.php' ?>
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
                        <div class='welcome'>Hello There!</div>
                        <div class='subtitle'>Create an account with us!</div>
                        <form action=" " method="post">
                            <div class='input-fields'>
                                <input type='text' placeholder='name' name = "name" class='input-line full-width'></input>
                                <input type='email' placeholder='Email' name = "email" class='input-line full-width'></input>
                                <input type='password' placeholder='Password' name = "password1" class='input-line full-width'></input>
                                <input type='password' placeholder='Confirm Password' name = "password2" class='input-line full-width'></input>

                            </div>
                            <div class='spacing'>Already a member?<a href="login.php" class='highlight'>Login</a></div>
                            <div><button class='ghost-round full-width' name="signup">Create Account</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>