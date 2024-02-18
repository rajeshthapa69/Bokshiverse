<?php
    $conn = mysqli_connect("localhost","root","","bokshiverse");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>