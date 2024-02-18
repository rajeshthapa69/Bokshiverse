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
    <link rel="stylesheet" href="css/users.css">
    <script src="javascript/users.js" async defer></script>
    <script src="javascript/bokshiverse.js" async defer></script>
    <title>users</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="user">
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE unique_id = {$_SESSION["unique_id"]}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <div class="profilePicture">
                        <img src="php/images/<?php echo $row["image"] ?>" alt=""> 
                    </div>
                    <div class="detail">
                        <p class="name"><?php echo $row["first_name"] . " " . $row['last_name'] ?></p>
                        <p><?php echo $row["status"] ?></p>
                    </div>
                </div>
                <div class="logout">
                    <a href="login.php">Logout</a>
                </div>
            </div>
            <div class="search">
                <input type="text" placeholder="Enter name to search" spellcheck="false" id="search">
                <i class="fa-solid fa-magnifying-glass lens"></i>
            </div>
            <div class="user_list" id="userList">
                
            </div>
        </div>
    </div>
</body>

</html>