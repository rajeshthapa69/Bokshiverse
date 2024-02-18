<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn,"SELECT * FROM user_info");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="chat.php?user_id='. $row["unique_id"] .'">
            <div class="content">
                <div class="profilePicture">
                    <img src="php/images/'. $row["image"] .'" alt=""> 
                </div>
                <div class="detail">
                    <p class="name">'. $row["first_name"] . " " . $row['last_name'] .'</p>
                    <p>This is a message</p>
                </div>
            </div>
            <div class="dot"></div>
        </a>';
        }
    }
    echo $output;
?>