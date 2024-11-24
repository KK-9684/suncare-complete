<?php get_header();?>
<main class="top-page">
    <section class="top-main">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.svg" alt="東洋ウェルフェア" loading="lazy"
            class="top-img">
        <h1 class="top-description">
            人生を共にデザインし、<br>
            東洋ウェルフェアに関わる全ての人に<br>
            圧倒的な感動と新たな彩をお届けします。
        </h1>
    </section>
    <section class="assisted-living-facility top-section-wrapper">
        <div class="top-section-title">
            <h4>ASSISTED LIVING FACILITY</h4>
            <h5>有料老人ホーム</h5>
        </div>
        <p class="font13 my-4">
            個人の時間は尊重しつつ、きめ細やかな個別ケアを心がけています。<br>
            そして、日常の健康管理から急病の時まで、安心して暮らせるプライベートルームをご提供させていただきます。
        </p>
        <a href="<?php echo esc_url( home_url() ); ?>/san-care/">
            <div class="top-section-viewer">
                <?php
                    $assisted = get_field('assisted-living-facility', 'option');
                    if ($assisted) {
                        foreach ($assisted as $image) {
                            if (isset($image['url'])) {
                                echo "<img src='" . esc_url($image['url']) . "' alt='assisted' class='top-section-img' loading='lazy'>";
                            }
                        }
                    }
                ?>
            </div>
        </a>
        <div class="top-section-main-addresss font18 mt-4">介護付有料老人ホーム サン・ケア レジデンス </div>
        <div class="font13 mt-2">愛知県岡崎市伝馬通1丁目78番地</div>
    </section>
    <section class="group-home top-section-wrapper">
        <div class="top-section-title">
            <h4>GROUPHOME</h4>
            <h5>グループホーム</h5>
        </div>
        <p class="font13 my-4">
            共同生活を送りながら、いつまでも自分らしい暮らしが続けられるようお手伝いをいたします。
        </p>
        <div class="top-section-viewer special">
            <?php $groupHome = get_field('group-home', 'option'); ?>
            <a href="<?php echo esc_url( home_url() ); ?>/grouphome-fukuoka/">
                <?php if (!empty($groupHome[0])): ?>
                <img src="<?php echo esc_url($groupHome[0]['url']); ?>" alt="group-home" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">グループホーム燦 ふくおか</div>
                <div class="font13 mt-2">愛知県岡崎市福岡町字通長36番地</div>
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/grouphome-mutsumi/">
                <?php if (!empty($groupHome[1])): ?>
                <img src="<?php echo esc_url($groupHome[1]['url']); ?>" alt="group-home" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">グループホーム燦 むつみ</div>
                <div class="font13 mt-2">愛知県岡崎市赤渋町寺前19番地1</div>
            </a>
        </div>
    </section>
    <section class="day-care-service top-section-wrapper">
        <div class="top-section-title">
            <h4>DAY CARE SERVICE</h4>
            <h5>デイサービス</h5>
        </div>
        <p class="font13 my-4">
            デイサービスに通えることを誇りに思えるよう、圧倒的な感動と新しい景色を創り続けます。
        </p>
        <h5 class="mt-4 mb-3"><span class="color-d-orange font18"> ■認知症対応型通所介護</span></h5>
        <div class="top-section-viewer special">
            <?php $dayCareService = get_field('day-care-service', 'option'); ?>
            <a href="<?php echo esc_url( home_url() ); ?>/dayservice-azukizaka/">
                <?php if (!empty($dayCareService[0])): ?>
                <img src="<?php echo esc_url($dayCareService[0]['url']); ?>" alt="day-care-service" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">デイサービスセンター燦 あずき坂</div>
                <div class="font13 mt-2">愛知県岡崎市羽根町小豆坂87番地</div>
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/dayservice-umezono/">
                <?php if (!empty($dayCareService[1])): ?>
                <img src="<?php echo esc_url($dayCareService[1]['url']); ?>" alt="day-care-service" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">デイサービスセンター燦 うめぞの</div>
                <div class="font13 mt-2">愛知県岡崎市六供町2丁目3-2</div>
            </a>
        </div>
        <h5 class="mt-5 mb-3"><span class="color-d-orange font18"> ■通所介護</span></h5>
        <div class="top-section-viewer">
            <a href="<?php echo esc_url( home_url() ); ?>/dayservice-tenma/">
                <?php if (!empty($dayCareService[2])): ?>
                <img src="<?php echo esc_url($dayCareService[2]['url']); ?>" alt="day-care-service" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">デイサービスセンター燦 てんま</div>
                <div class="font13 mt-2">愛知県岡崎市伝馬通1丁目78番地（サンケアレジデンス内）</div>
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hakken/">
                <?php if (!empty($dayCareService[3])): ?>
                <img src="<?php echo esc_url($dayCareService[3]['url']); ?>" alt="day-care-service" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">デイサービスセンター燦 はっけん</div>
                <div class="font13 mt-2">愛知県安城市東端町八剱74番地2</div>
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hane/">
                <?php if (!empty($dayCareService[4])): ?>
                <img src="<?php echo esc_url($dayCareService[4]['url']); ?>" alt="day-care-service" loading="lazy"
                    class="top-section-img">
                <?php endif; ?>
                <div class="top-section-main-addresss font18 mt-4">デイサービスセンター燦 はね</div>
                <div class="font13 mt-2">愛知県岡崎市羽根北町一丁目３番地２</div>
            </a>
        </div>
    </section>
    <div class="bg-color-l-gray container-fluid">
        <section class="care-plan top-section-wrapper">
            <div class="top-section-title">
                <h4>CARE PLAN</h4>
                <h5>サン・ケア プランセンター</h5>
            </div>
            <p class="font13 my-4">
                サン・ケアプランセンターでは、介護保険についての説明や要介護認定を受けるための申請・手続きのお手伝い、認定を受けられた方へのケアプランの作成をしております。<br>
                小さな疑問から難しい問題でも、介護支援専門員（ケアマネジャー）にお気軽にご相談ください。地域包括支援センターや医師、市役所などと協力して解決に努めます。
            </p>
            <div class="top-section-viewer">
                <?php
                $care = get_field('care-plan', 'option');
                if ($care) {
                    foreach ($care as $image) {
                        if (isset($image['url'])) {
                            echo "<img src='" . esc_url($image['url']) . "' alt='care-plan' class='top-section-img' loading='lazy'>";
                        }
                    }
                }
            ?>
            </div>
            <div class="mt-5 pt-4 text-center">
                <div class="font15 mb-2">些細な事でもお気軽にご相談下さい。</div>
                <div class="top-section-phone color-d-green mb-1 me-4 pe-2">
                    <i class="fa fa-phone font25"></i>
                    <span class="font32 bold">0564-22-8277</span>
                </div>
                <div class="font15 mb-3">受付時間 8:45~17:45</div>
                <div class="font12">所在地:〒444-0038 愛知県岡崎市伝馬通1丁目78番地（サン・ケア レジデンス内）</div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>