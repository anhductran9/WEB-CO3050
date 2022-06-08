<?php
require "php_preprocess.php";
require "db.php";
?>
<?php //if (isset($_SESSION['role']) == "mod") {?>
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
    <title> GAME | RENGLISH</title>
</head>

<body>

    <div class="all">
        <!-- header start -->
        <?php require "header.php" ?>
        <!-- header end -->
        <div class="single single_game" style="margin-left: 234px; margin-right: 234px;">
            <div class="panel_wrap">
                <?php require "component/tests.php" ?>
            </div>
        </div>

        <!-- header start -->
        <?php require "footer.php" ?>
        <!-- header end -->

    </div>
    <div class="toggle sp">
        <div><span class="tg_1"></span><span class="tg_2"></span><span class="tg_3"></span></div>
    </div>
    <div class="sp spnav">
        <ul>
            <li><a class="p" href="index.php">HOME</a></li>
            <li><a class="p" href="news.html">NEWS</a></li>
            <li><a class="p" href="game.html">TEST</a></li>
            <li><a class="p" href="profile.html">PROFILE</a></li>
            <li><a class="p" href="https://hemingwayapp.com/">WRITING</a></li>
            <li><a class="p" href="https://learnenglish.britishcouncil.org/business-english/business-magazine">READING</a></li>
            <li><a class="p" href="https://www.free4talk.com/">SPEAKING</a></li>
            <li><a class="p" href="https://www.esl-lab.com/">LISTENING</a></li>
            <li><a class="p" href="login.php">LOGIN</a></li>
            <li><a class="p" href="contact.html">CONTACT</a></li>
            <li class="spnav_sns">
                <ul>
                    <li><a target="_blank" href="https://www.youtube.com/"><img
                                src="img/white_youtube.png"
                                alt="Youtube" width="22"></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><img
                                src="img/white_twitter.png"
                                alt="Twitter" width="21"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/"><img
                                src="img/white_instagram.png"
                                alt="Instagram" width="17"></a></li>
                    <li><a target="_blank" href="https://www.tiktok.com/"><img
                                src="img/white_tiktok.png"
                                alt="Tiktok" width="20"></a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>

<?php //} ?>