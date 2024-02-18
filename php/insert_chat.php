<?php
    session_start();
    if(isset($_SESSION["unique_id"])){
        include_once "config.php";
        $incoming_id = mysqli_real_escape_string($conn,$_POST["incoming_id"]);
        $outgoing_id = mysqli_real_escape_string($conn,$_POST["outgoing_id"]);
        $input = mysqli_real_escape_string($conn,$_POST["input"]);

        if(!empty($input)){
            $sql = mysqli_query($conn,"INSERT INTO messages (incoming_msg_id,outgoing_msg_id,msg)
            VALUES ({$incoming_id},{$outgoing_id},'{$input}')") or die();
        }
    }
    else{
        header("location: ../login.php");
    }
?>