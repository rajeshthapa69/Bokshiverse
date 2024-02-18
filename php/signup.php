<?php
    session_start();
    include_once "config.php";
    $first_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT * FROM user_info WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist !";
            }
            else{
                if(isset($_FILES["image"])){
                    $img_name = $_FILES["image"]["name"];
                    $img_type = $_FILES["image"]["type"];
                    $temp_name = $_FILES["image"]["tmp_name"];
                    $img_explode = explode(".",$img_name);
                    $img_ext = end($img_explode);

                    $extensions = ["png","jpg","jpeg"];
                    if(in_array($img_ext,$extensions) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($temp_name, 'images/'.$new_img_name)){
                        $status = "Active now";
                        $random_id = rand(time(), 10000000);

                        $sql2 = mysqli_query($conn, "INSERT INTO user_info(unique_id,first_name,last_name,email,password,image,status)
                        VALUES ({$random_id},'{$first_name}','{$last_name}','{$email}','{$password}','{$new_img_name}','{$status}')");

                        if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION["unique_id"] = $row["unique_id"];
                                echo "Success";
                            }
                        }
                        else{
                            echo "Something went wrong !";
                        }
                        }
                    }
                    else{
                        echo "Please select an Image file !";
                    }
                }
                else{
                    echo "Please select a Profile Picture";
                }
            }
        }
        else{
            echo "$email - This is not a valid email !";
        }
    }
    else{
        echo "All input field are required !";
    }
?>