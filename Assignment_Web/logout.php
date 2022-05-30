<?php
ob_start();
session_start();
echo $_SESSION['username'];
if (isset($_SESSION['username'])) {
    echo "Logged out";
    session_destroy();
    unset($_SESSION['username']);
}
else {
    echo "Not logged in";
}
header("Location: index.php");