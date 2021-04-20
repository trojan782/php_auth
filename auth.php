<?php
session_start();

if(isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $data = [
        'name' => $name,
        'email' => $email, 
        'password1' => password_hash($password1, PASSWORD_DEFAULT),
        'password2'=> password_hash($password2, PASSWORD_DEFAULT)
    ];

    // $jsonFile = json_encode($data, JSON_PRETTY_PRINT);
    // file_put_contents('/db.json',json_encode($data));

    // function getUsers()
    // {
    //     return json_decode(file_get_contents(__DIR__ . '/db.json'), true);
    // }

    // $users = getUsers();

    function putJson($data)
    {
        file_put_contents(__DIR__ . '/db.json', json_encode($data, JSON_PRETTY_PRINT));
    }
    
    putJson($data);

    function getUsers()
    {

    }
    header('location: login.php');
}


