<?php
require ('connectvars.php');
function make_connection(){
    $mysqli = new mysqli(HOST, USER, PASS, DBNAME);
    if ($mysqli->connect_errno){
        die('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;

}

function upload_album(){
    $temp_location = $_FILES['albumimage']['tmp_name'];
    $target_location = 'images/' . time() . $_FILES['albumimage']['name'];

    $naam_album = $_POST['naamalbum'];
    $nummers = $_POST['albumimage'];

    if ($_FILES['albumimage']['size']< 2000000){
        $result = move_uploaded_file($temp_location,$target_location);
    }else{
        echo 'Dit is wel een heel groot bestand';
    }

    if ($result){
        make_connection();

        $query = "INSERT INTO album VALUES (0,'?','?','?')";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('sss')

    }
}

function check_login(){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin'){
        $_SESSION['loggedin'] = 'loggedin';
    }
}