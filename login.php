<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <script src="javascript/login.js" async defer></script>
    <script src="javascript/eye&file.js" async defer></script>
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="head">
                <p class="logo">BOKSHI <span>VERSE</span></p>
                <p class="gretting">Hello there, Sign up to continue</p>
            </div>
            <form>
                <div class="form">
                    <div id="error"></div>
                    <div class="input">
                        <input type="email" placeholder="Enter Your Email" required id="email" name="email">
                        <div class="eyeDiv">
                            <input type="password" placeholder="Enter Password" required id="password" name="password">
                        <i class="fa-solid fa-eye" id="eye"></i>
                        </div>
                        <input type="submit" value="Login now" id="request">
                    </div>
                </div>
            </form>
            <div class="status">
                <p>Don't have account ?</p>
                <a href="index.php">signup now <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
            </div>
        </div>
    </div>
</body>

</html>