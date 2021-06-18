<?php
    session_start();

    include("../koneksi.php");

    if (file_exists("explore_img/$_GET[image]")){
             unlink("explore_img/$_GET[image]");
    }

    $query = mysqli_query($con, "DELETE FROM explore WHERE id='$_GET[id]'");

    if ($query){
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
        echo "<script>alert('Delete data failed!'); document.location='explore.php';</script>";
    }
?>
