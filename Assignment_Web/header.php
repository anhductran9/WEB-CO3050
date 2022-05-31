<!-- header start -->
<header>
    <div class="header">
        <ul class="nav_left nav cf">
            <li><a class="p" href="news.html">NEWS</a></li>
            <li><a class="p" href="game.html">TEST</a></li>
            <li><a class="p" href="profile.html">PROFILE</a></li>
        </ul>
        <div class="rand_wrap_fix">
            <a href="index.php"
               class="p rand_body rand_body_show rand_body_float"><span class="rand_img"><img
                            src="img/Monsters1.png"
                            alt="" width="83" class="image"></span>
            </a>
        </div>
        <div class="rand_wrap_bk"></div>
        <div class="header_logo">
            <h1 class="logo"><a class="p" href="index.php"></a></h1>
        </div>
        <ul class="nav_right nav cf">
            <li><a class="p" href="logout.php"><?php
                    if(isset($_SESSION['username'])) {
                        echo "LOGOUT";
                    }
                    ?></a></li>
            <li><a class="p" href="contact.html">CONTACT</a></li>
            <li><a class="p" href="login.php"><?php
                    if(!isset($_SESSION['username'])) {
                        echo "LOGIN";
                    }
                    ?></a></li>
            <li><a class="p" href="register.php"><?php
                    if(!isset($_SESSION['username'])) {
                        echo "REGISTER";
                    }
                    ?></a></li>
            <li><a class="p" href="https://hemingwayapp.com/">WRITING</a></li>
            <li><a class="p" href="https://learnenglish.britishcouncil.org/business-english/business-magazine">READING</a></li>
            <li><a class="p" href="https://www.free4talk.com/">SPEAKING</a></li>
            <li><a class="p" href="https://www.esl-lab.com/">LISTENING</a></li>
        </ul>
        <div class="sns_body">
            <ul class="sns">
                <li><a target="_blank" href="https://www.youtube.com/"><img
                                src="img/youtube_black.png"
                                alt="Youtube" width="22"></a></li>
                <li><a target="_blank" href="https://twitter.com/"><img
                                src="img/twitter_black.png"
                                alt="Twitter" width="21"></a></li>
                <li><a target="_blank" href="https://www.instagram.com/"><img
                                src="img/instagram_black.png"
                                alt="Instagram" width="17"></a></li>
                <li><a target="_blank" href="https://www.tiktok.com/"><img
                                src="img/tiktok_black.png"
                                alt="Tiktok" width="20"></a></li>
            </ul>
        </div>
    </div>
</header>

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
<!-- header end -->