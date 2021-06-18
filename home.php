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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icon -->
    <link rel="icon" href="icon.png">

    <!-- CSS -->
    <style>
        nav{
            font-family: 'Oxanium', cursive;
        }
        .navbar-brand{
            font-size: 24px;
        }
        .container_home{
            background: linear-gradient(180deg, black 0%, rgba(255,255,255,0) 25%, rgba(255,255,255,0) 75%, black 100%), url(img/bg1.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .cho{
            position: relative;
            top: 35%;
            left: 10%;
            max-width: 80%;
        }
        .cho p{
            font-family: 'Oxygen', sans-serif;
            font-weight: 700;
            font-size: 48px;
            color: white;
            margin: 0;
        }
        .cho a{
            font-family: 'Oxanium', cursive;
            font-weight: 600;
            font-size: 24px;
        }
        .container_avalon{
            background: linear-gradient(180deg, black 0%, rgba(255,255,255,0) 25%, rgba(255,255,255,0) 75%, black 100%), url(img/avalon_1.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .cav{
            position: relative;
            top: 70%;
            left: 10%;
            max-width: 80%;
            color: white;
        }
        .cav{
            font-family: 'Oxygen', sans-serif;
        }
        .cav h1{
            font-weight: 600;
            font-size: 40px;
        }
        .avalon_overview{
            color: white;
            background: black;
            height: 100vh;
        }
        .aov{
            margin: 0 10%;
            padding: 0;
            width: 80%;
            position: relative;
            top: 20%;
        }
        .aov table{
            margin: 0 0 30px 0;
        }
        td,th{
            color: white;
            font-family: 'Oxanium', cursive;
        }
        .aov .image{
            padding: 0 5%;
        }
        .aov img{
            width: 100%;
            border-radius: 0 50px 0 50px;
        }
        .container_history{
            background: black;
            height: max-content;
            min-height: 100vh;
        }
        .chi{
            margin: 0 10%;
            padding: 10% 0;
            width: 80%;
        }
        .chi .card{
            background: #333;
            color: white;
            border-radius: 15px;
        }
        .chi .card img{
            width: 80%;
            margin: 2% 10%;
            border-radius: 15px;
        }
        .chi .card a{
            text-decoration: none;
            color: white;
        }
        .container_explore{
            background: black;
            height: max-content;
            min-height: 100vh;
        }
        .cex{
            margin: 0 10%;
            padding: 10% 0;
            width: 80%;
        }
        .cex h2{
            font-family: 'Oxygen', sans-serif;
            font-weight: 700;
            color: white;
            margin-bottom: 30px;
        }
        .cex .btn{
            margin-bottom: 50px;
            font-family: 'Oxygen', sans-serif;
            font-size: 18px;
        }
        .cex .card{
            background: transparent;
            color: white;
            border-radius: 15px;
        }
        .cex th{
            font-size: 14px;
        }
        .cex .card img{
            width: 80%;
            margin: 2% 10%;
            border-radius: 15px;
        }
        .container_footer{
            background: black;
            color: white;
            font-family: 'Oxanium', cursive;
        }
        .container_footer a{
            text-decoration: none;
            color: white;
        }
    </style>

    <title>interXtellar</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-sm py-4 navbar-light" style="background: rgba(0,0,0,0.75);">
        <div class="container-fluid ms-4 me-4">
            <a class="navbar-brand mb-2 text-white" href="#"><img src="icon.png" alt="icon" width="24" height="24" class="d-inline-block align-text-top me-2">interXtellar</a>
            <button class="navbar-toggler text-white btn-dark" style="background-color: white; type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <a class="nav-link text-white" href="#avalon">Avalon</a>
                    <a class="nav-link text-white" href="#history">History</a>
                    <a class="nav-link text-white" href="#explore">Explore</a>
                    <a class="nav-link text-white mb-2" href="#about">About</a>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-light my-2 my-sm-0" href="logout.php">Log Out</a>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container_home">
        <div class="cho">
            <p>explore infinite interstellar</p>
            <p>discover the possibility of extraterrestrial life</p>
            <a class="btn btn-light mt-4" href="#explore">BEYOND THE EARTH</a>
        </div>
    </div>
    
    <div class="container_avalon" id="avalon">
        <div class="cav">
            <h3><a style="text-decoration: none; color: white; font-family: 'Oxanium', cursive;" href="#">interXtellar</a> Mega Project</h3>
            <h1>Avalon the Starship</h1>
            <p>Which will lead us to explore interstellar and find habitable zones or planets</p>
        </div>
    </div>

    <div class="avalon_overview">
        <!-- Source: https://www.space.com/35133-how-realistic-ship-from-passengers.html -->
        <div class="container aov">
            <div class="row">
                <div class="col-sm-5">
                    <h2 style="">The Avalon – Overview</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">CAPACITY</th>
                                <td>more than 5000 passengers</td>
                            </tr>
                            <tr>
                                <th scope="row">SPEED</th>
                                <td>half the speed of light (299792.458 km/s)</td>
                            </tr>
                            <tr>
                                <th scope="row">POWER</th>
                                <td>eight (8) nuclear fusion reactors</td>
                            </tr>
                            <tr>
                                <th scope="row">LENGHT</th>
                                <td>1 kilometer (0.62 miles)</td>
                            </tr>
                            <tr>
                                <th scope="row">ASSEMBLY</th>
                                <td>assembled in space for decades</td>
                            </tr>
                            <tr>
                                <td colspan="2">The Avalon has three long, thin modules that wrap around a common center and spin, also provides the ship with artificial gravity.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-7 image">
                    <img src="img/avalon_5.jpg" alt="avalon5">
                </div>
            </div>
        </div>
    </div>

    <div class="avalon_carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/avalon_2.jpg" class="d-block w-100" alt="avalon2">
                </div>
                <div class="carousel-item">
                <img src="img/avalon_3.jpg" class="d-block w-100" alt="avalon3">
                </div>
                <div class="carousel-item">
                <img src="img/avalon_4.jpg" class="d-block w-100" alt="avalon4">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="container_history" id="history">
        <div class="chi">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/Bussard_Ramjet.jpg" class="card-img-top" alt="Bussard Ramjet">
                        <div class="card-body">
                            <a href="https://en.wikipedia.org/wiki/Bussard_ramjet" target="_blank" class="card-title"><h4>Bussard Ramjet</h4></a>
                            <p class="card-text">The Bussard ramjet is a theoretical method of spacecraft propulsion proposed in 1960 by the physicist Robert W. Bussard. Fusion rocket capable of reasonable interstellar travel, using enormous electromagnetic fields as a ram scoop to collect and compress hydrogen from the interstellar medium. Thermonuclear fusion occurs.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Propulsion discharge speed < 100,000m/s (100km/s)</a></small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/The_Sounds_of_Earth.jpg" class="card-img-top" alt="The Sounds of Earth">
                        <div class="card-body">
                            <a href="https://en.wikipedia.org/wiki/Voyager_Golden_Record" target="_blank" class="card-title"><h4>Voyager Golden Record</h4></a>
                            <p class="card-text">The Voyager Golden Records are two phonograph records that were included aboard both Voyager spacecraft launched in 1977, that contain sounds and images selected to portray the diversity of life and culture on Earth, and are intended for any intelligent extraterrestrial life form who may find them. The records are a sort of time capsule.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">The Sounds of Earth. "Hello from the children of Planet Earth"</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/Arecibo_Message.png" class="card-img-top" alt="Arecibo Message">
                        <div class="card-body">
                            <a href="https://en.wikipedia.org/wiki/Arecibo_message" target="_blank" class="card-title"><h4>Arecibo message</h4></a>
                            <p class="card-text">The Arecibo message is an interstellar radio message carrying basic information about humanity and Earth that was sent to globular star cluster M13 in 1974, 25,000 light years from Earth, because M13 was a large and relatively close. The message was broadcast into space a single time via frequency modulated radio waves.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Correctly translated into graphics, characters, and spaces, the 1,679 bits of data contained</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include("koneksi.php");
        $q_explore = mysqli_query($con, "SELECT * FROM explore ORDER BY id DESC");
    ?>

    <div class="container_explore" id="explore">
        <div class="cex">
            <h2 class="title display-4 text-center">Explore Now!</h2>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a class="btn btn-outline-info" href="explore/explore.php">EDIT DATA</a>
            </div>

            <div class="row">
                <?php while ($data = mysqli_fetch_assoc($q_explore)) : ?>
                <div class="col-sm-6 col-md-6 mb-4">
                    <div class="card explore">
                        <img class="card-img-top" src="explore/explore_img/<?= $data['image']; ?>" alt="<?= $data['object']; ?>">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">OBJECT</th>
                                        <td><h5><?= $data['object']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">STAR</th>
                                        <td><h5><?= $data['star']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">MASS</th>
                                        <td><h5><?= $data['mass']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">RADIUS</th>
                                        <td><h5><?= $data['radius']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">PERIOD</th>
                                        <td><h5><?= $data['period']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DISTANCE</th>
                                        <td><h5><?= $data['distance']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TRAVEL TIME</th>
                                        <td><h5><?= $data['travel_time']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">PRICE</th>
                                        <td><h5>$<?= $data['price']; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>

    <div class="container_about">
        <div class="cab">
            
        </div>
    </div>

    <div class="container_footer">
        <footer class="text-center">
            <div class="container p-1">
                <section class="">
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-youtube-play"></i></a>
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-facebook-square"></i></a>
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-instagram"></i></a>
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-flickr"></i></a>
                    <a class="btn btn-floating m-1" href="#"><i class="fa fa-linkedin"></i></a>
                </section>
            </div>

            <div class="copyright text-center pb-5 p-3">
                <a href="#">interXtellar</a> &copy; 2021
            </div>
        </footer>
    </div>
</body>

</html>
