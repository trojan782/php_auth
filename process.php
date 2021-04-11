<?php
if (isset($_POST['signup'])) {
    $myfile = fopen("db.json", "a") or die("Unable to open file!");
    $txt =
        array(
            'name'           =>     $_POST['name'],
            'email'          =>     $_POST["email"],
            'password1'     =>     $_POST["password1"],
            'password2'     =>     $_POST["password2"],

        );
    $fina = json_encode($txt);
    fwrite($myfile, $fina);
    fclose($myfile);
}


