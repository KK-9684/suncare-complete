<!DOCTYPE html>
<html lang="ja" class="html">

<head>
    <title>東洋ウェルフェア株式会社</title>
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
    <header class="header">
        <div class="d-flex align-items-center justify-content-start flex-wrap">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/header-log.svg" alt="東洋ウェルフェア株式会社"
                    class="log-img me-4" />
            </a>
            <div class="d-flex ms-2 mt-1">
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item bold"><span>有料老人ホーム</span></a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item bold"><span>グループホーム</span></a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item bold"><span>デイサービス</span></a>
                <a href="<?php echo esc_url( home_url() ); ?>/introduce/"
                    class="menu-text-item bold"><span>会社概要</span></a>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap">
            <div class="d-flex align-items-baseline mt-3 mb-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.svg" alt="phone"
                    class="phone-icon me-1" />
                <span class="font20 bold me-1" style="font-family:'Kaisei Haruno Umi'">0564-22-7575</span>
                <span class="font12 bold">年中無休（9:00~18:00）</span>
            </div>
            <div class="d-flex ms-3">
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-button-item bg-color-l-blue">資料請求</a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-button-item bg-color-d-red">見学予約</a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-button-item bg-color-d-green">お問い合わせ</a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="menu-button-item bg-color-d-blue">採用情報</a>
            </div>
        </div>
    </header>
    <header class="header-sp">
        <div class="d-flex align-items-center">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/header-log.svg" alt="東洋ウェルフェア株式会社"
                    class="log-img" />
            </a>
        </div>
        <div class="d-flex">
            <div class="d-flex align-items-baseline mt-3 me-3 header-sp-phone">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.svg" alt="phone"
                    class="phone-icon me-1" />
                <span class="font20 bold me-1" style="font-family:'Kaisei Haruno Umi'">0564-22-7575</span>
                <span class="font12 bold">年中無休（9:00~18:00）</span>
            </div>
            <div class="header-sp-hamburger">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="hamburger" />
            </div>
        </div>
    </header>
    <div style="width:300px" class="ham-menu bold hide">
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">TOP</a>
        <div>
            <div class="ham-main-menu-item bg-color-d-orange color-white">
                <span>有料老人ホーム</span>
                <span class="ham-main-menu-icon">＋</span>
            </div>
            <div class="ham-sub-menu-wrapper hide">
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
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
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>グループホーム燦 ふくおか</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
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
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 あずき坂</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 うめぞの</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 てんま</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 はっけん</span>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>" class="ham-sub-menu-item color-d-orange">
                    <span>デイサービスセンター燦 はね</span>
                    <span>→</span>
                </a>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url() ); ?>/introduce/"
            class="ham-main-menu-item-only bg-color-d-orange color-white">会社概要</a>
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">資料請求</a>
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">見学予約</a>
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">お問い合わせ</a>
        <a href="<?php echo esc_url( home_url() ); ?>"
            class="ham-main-menu-item-only bg-color-d-orange color-white">採用情報</a>
    </div>
    <?php wp_head(); ?>