<?php

    include("locker.php");

        function getVisIpAddr() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            }
            else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else {
                return $_SERVER['REMOTE_ADDR'];
            }
        }
        $ip = getVisIPAddr();
        $ipdat = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip=" . $ip));
        $countrycode = $ipdat->geoplugin_countryCode;
        $countryname = $ipdat->geoplugin_countryName;

        if(
            $countrycode == "MA" || 
            $countrycode == "DZ" || 
            $countrycode == "TN" || 
            $countrycode == "LY" || 
            $countrycode == "EG" || 
            $countrycode == "TN" || 
            $countrycode == "SA" || 
            $countrycode == "IQ" || 
            $countrycode == "SY" || 
            $countrycode == "OM" || 
            $countrycode == "QA" || 
            $countrycode == "AE" || 
            $countrycode == "BH" || 
            $countrycode == "KW" || 
            $countrycode == "YE"
        ){
            include("assets/php/lang/ar.php");
        } elseif (
            $countrycode == "DE"
        ) {
            include("assets/php/lang/de.php");
        } elseif (
            $countrycode == "ES" || 
            $countrycode == "MX" || 
            $countrycode == "AR" || 
            $countrycode == "CO" || 
            $countrycode == "BO"
        ) {
            include("assets/php/lang/es.php");
        } elseif (
            $countrycode == "FR" || 
            $countrycode == "CH"
        ) {
            include("assets/php/lang/fr.php");
        } else{
            include("assets/php/lang/en.php");
        }
?>
<!DOCTYPE html>
<html lang="<?php echo $lang1; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang2; ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsev.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <script src="https://kit.fontawesome.com/d92c7b3fa3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- START LOCKER -->
    <script type="text/javascript">
        var CPABUILDSETTINGS={"it":3086857,"key":"370be"};
    </script>
    <script src="https://dyodrs1kxvg6o.cloudfront.net/013113e.js"></script>
    <!-- END LOCKER -->
</head>
<body class="<?php echo $lang3; ?>"><!--arabic-->

    <header>
        <div class="header_container">
            <a href="" class="logo"><img src="assets/img/pc_logo_white.svg" alt=""></a>

            <ul class="nav">
                <li>
                    <a href="javascript:void(0)"><?php echo $lang4; ?></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><?php echo $lang5; ?></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><?php echo $lang6; ?></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><?php echo $lang7; ?></a>
                </li>
            </ul>
            <div class="top_down_button">
                <button><?php echo $lang8; ?> <i class="fa-solid fa-angle-down"></i></button>
                <!-- PC -->
                <div class="top_down_devices top_down_devices_pc">
                    <a href="javascript:void(0)"  onclick="pclocker();">
                        <img src="assets/img/apple.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/google.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/ps5.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/xbox.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/nintendo.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/windows.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="main_section">
        <div class="container">
            <div class="main_down_container">
                <div class="main_down_brand">
                    <img src="assets/img/pc_logo.svg" alt="">
                </div>
                <h1 class="main_title">
                    <span class="main_pc_title"><?php echo $lang9; ?></span>
                </h1>
                <p class="main_paragraph"><?php echo $lang11; ?></p>

                <!-- PC -->
                <div class="main_devices main_devices_pc">
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/apple.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/google.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/ps5.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/xbox.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/nintendo.png" alt="">
                    </a>
                    <a href="javascript:void(0)" onclick="pclocker();">
                        <img src="assets/img/windows.png" alt="">
                    </a>
                </div>

                <div class="phone_video">
                    <img class="phone_image" src="assets/img/phone.png" alt="">
                    <video class="phone_video_player" autoplay muted loop>
                        <source src="https://media.contentapi.ea.com/content/dam/ea/fifa-mobile/season-2021/videos/2021/12/fmobile-season-6-hero-medium-16x9-s-xs.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <img class="left_bar" src="assets/img/left_bar.png" alt="">
    </section>
    <div class="empty"></div>
    <section class="middle_download">
        <div class="middle_download_container">
            <span class="middle_download_text"><?php echo $lang12; ?></span>
            <div class="middle_download_devices">
                <a href="javascript:void(0)" onclick="pclocker();">
                    <img src="assets/img/apple.png" alt="">
                </a>
                <a href="javascript:void(0)" onclick="pclocker();">
                    <img src="assets/img/google.png" alt="">
                </a>
            </div>
        </div>
    </section>
    
    <footer>
        <p><?php echo $lang13; ?></p>
    </footer>

    <div class="loading_container hidden" id="loading_container">
        <div class="spinner">
            <div class="spinner_container"></div>
        </div>
        <p><?php echo $lang14; ?></p>
    </div>

    <script>
        function pclocker(){
                $("#loading_container").removeClass("hidden");
                setTimeout(function() { 
                    CPABuildLock();
                }, 2000);
            }
    </script>
</body>
</html>