<?php
require "db.php";

if (isset($_POST['username']) && $_POST['password']) {

    mysqli_set_charset($conn, "utf8");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username. "' and password = '" . $password. "'");
    $validInput = validateLoginInput($username, $password);
    if ($validInput != "valid") {
        $error_message = $validInput;
    }
    else {
        if(!empty($result)){
            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                $msg_alert = urlencode("Login Success");
                header("Location: index.php?alert={$msg_alert}");
            }
        }
        $error_message = "Incorrect Username or Password!!!";
    }
}

function validateLoginInput($usernameInput, $passwordInput) {
    $usernameRegex = "/^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z\d._]+(?<![_.])$/";
    $passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
//    if (!preg_match($usernameRegex, $usernameInput)) {
//        return "Username not valid, must be 8-20 characters long, special character allow";
//    }
//    if (!preg_match($passwordRegex, $passwordInput)) {
//        return "Password not valid, must be minimum 8 characters, at least one letter and one number";
//    }

    return "valid";
}