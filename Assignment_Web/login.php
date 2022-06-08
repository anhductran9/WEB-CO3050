<?php
    require 'php_preprocess.php';
    require 'login_process.php';
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
    <title>LOGIN | RENGLISH</title>
</head>

<body>

    <div class="all">
        <!-- header start -->
        <?php require "header.php" ?>
        <!-- header end -->
        <div id="loadbody">
            <section>
                <div class="single single_news">
                    <header>
                        <div class="single_header">
                            <h1><img src="img/login.png"
                                    alt="NEWS" width="144"></h1>
                        </div>
                    </header>
                    <div class="single_body single_narrow">
                        <div class="single_contact_section">
                            <div class="single_body_contact">
                                <div>
                                    <form action="login.php" method="post">
                                        <span><?php if (isset($error_message)) echo $error_message ?></span>
                                        <span><?php if (isset($_GET['msg'])) echo $_GET['msg'] ?></span>
                                        </label><label class="table contact_line">
                                            <div class="td contact_h">USERNAME<span>*</span></div>
                                            <div class="td contact_txt"><span>
                                                <input type="text"
                                                        name="username" value="" size="40" required/>
                                            </span></div>
                                        </label><label class="table contact_line">
                                            <div class="td contact_h">PASSWORD<span>*</span></div>
                                            <div class="td contact_txt"><span><input type="password"
                                                        name="password" value="" size="40" required
                                                        /></span></div>
                                        </label>
                                        <input type="submit" value="LOGIN" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 style="text-align: center;">Does not have an account? Register <a href="register.php">HERE</a></h3>
            </section>
        </div>
        <br></br>
        <br></br>
        <br></br>
            <img src="img/Monster_scroll.png" alt="">
        <!-- footer start -->
        <?php require "footer.php"?>
        <!-- footer end -->
</body>
</html>
