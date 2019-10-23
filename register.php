<?php

    require_once("koneksi.php");

    if(isset($_POST['register'])){
    
    include 'koneksi.php';
    $name= mysqli_real_escape_string($koneksi, trim($_POST['name']));
    $username= mysqli_real_escape_string($koneksi, trim($_POST['username']));
    $password= mysqli_real_escape_string($koneksi, trim($_POST['pass']));
    $email= mysqli_real_escape_string($koneksi, trim($_POST['email']));
    // filter data yang diinputkan
    /*$name = filter_input(INPUT_POST, 'name'?/*, FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username'*, FILTER_SANITIZE_STRING);
    
    // enkripsi password*/
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "insert into login (username,password, email, fullname) 
            values ('$username','$password','$email','$name' )";
    
    // eksekusi query untuk menyimpan ke database
    mysqli_query($koneksi, $sql);
    header("Location: lgn/login.html");


}
?>
