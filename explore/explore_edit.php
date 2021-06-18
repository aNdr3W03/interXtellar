<!DOCTYPE html>
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
    <link rel="icon" href="../icon.png">

    <!-- CSS -->
    <style>
        body{
            background: linear-gradient(180deg, black 0%, rgba(0,0,0,0.4) 25%, rgba(0,0,0,0.4) 75%, black 100%), url(../img/bg3.jpg);
            height: 97vh;
            background-size: cover;
            background-position: center;
        }
        nav{
            font-family: 'Oxanium', cursive;
        }
        .navbar-brand{
            font-size: 24px;
        }
        .card{
            background: rgba(255, 255, 255, 0.1);
            font-family: 'Oxygen', sans-serif;
            color: white;
        }
        .form-group input{
            background: transparent;
            color: white;
        }
        .form-group input:required{
            background: transparent;
            color: white;
        }
        .form-group input:valid{
            background: transparent;
            color: white;
        }
    </style>

    <title>interXtellar - Edit Exploration</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm py-4 navbar-light" style="background: rgba(0,0,0,0.75);">
        <div class="container-fluid ms-4 me-4">
            <a class="navbar-brand mb-2 text-white" href="../home.php"><img src="../icon.png" alt="icon" width="24" height="24" class="d-inline-block align-text-top me-2">interXtellar</a>
            <button class="navbar-toggler text-white btn-dark" style="background-color: white; type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <a class="nav-link text-white" href="../home.php#avalon">Avalon</a>
                    <a class="nav-link text-white" href="../home.php#history">History</a>
                    <a class="nav-link text-white" href="../home.php#explore">Explore</a>
                    <a class="nav-link text-white mb-2" href="../home.php#about">About</a>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-light my-2 my-sm-0" href="../logout.php">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <?php
        session_start();
        include("../koneksi.php");

        $query = mysqli_query($con, "SELECT * FROM explore WHERE id='$_GET[id]'");
        $data  = mysqli_fetch_array($query);
    ?>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header bg-dark text-white">Edit Exploration</div>
            <div class="card-body">
                <form method="POST" action="explore_update.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                    <div class="form-group row mb-3">
                        <label for="object" class="col-sm-2">Object</label>
                        <div class="col-sm-10">
                            <input type="text" name="object" id="object" class="form-control" value="<?php echo $data['object']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="star" class="col-sm-2">Star</label>
                        <div class="col-sm-10">
                            <input type="text" name="star" id="star" class="form-control" value="<?php echo $data['star']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="mass" class="col-sm-2">Mass</label>
                        <div class="col-sm-10">
                            <input type="text" name="mass" id="mass" class="form-control" value="<?php echo $data['mass']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="radius" class="col-sm-2">Radius</label>
                        <div class="col-sm-10">
                            <input type="text" name="radius" id="radius" class="form-control" value="<?php echo $data['radius']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="period" class="col-sm-2">Period</label>
                        <div class="col-sm-10">
                            <input type="text" name="period" id="period" class="form-control" value="<?php echo $data['period']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="distance" class="col-sm-2">Distance</label>
                        <div class="col-sm-10">
                            <input type="text" name="distance" id="distance" class="form-control" value="<?php echo $data['distance']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="travel_time" class="col-sm-2">Travel Time</label>
                        <div class="col-sm-10">
                            <input type="text" name="travel_time" id="travel_time" class="form-control" value="<?php echo $data['travel_time']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="price" class="col-sm-2">Price</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" name="price" id="price" class="form-control" value="<?php echo $data['price']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="image" class="col-sm-2">Image</label>
                        <div class="col-sm-10">
                            <img style="width: 30%; border-radius: 20px; margin-right: 20px;" src="explore_img/<?php echo $data['image']; ?>" alt="explore_img/<?= $data['image']; ?>">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="explore.php" class="btn btn-secondary col-2  me-md-2">Back</a>
                            <button class="btn btn-danger col-2 me-md-2" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Update Exploration</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
