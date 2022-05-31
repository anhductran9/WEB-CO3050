<?php
ob_start();
session_start();
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

    <title>RENGLISH</title>
</head>

<body>

    <div class="all">
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
                    <li><a class="p" href="contact.html"><?php if(isset($_SESSION['role'])) if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'mod') echo "CONTACT";?></a></li>
                    <li><a class="p" href="login.php"><?php
                            if(!isset($_SESSION['username'])) {
                                echo "LOGIN";
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
        </header> <!-- header end -->
        <div id="loadbody">
            <section id="">
                <div class="slider_ol">
                    <div class="slider_wrap">
                        <div class="slider_body">
                            <div class="slider"><a href="news.html" class="slider_links cover p"
                                    data-src="img/5251.jpg">
                                    <article>
                                        <div class="slider_info">
                                            <p class="slider_cat">NEWS</p><span></span>
                                            <h1>Catch up with latest English learning topics.</h1><span></span>
                                            <h2>Tips and Tricks to improve your English.</h2>
                                        </div>
                                    </article>
                                </a></div>
                            <div class="slider"><a href="game.html"
                                    class="slider_links cover p"
                                    data-src="https://i.pinimg.com/originals/35/f6/06/35f606daa5436e873489600496066700.jpg">
                                    <article>
                                        <div class="slider_info">
                                            <p class="slider_cat">TEST</p><span></span>
                                            <h1>Test your English knowledge.</h1><span></span>
                                            <h2>Available on mobile phone.</h2>
                                        </div>
                                    </article>
                                </a></div>
                            <div class="slider"><a href="index.php" class="slider_links cover p"
                                    data-src="https://daiphattoy.vn/upload/sanpham/large/meo-nhoi-bong-tron-de-thuong-018-1627710917-ef8c3f.jpg">
                                    <article>
                                        <div class="slider_info">
                                            <p class="slider_cat">MERCH</p><span></span>
                                            <h1>Super Ultra Mega Cute Cat</h1><span></span>
                                            <h2>Light Gray / Black / White / Orange</h2>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile_index">
                    <h1>NEWS</h1>
                    <a href="news.html">
                        <img class="img_index" src="img/5251.jpg" alt="">
                    </a>
                    <h1>TEST</h1>
                    <a href="game.html">
                        <img class="img_index" src="https://i.pinimg.com/originals/35/f6/06/35f606daa5436e873489600496066700.jpg" alt="">
                    </a>
                    <h1>MERCH</h1>
                    <a href="index.php">
                        <img class="img_index" src="https://daiphattoy.vn/upload/sanpham/large/meo-nhoi-bong-tron-de-thuong-018-1627710917-ef8c3f.jpg" alt="">
                    </a>
                </div>
                <br></br>
                <img src="img/Monster_scroll.png" alt="">
            </section>
        </div>
        <footer>
            <div class="footer">
                <div class="table">
                    <div class="td">
                        <address>&copy; 2022 Web Development / RENGLISH.</address>
                    </div>
                    <div class="td">
                        <ul class="sns">
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
                    </div>
                </div>
            </div>
        </footer>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- js -->
    <script src="common.js"></script>
    <script>
        slider = $('.slider_body').bxSlider();
        slider.reloadSlider({
            auto:true,
            pause:5000,
            speed:600,
            slideWidth: 1050,
            minSlides: 3,
            maxSlides: 3,
            useCSS:false,
            moveSlides: 1,
            slideMargin: 80,
            pager:false,
            onSliderLoad:function(){
                var current = slider.getCurrentSlide();
                $('.slider_body').find('.slider').removeClass('active');
                $('.slider_body').find('.slider').eq(current + 3).addClass('active');
                $('.slider_body').css({'margin-left':1130});
            },
            onSlideBefore:function(){
                var current = slider.getCurrentSlide();
                $('.slider_body').find('.slider').removeClass('active');
                $('.slider_body').find('.slider').eq(current + 3).addClass('active');
                $('.slider_body').css({'margin-left':1130});
            }
        });
    </script>
</body>
</html>