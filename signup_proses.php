<?php
	session_start();

	include("koneksi.php");

    $username = "";
    $nama     = "";
    $email    = "";
    $errors   = array();

    function random_num($length){
		if ($length < 5){
			$length = 5;
		}

		$len = rand(4, $length);
        $text = "";

		for ($i=0; $i<$len; $i++){
			$text .= rand(0,9);
		}

		return $text;
	}

    if (isset($_POST['create_acc'])){
        $user_id    = random_num(20);
        // Data sanitization to prevent SQL injection
        $nama       = mysqli_real_escape_string($con,     $_POST['fullname']);
        $email      = mysqli_real_escape_string($con,     $_POST['email']);
        $username   = mysqli_real_escape_string($con,     $_POST['username']);
        $password_1 = mysqli_real_escape_string($con, md5($_POST['password1']));
        $password_2 = mysqli_real_escape_string($con, md5($_POST['password2']));
        
        if ($password_1!=$password_2){array_push($errors, "Password do not match");}


        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result           = mysqli_query($con, $user_check_query);
        $user             = mysqli_fetch_array($result);

        if (isset($user)){
            if ($user['username'] === $username){
                array_push($errors, "Username has already been used");
            }

            if ($user['email'] === $email){
                array_push($errors, "Email has already registered");
            }
        }
        
        if (count($errors) == 0){
            $password = $password_1;
            $query    = "INSERT INTO users (user_id, full_name, email, username, password) VALUES ('$user_id', '$nama', '$email', '$username', '$password')";
            mysqli_query($con, $query);
            
            $_SESSION['username'] = $username;
            echo "<style>
                    *{
                        background: linear-gradient(180deg, black 0%, rgba(0,0,0,0.4) 25%, rgba(0,0,0,0.4) 75%, black 100%), url(img/bg3.jpg);
                        height: 97vh;
                        background-size: cover;
                        background-position: center;
                    }
                  </style>";
    
            echo "<script>alert('Akun anda berhasil dibuat'); location='home.php';</script>";
        }
    }
?>
