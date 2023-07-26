<?php
    session_start();
        if (isset($_SESSION['l_username'])){
            session_start();
            session_destroy();
        
            echo "<script>location.href='login.php'</script>";
    }
    else{
        echo "<script>location.href='login.php'</script>";
        }

    session_start();
    session_destroy();

    echo "<script>location.href='login.php'</script>";