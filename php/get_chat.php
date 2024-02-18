<?php
    session_start();
    if(isset($_SESSION["unique_id"])){
        include_once "config.php";
        $incoming_id = mysqli_real_escape_string($conn,$_POST["incoming_id"]);
        $outgoing_id = mysqli_real_escape_string($conn,$_POST["outgoing_id"]);

        $output = '';

        $sql = "SELECT * FROM messages LEFT JOIN user_info ON user_info.unique_id = messages.outgoing_msg_id
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="outgoingmessage">
                    <div class="content">
                        <div class="message">
                            <p>'. $row["msg"] .'</p>
                        </div>
                    </div>
                </div>';
                }
                else{
                    $output .='<div class="incomingmessage">
                    <div class="chat_content">
                        <div class="chat_profilePicture">
                            <img src="php/images/'. $row["image"] .'" alt=""> 
                        </div>
                        <div class="message">
                            <p>'. $row["msg"] .'</p>
                        </div>
                    </div>
                </div>';
                }
            }
            echo $output;
        }
    }
    else{
        header("location: ../login.php");
    }
?>