<?php
    include("../koneksi.php");

    $id          = $_POST['id'];
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
        
        $image = $name;

        if ($type != "image/jpeg" OR $type != "image/jpg" OR $type != "image/png"){
            if ($size < 2000000){   // 2 000 000 Bytes = 2 MB
                $upload = 1;
                $query  = mysqli_query($con, "SELECT * FROM explore WHERE id='$_POST[id]'");
                $data   = mysqli_fetch_array($query);
                if (file_exists("explore_img/$data[image]")){
                         unlink("explore_img/$data[image]");
                }
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

    if ($upload){
        // explore update with image
        $update = mysqli_query($con, "UPDATE explore SET
            star        = '$star',
            object      = '$object',
            mass        = '$mass',
            radius      = '$radius',
            period      = '$period',
            distance    = '$distance',
            travel_time = '$travel_time',
            price       = '$price',
            image       = '$image' WHERE id = '$id'");
    }
    else{
        // explore update without image
        $update = mysqli_query($con, "UPDATE explore SET
            star        = '$star',
            object      = '$object',
            mass        = '$mass',
            radius      = '$radius',
            period      = '$period',
            distance    = '$distance',
            travel_time = '$travel_time',
            price       = '$price' WHERE id = '$id'");
    }

    if ($update){
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
        echo "<script>alert('Update data failed!'); document.location='explore.php';</script>";
    }
?>
