<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/signup.css">
    <script src="javascript/signup.js" async defer></script>
    <script src="javascript/eye&file.js" async defer></script>
    <title>signup</title>
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
                        <div class="nameField">
                            <div class="fNameDiv">
                                <input type="text" id="first_name" required name="first_name">
                                <label>First Name</label>
                            </div>
                            <div class="lNameDiv">
                                <input type="text" id="last_name" required name="last_name">
                                <label>Last Name</label>
                            </div>
                        </div>
                        <input type="email" placeholder="Enter Your Email" required id="email" name="email">
                        <div class="eyeDiv">
                            <input type="password" placeholder="Enter Password" required id="password" name="password">
                        <i class="fa-solid fa-eye" id="eye"></i>
                        </div>
                        <div class="file">
                            <div class="imgIcon"><i class="fa-solid fa-image"></i></div>
                            <p onclick="fileOpen();">Upload Your Profile Picture <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></p>
                        </div>
                        <input type="file" required hidden id="file" name="image">
                        <input type="submit" value="Signup now" id="request">
                    </div>
                </div>
            </form>
            <div class="status">
                <p>Already have account ?</p>
                <a href="login.php">login now <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
            </div>
        </div>
    </div>
</body>

</html>