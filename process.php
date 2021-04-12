<?php
session_start();
if (isset($_POST['signup'])) {
    $myfile = fopen("db.json", "a") or die("Unable to open file!");
    $txt =
        array(
            'name'           =>     $_POST['name'],
            'email'          =>     $_POST["email"],
            'password1'     =>     $_POST["password1"],
            'password2'     =>     $_POST["password2"],

        );
      
     
    $final = json_encode($txt);
    fwrite($myfile, $final);
    fclose($myfile);
    // header("location:login.php");

}
$data = file_get_contents("db.json");
$json = json_decode($data, true);
foreach ($json as $key => $value) {
    if (!is_array($value)) {
        echo $key . '=>' . $value . '<br/>';
    } else {
        foreach ($value as $key => $val) {
            echo $key . '=>' . $val . '<br/>';
        }
    }
}
