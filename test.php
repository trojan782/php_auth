<?php

require_once 'process.php';
$files = file_get_contents('db.json');
$file = json_decode($files);


foreach ($file as $detail) {
    $id = $_POST['name'];
    $password = $_POST['password'];
    $pass = $detail->password1;
    echo $pass;
    $verifiedPass = password_verify($pass, $password);
    echo $verifiedPass;
    if($id == $detail->name && $password == $verifiedPass) {
        header("lcation: success.php");
    }
    else {
        echo "There was a problem logging you in";
    }
}