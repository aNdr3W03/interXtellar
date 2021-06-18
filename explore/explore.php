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
    </style>

    <title>interXtellar - Explore</title>
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
                    <a class="btn btn-outline-light my-2 my-sm-0" href="logout.php">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <?php
        session_start();
        include("../koneksi.php");
    ?>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header bg-dark text-white">Explore</div>
            <div class="card-body">
                <table class="table table-dark table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Object</th>
                            <th>Star</th>
                            <th>Mass</th>
                            <th>Radius</th>
                            <th>Period</th>
                            <th>Distance</th>
                            <th>Travel Time</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php
                        $query = mysqli_query($con, "SELECT * FROM explore ORDER BY id DESC");
                        $no    = 0;

                        while($data = mysqli_fetch_array($query)){
                            $no++;
                    ?>

                    <tbody>
                        <tr class="data-row">
                            <td><?= $no; ?></td>
                            <td><img src="explore_img/<?= $data['image']; ?>" alt="explore_img/<?= $data['image']; ?>" style="width: 100px; border-radius: 10px;"></td>
                            <td><?= $data['object'];      ?></td>
                            <td><?= $data['star'];        ?></td>
                            <td><?= $data['mass'];        ?> <i>M<sub>⊕</sub></i></td>
                            <td><?= $data['radius'];      ?> <i>R<sub>⊕</sub></i></td>
                            <td><?= $data['period'];      ?> <i>days</i></td>
                            <td><?= $data['distance'];    ?> <i>ly(s)</i></td>
                            <td><?= $data['travel_time']; ?> <i>year(s)</i></td>
                            <td>$<?= $data['price'];      ?></td>
                            <td>
                                <a href="explore_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary me-md-2">Edit</a>
                                <a href="explore_delete.php?id=<?php echo $data['id'];?>&image=<?php echo $data['image']; ?>" class="btn btn-danger me-0">Delete</a>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>

                    </tbody>
                </table>
                
                <div class="d-grid justify-content-md-end">
                    <a href="explore_add.php" class="btn btn-success">Add Exploration</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
