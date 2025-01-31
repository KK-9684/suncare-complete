<!DOCTYPE html>
<html lang="ja" class="html">

<head>
    <title>東洋ウェルフェア株式会社</title>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <meta name="keywords" content="東洋ウェルフェア株式会社, " />
    <meta name="description" content="" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animation.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php $current_path = esc_url($_SERVER['REQUEST_URI']); ?>
    <header class="header">
        <div class="d-flex align-items-center justify-content-start flex-wrap">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="東洋ウェルフェア株式会社"
                    class="log-img me-4" />
            </a>
            <div class="d-flex ms-2 mt-1">
                <div class="menu-text-item-wrapper">
                    <div class="menu-text-item">有料老人ホーム</div>
                    <div class="menu-text-item-menu hide">
                        <a href="<?php echo esc_url( home_url() ); ?>/san-care/" class="menu-text-item-menu-item">
                            <div>介護付有料老人ホーム<br>サン・ケア レジデンス</div>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="menu-text-item-wrapper">
                    <div class="menu-text-item">グループホーム</div>
                    <div class="menu-text-item-menu hide">
                        <a href="<?php echo esc_url( home_url() ); ?>/grouphome-fukuoka/"
                            class="menu-text-item-menu-item">
                            <div>グループホーム燦 ふくおか</div>
                            <span>→</span>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>/grouphome-mutsumi/"
                            class="menu-text-item-menu-item">
                            <div>グループホーム燦 むつみ</div>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="menu-text-item-wrapper">
                    <div class="menu-text-item">デイサービス</div>
                    <div class="menu-text-item-menu hide">
                        <a href="<?php echo esc_url( home_url() ); ?>/dayservice-azukizaka/"
                            class="menu-text-item-menu-item">
                            <div>デイサービスセンター燦 あずき坂</div>
                            <span>→</span>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>/dayservice-umezono/"
                            class="menu-text-item-menu-item">
                            <div>デイサービスセンター燦 うめぞの</div>
                            <span>→</span>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>/dayservice-tenma/"
                            class="menu-text-item-menu-item">
                            <div>デイサービスセンター燦 てんま</div>
                            <span>→</span>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hakken/"
                            class="menu-text-item-menu-item">
                            <div>デイサービスセンター燦 はっけん</div>
                            <span>→</span>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hane/"
                            class="menu-text-item-menu-item">
                            <div>デイサービスセンター燦 はね</div>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url() ); ?>/company/" class="menu-text-item">会社概要</a>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap">
            <div class="d-flex align-items-baseline mt-1 mb-1">
                <i class="fa fa-phone font15"></i>
                <span class="font20 font-Pr6N-M mx-1">0564-22-7575</span>
                <span class="font12">年中無休（9:00~18:00）</span>
            </div>
            <div class="d-flex ms-3">
                <a href="<?php echo esc_url( home_url() ); ?>/form-request/"
                    class="menu-button-item bg-color-l-blue">資料請求</a>
                <a href="<?php echo esc_url( home_url() ); ?>/form-visit/"
                    class="menu-button-item bg-color-d-red">見学予約</a>
                <a href="<?php echo esc_url( home_url() ); ?>/form-contact/"
                    class="menu-button-item bg-color-d-green">お問い合わせ</a>
                <a href="<?php echo esc_url( home_url() ); ?>/recruit/"
                    class="menu-button-item bg-color-d-blue">採用情報</a>
            </div>
        </div>
    </header>
    <header class="header-sp">
        <div class="d-flex align-items-center">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="東洋ウェルフェア株式会社"
                    class="log-img" />
            </a>
        </div>
        <div class="d-flex">
            <div class="d-flex align-items-baseline mt-3 me-3 header-sp-phone font-Pr6N-M">
                <i class="fa fa-phone font16"></i>
                <span class="font20 mx-1">0564-22-7575</span>
                <span class="font12">年中無休（9:00~18:00）</span>
            </div>
            <div class="header-sp-hamburger">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="hamburger-icon" />
            </div>
        </div>
    </header>
    <div class="ham-menu hide">
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">TOP</a>
        <div>
            <div class="ham-main-menu-item bg-color-d-orange color-white">
                <span>有料老人ホーム</span>
                <span class="ham-main-menu-icon">＋</span>
            </div>
            <div class="ham-sub-menu-wrapper hide">
                <a href="<?php echo esc_url( home_url() ); ?>/san-care/" class="ham-sub-menu-item color-d-orange">
                    <span>介護付有料老人ホーム<br>サン・ケア レジデンス</span>
                    <span>→</span>
                </a>
            </div>
        </div>
        <div>
            <div class="ham-main-menu-item bg-color-d-orange color-white">
                <span>グループホーム</span>
                <span class="ham-main-menu-icon">＋</span>
            </div>
            <div class="ham-sub-menu-wrapper hide">
                <a href="<?php echo esc_url( home_url() ); ?>/grouphome-fukuoka/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>グループホーム燦 ふくおか</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/grouphome-mutsumi/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>グループホーム燦 むつみ</span>
                    <span>→</span>
                </a>
            </div>
        </div>
        <div>
            <div class="ham-main-menu-item bg-color-d-orange color-white">
                <span>デイサービス</span>
                <span class="ham-main-menu-icon">＋</span>
            </div>
            <div class="ham-sub-menu-wrapper hide">
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-azukizaka/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 あずき坂</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-umezono/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 うめぞの</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-tenma/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 てんま</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hakken/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 はっけん</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hane/"
                    class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 はね</span>
                    <span>→</span>
                </a>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url() ); ?>/company/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">会社概要</a>
        <a href="<?php echo esc_url( home_url() ); ?>/form-request/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">資料請求</a>
        <a href="<?php echo esc_url( home_url() ); ?>/form-visit/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">見学予約</a>
        <a href="<?php echo esc_url( home_url() ); ?>/form-contact/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">お問い合わせ</a>
        <a href="<?php echo esc_url( home_url() ); ?>/recruit/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">採用情報</a>
    </div>
    <div class="footer-fixed-buttons">
        <div class=" footer-scroll-top-btn-wrapper">
            <button id="scrollToTop" class="footer-scroll-top-btn font20" style="display: none;">
                <i class="fa-solid fa-chevron-up"></i>
            </button>
        </div>
        <a href="<?php 
                    $current_path = esc_url($_SERVER['REQUEST_URI']);
                    if (strpos($current_path, 'grouphome-fukuoka')) {
                        echo 'https://www.instagram.com/ghsanhukuoka/';
                    } else if (strpos($current_path, 'grouphome-mutsumi')){
                        echo 'https://www.instagram.com/ghsanmutsumi/';
                    } else if (strpos($current_path, 'dayservice-azukizaka')){
                        echo '#';
                    } else if (strpos($current_path, 'dayservice-umezono')){
                        echo 'https://www.instagram.com/san.umezono/';
                    } else if (strpos($current_path, 'dayservice-tenma')){
                        echo 'https://www.instagram.com/ds3tenma/';
                    } else if (strpos($current_path, 'dayservice-hakken')){
                        echo 'https://www.instagram.com/dayservicehakken/';
                    } else if (strpos($current_path, 'dayservice-hane')){
                        echo 'https://www.instagram.com/ds3hane/';
                    } else {
                        echo 'https://www.instagram.com/toyo.welfare/p/C3p_BTaBx8V/?locale=es_ES%2F&img_index=1';
                    }
                ?>" target="_blank"
            class="<?php if(strpos($current_path, 'recruit') || strpos($current_path, 'form-')) {echo 'hide';} else {echo '';} ?>">
            <button class="footer-fixed-button 
                <?php
                    $current_path = esc_url($_SERVER['REQUEST_URI']);
                    if (strpos($current_path, 'grouphome')) {
                        echo 'bg-color-m-blue';
                    } else if (strpos($current_path, 'dayservice')) {
                        echo 'bg-color-l-red';
                    } else if (strpos($current_path, 'san-care') || strpos($current_path, 'expenses')) {
                        echo 'bg-color-d-blue';
                    } else {
                        echo 'bg-color-d-orange';
                    }
                ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.svg"
                    alt="instagram-icon" />
                <span class="color-l-gray font16 ms-2">Instagram</span>
            </button>
        </a>
        <div style="margin-top:6px"></div>
        <?php $file = get_field('file', 'option');?>
        <a href="<?php echo $file['url'] ?>" target="_blank"
            class="<?php if(strpos($current_path, 'recruit') || strpos($current_path, 'form-')) {echo 'hide';} else {echo '';} ?>">
            <button class="footer-fixed-button 
                <?php 
                    $current_path = esc_url($_SERVER['REQUEST_URI']);
                    if (strpos($current_path, 'grouphome')) {
                        echo 'bg-color-m-blue';
                    } else if (strpos($current_path, 'dayservice')){
                        echo 'bg-color-l-red';
                    } else if (strpos($current_path, 'san-care') || strpos($current_path, 'expenses')) {
                        echo 'bg-color-d-blue';
                    } else {
                        echo 'bg-color-d-orange';
                    }
                ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bell-icon.svg" alt="instagram-icon" />
                <span class="color-l-gray font16 ms-2 me-2">お知らせ</span>
            </button>
        </a>
    </div>
    <?php wp_head(); ?>