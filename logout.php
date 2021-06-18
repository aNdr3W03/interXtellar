<?php
    session_start();
    session_destroy();

    echo "<style>
            *{
                background: linear-gradient(180deg, black 0%, rgba(0,0,0,0.4) 25%, rgba(0,0,0,0.4) 75%, black 100%), url(img/bg3.jpg);
                height: 97vh;
                background-size: cover;
                background-position: center;
            }
          </style>";
    
    echo "<h3 style='display: flex; justify-content: center; align-items: center; height: 97vh; font-family: Arial, sans-serif; color: white;'>You've logged out! Bye</h3>";

    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
?>
