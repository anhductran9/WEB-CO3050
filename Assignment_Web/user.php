<?php
require "php_preprocess.php";
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , minimum-scale=1, maximum-scale=1">
    <meta http-equiv="content-language" content="ja">
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex,follow" />
    <!-- css -->
    <link rel="stylesheet" href="styles.css">
    <!-- Google Fonts and Plugins -->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,600,600italic|Bitter:400,400italic' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- js -->
    <script src="common.js"></script>
    <title> ACCOUNT | RENGLISH</title>
</head>

<body>
    <?php
    $user_query = null;
    if (isset($_SESSION['username'])) {
        $user_query = mysqli_query($conn, "SELECT username, full_name, role FROM users WHERE username = '{$_SESSION['username']}'");
        $user_query = mysqli_fetch_array($user_query);

        $user_test_query = mysqli_query($conn, "SELECT * FROM userhistories WHERE username = '{$_SESSION['username']}'");
        $user_test_history = [];
        while ($row = $user_test_query->fetch_assoc()) {
            $user_test_history[] = $row;
        }
        $user_test_history = json_encode($user_test_history);
            echo "<script> var userTestHistory = $user_test_history </script>";
            echo "<script> console.log(userTestHistory) </script>";
    }
    else {
        $msg = urlencode("Please login to view your PROFILE!!!");
        header("Location: login.php?msg={$msg}");
    }
    ?>
    <div class="all">
        <!-- header start -->
        <?php require "header.php"?>
        <!-- header end -->
        <div id="loadbody">
            <section>
                <div class="single single_news">
                    <div class="single_body">
                        <div id="tt-pageContent" class="show_unavailable_variants">
                            <div class="container-indent">
                                <div class="user-container">
                                    <h1 class="tt-title-subpages">ACCOUNT</h1>
                                    <div class="tt-layout">
                                        <h2 class="tt-title-border">MY ACCOUNT</h2>
                                        <div class="tt-wrapper">
                                            <h3 class="tt-title">ACCOUNT DETAILS</h3>
                                            <div class="tt-table-responsive">
                                                <table class="tt-table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Username:</td>
                                                        <td> <?php echo $user_query['username'] ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fullname:</td>
                                                        <td> <?php echo $user_query['full_name'] ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ROLE:</td>
                                                        <td> <?php echo strtoupper($user_query['role']) ?> </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tt-wrapper">
                                            <h3 class="tt-title">TEST HISTORY</h3>
                                            <div class="tt-table-responsive">
                                                <table class="tt-table">
                                                    <tbody id = "user_test_history"></tbody>
                                                </table>
                                                <script>
                                                    let userElement = document.getElementById('user_test_history');
                                                    userTestHistory.forEach((eachTest) => {
                                                        let trE = document.createElement('tr');
                                                        let tdTestID = document.createElement('td');
                                                        let tdTestScore = document.createElement('td');
                                                        let tdSubmitTime = document.createElement('td');
                                                        tdTestID.textContent = 'Test ID: ' + eachTest.test_id;
                                                        tdTestScore.textContent = 'Score: ' + eachTest.test_score;
                                                        tdSubmitTime.textContent = 'Submit Time: ' + eachTest.submit_time;
                                                        trE.appendChild(tdTestID);
                                                        trE.appendChild(tdTestScore);
                                                        trE.appendChild(tdSubmitTime);

                                                        userElement.appendChild(trE);
                                                        trE.appendChild(tdTestID);
                                                        trE.appendChild(tdTestScore);
                                                        trE.appendChild(tdSubmitTime);
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br></br>
                        <img src="img/Monster_scroll.png" alt="">
                </div>
            </section>
        </div>
        <?php require "footer.php" ?>
</body>
</html>