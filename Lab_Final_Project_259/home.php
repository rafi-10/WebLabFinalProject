<?php
    session_start();
    if (isset($_SESSION['username'])){

        // echo "<h2> Welcome ".$_SESSION['username']." to my project </h2><br>";
        // echo "<br><a href= 'logout.php'> <input type='button'value='logout' name= 'Logout'></a>";
    
        include 'homepage.php';
    }
    
    else{
        echo "<script>alert('Do not access from URL !! Login first')</script>";
        echo "<script>location.href='login.php'</script>";
     }

     

