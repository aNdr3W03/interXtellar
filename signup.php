<!DOCTYPE html>

<?php
    include("signup_proses.php");
?>

<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <!--
    font-family: 'Oxanium', cursive;    [400, 600]
    font-family: 'Oxygen', sans-serif;  [300, 400, 700]
    -->

    <!-- Icon -->
    <link rel="icon" href="icon.png">

    <!-- CSS -->
    <style>
        nav{
            font-family: 'Oxanium', cursive;
        }
        .navbar-brand{
            font-size: 24px;
            vertical-align: middle;
        }
        .container_login{
            background: linear-gradient(180deg, black 0%, rgba(0,0,0,0.4) 25%, rgba(0,0,0,0.4) 75%, black 100%), url(img/bg2.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Oxygen', sans-serif;
            color: white;
        }
        h2{
            text-align: center;
            font-family: 'Oxanium', cursive;
            font-weight: 600;
            font-size: 40px;
        }
        .form-floating{
            min-width: 400px;
        }
        .form-floating input{
            background: transparent;
            color: white;
        }
        .form-floating input:required{
            background: transparent;
            color: white;
        }
        button{
            font-family: 'Oxanium', cursive;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.25);
        }
        .form-floating p{
            text-align: center;
        }
        .form-floating a{
            text-decoration: none;
            color: white;
            font-weight: 700;
        }
    </style>
    
    <!-- JS -->
    <script>
        function showpass(){
            var x = document.getElementById("formInputPassword1");
            var y = document.getElementById("formInputPassword2");

            if (x.type == "password" || y.type == "password"){
                x.type = "text";
                y.type = "text";
            }
            else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>

    <title>interXtellar - Sign Up</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-sm py-4 navbar-light" style="background: rgba(0,0,0,0.75);">
        <div class="container-fluid ms-4 me-4">
            <a class="navbar-brand mb-2 text-white" href="#"><img src="icon.png" alt="icon" width="24" height="24" class="d-inline-block align-text-top me-2">interXtellar</a>
        </div>
    </nav>

    <div class="container_login">
        <div class="login-form">
            <form method="POST" action="signup.php">
                <div class="col-12 mb-3">
                    <h2><b>Sign Up</b></h2>
                </div>

                <div class="form-floating col-12 mb-3">
                    <input class="form-control" id="floatingInput" required name="fullname" type="text" placeholder="Fullname">
                    <label for="floatingInput">Fullname</label>
                </div>

                <div class="form-floating col-12 mb-3">
                    <input class="form-control" id="floatingInput" required name="email" type="email" placeholder="Email">
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating col-12 mb-3">
                    <input class="form-control" id="floatingInput" required name="username" type="text" placeholder="Username" minlength="8">
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating col-12 mb-3">
                    <input class="form-control" id="formInputPassword1" required name="password1" type="password" placeholder="Password" minlength="8">
                    <label for="formInputPassword">Password</label>
                </div>

                <div class="form-floating col-12 mb-3">
                    <input class="form-control" id="formInputPassword2" required name="password2" type="password" placeholder="Confirm Password" minlength="8">
                    <label for="formInputPassword">Confirm Password</label>
                </div>

                <div class="col-12 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="showpassCheck" onclick="showpass()">
                        <label class="form-check-label" for="showpassCheck">
                            Show Password</label>
                    </div>
                </div>

                <?php
                    if (count($errors)>0){
                        foreach ($errors as $error){
                            echo "<div style='font-family: Arial, sans-serif; font-size: 18px; font-weight: 500; color: red; margin-bottom: 16px'>".$error."<br></div>";
                        }
                    }
                ?>

                <div class="d-grid col-6 mb-5 mx-auto">
                    <button type="submit" class="btn btn-outline-light" name="create_acc">Sign Up</button>
                </div>

                <div class="form-floating col-12 mb-3">
                    <p>Already have an account?<a href="login.php"><br>Click to login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
