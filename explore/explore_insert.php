<?php
    include("../koneksi.php");


    $star        = $_POST['star'];
    $object      = $_POST['object'];
    $mass        = $_POST['mass'];
    $radius      = $_POST['radius'];
    $period      = $_POST['period'];
    $distance    = $_POST['distance'];
    $travel_time = $_POST['travel_time'];
    $price       = $_POST['price'];
    $folder      = "explore_img/";

    $upload      = 0;

    $temp        = $_FILES['image']['tmp_name'];

    if ($temp != ""){
        $name = rand(0,9999).$_FILES['image']['name'];
        $type =              $_FILES['image']['type'];
        $size =              $_FILES['image']['size'];

        if ($type != "image/jpeg" OR $type != "image/jpg" OR $type != "image/png"){
            if ($size < 2000000){   // 2 000 000 Bytes = 2 MB
                $upload = 1;
                move_uploaded_file($temp, $folder . $name);
            }
            else{
                echo "<script>alert('Maximum image file size is 1MB'); window.history.back();</script>";
            }
        }
        else{
            echo "<script>alert('Image file type must be jpeg/jpg/png'); window.history.back();</script>";
        }
    }

    $image = $name;

    if ($upload){
        $add = mysqli_query($con, "INSERT INTO explore (
            star,object,mass,radius,period,distance,travel_time,price,image) VALUES(
            '$star','$object','$mass','$radius','$period','$distance','$travel_time','$price','$image')");

        if ($add){
            echo "<style>
                    *{
                        background: linear-gradient(180deg, black 0%, rgba(0,0,0,0.4) 25%, rgba(0,0,0,0.4) 75%, black 100%), url(../img/bg3.jpg);
                        height: 100vh;
                        background-size: cover;
                        background-position: center;
                    }
                  </style>";
    
            echo "<meta http-equiv='refresh' content='1;url=explore.php'>";
        }
        else{
            echo "<script>alert('Add data failed!'); document.location='explore.php';</script>";
        }
    }
    
?>
