<?php
    include('koneksi.php');

    $errors = array();

    if (isset($_POST['login_acc'])){
        // Data sanitization to prevent SQL injection
        $username = mysqli_real_escape_string($con,     $_POST['username']);
        $password = mysqli_real_escape_string($con, md5($_POST['password']));
        
        $query    = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        $cek      = mysqli_num_rows($query);

        if ($cek == 1){
            $_SESSION['username'] = $username;
            header('location: home.php');
        }
        else{
            array_push($errors, "Username or Password incorrect");
        }
    }
    
?>
