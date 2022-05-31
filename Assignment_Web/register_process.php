<?php
require "db.php";

if (isset($_POST['username']) && $_POST['password'] && isset($_POST['fullname']) && isset($_POST['re_password'])) {
    mysqli_set_charset($conn, "utf8");
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $validInput = validateRegisterInput($username, $password, $re_password);
    if ($validInput != "valid") {
        $error_message = $validInput;
    }
    else {
        $checkExist = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $username. "'");
        var_dump($checkExist);
        if($checkExist->num_rows > 0){
            $error_message = "Username exist !!!";
        }
        else {
            $insert_sql = "INSERT INTO user VALUES ('" . $username. "','" . $password . "','" . $fullname . "')";

            if (mysqli_query($conn, $insert_sql)) {
                $msg_alert = urlencode("Register Success");
                $msg = urlencode("Please login after register !!!");
                header("Location: login.php?alert={$msg_alert}&msg={$msg}");
            } else {
                $error_message = "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}

function validateRegisterInput($usernameInput, $passwordInput, $re_passwordInput) {
    $usernameRegex = "/^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z\d._]+(?<![_.])$/";
    $passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
//    if (!preg_match($usernameRegex, $usernameInput)) {
//        return "Username not valid, must be 8-20 characters long, special character allow";
//    }
//    if (!preg_match($passwordRegex, $passwordInput)) {
//        return "Password not valid, must be minimum 8 characters, at least one letter and one number";
//    }
    if ($passwordInput != $re_passwordInput) {
        return "Password does not match";
    }

    return "valid";
}