<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/chat.css">
    <script src="javascript/chat.js" async defer></script>
    <title>chat</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="user">
            <?php
                    include_once "php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET["user_id"]);
                    $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE unique_id = {$user_id}");

                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="back">
                    <a href="users.php"><i class="fa-solid fa-left-long"></i></a>
                </div>
                <div class="content">
                    <div class="profilePicture">
                        <img src="php/images/<?php echo $row["image"] ?>" alt=""> 
                    </div>
                    <div class="detail">
                        <p class="name"><?php echo $row["first_name"] . " " . $row['last_name'] ?></p>
                        <p><?php echo $row["status"] ?></p>
                    </div>
                </div>
                <div class="audio_call">
                    <a href=""><i class="fa-solid fa-phone"></i></a>
                </div>
                <div class="video_call">
                    <a href=""><i class="fa-solid fa-video"></i></a>
                </div>
            </div>
            <div id="chatbox">
                <div id="chatarea">
                </div>
            </div>
            <div class="messageinput">
                    <form action="" id="form">
                    <i class="fa-solid fa-image image"></i>
                    <i class="fa-solid fa-face-smile emoji"></i>
                    <i class="fa-solid fa-microphone-lines audio"></i>
                    <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <input type="text" name="outgoing_id" value="<?php echo $_SESSION["unique_id"]; ?>" hidden>
                    <input type="text" name="input" placeholder="Type your message here" spellcheck="false" id="input">
                    <button id="send"><i class="fa-solid fa-paper-plane send"></i></button>
                    </form>
                </div>
        </div>
    </div>
</body>

</html>