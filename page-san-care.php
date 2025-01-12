<?php get_header();?>
<?php $image = get_field('sancare-images', 'option'); ?>
<?php $floor = get_field('sancare-floor-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-d-blue">
        <h6 class="mb-3">介護付き有料老人ホーム</h6>
        <h1>サン・ケアレジデンス</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N"> 笑顔あふれる幸せな「わが家」が、<br>ここにあります。</h2>
                <p class="font16 pt-4 mt-1">
                    寄り添って一緒に笑顔になる。<br>
                    「どうしたら笑顔になっていただけるだろうか」、<br>
                    「どうすることがこの方にとって最善だろうか」。<br>
                    スタッフは常にこうした問いを心に抱き、ケアに取り組んでいます。できないときはそっと寄り添い、ゆっくりと待ち、できたときには自分のことのように喜びます。私たちは、皆様と喜びを分かち合いながら、日々を共に生きています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-l-gray container-fluid-8">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="48"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper pt-0">
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-Pr6N font31">01.住空間 </div>
                <div class="font-Pr6N font16">LIVING</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">全室バルコニー付き、自由なライフスタイルを叶えるゆとりの住空間が魅力です。</h3>
                <p class="font14 pt-2">
                    広々としたバスルームやトイレをはじめ、居室の各所にバリアフリー設計を採用しています。また、床暖房や電磁調理器、緊急コールシステムなども完備し、年齢を重ねても快適で安心してお過ごしいただける生活空間をご提供しています。
                </p>
                <button class="toggle-btn mt-3" id="floor-toggle">
                    <span>敷地配置図・間取り例</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up-right.svg"
                        alt="arrow-up-right-icon" class="arrow-up-right-icon" />
                </button>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">02.介護サービス</div>
                <div class="font-Pr6N font16">NURSING CARE SERVICE</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">寄り添って一緒に笑顔になる、<br>きめ細やかな個別ケアを心がけています。</h3>
                <p class="font14 pt-2">
                    プライベートな時間を尊重しながら、安心で安全なきめ細やかな個別ケアを心がけています。食事や入浴、排泄などのケアも、ご本人の意思を大切にし、丁寧に対応いたします。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="pt-3 service-btns">
            <p class="font20 font-Pr6N">安心しておくつろぎいただけるよう、様々な生活支援サービスも充実しています。</p>
            <div class="service-btns-wrapper">
                <div class="service-btn bg-color-d-blue">フロントサービス</div>
                <div class="service-btn bg-color-d-blue">家事サービス</div>
                <div class="service-btn bg-color-d-blue">代行サービス</div>
                <div class="service-btn bg-color-d-blue">理美容サービス</div>
                <div class="service-btn bg-color-d-blue">季節の催しサービス</div>
                <div class="service-btn bg-color-d-blue">その他のサービス</div>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-Pr6N font31">03.医療・リハビリ</div>
                <div class="font-Pr6N font16">MEDICAL / REHABILITATION</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">生活機能の維持や向上を目指し、<br>健やかで楽しい毎日をサポートいたします。</h3>
                <p class="font14 pt-2">
                    毎日の健康状態を見守り、必要に応じてお薬の管理やリハビリをサポートします。看護師が常駐しており、医療機関との連携もスムーズです。定期的に医師による診療が行われるため、安心して日々をお過ごしいただけます。協力医療機関と連携し、定期健康診断や健康相談も実施し、入居者様一人ひとりに寄り添ったケアを提供しています。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">04.食事</div>
                <div class="font-Pr6N font16">MEAL</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">安全・安心の食材を吟味し、<br>こだわりの食事で健康を応援します。</h3>
                <p class="font14 pt-2">
                    私たちは美味しさはもちろん、毎日の食事が楽しみになるよう創意工夫を凝らしています。<br>
                    安全で信頼できる食材を厳選し、入居者様・利用者様の健康状態に合わせたお食事を提供いたします。えごまオイルを取り入れるなど、健康づくりをサポートしています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[5])): ?>
                <img src="<?php echo esc_url($image[5]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[6])): ?>
                <img src="<?php echo esc_url($image[6]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-Pr6N font31">05.終身入居の保証</div>
                <div class="font-Pr6N font16">LIFETIME RESIDENCY GUARANTEE</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">ご本人や家族の意向に沿い、最期まで尊厳を保っていただけるようサポートいたします。</h3>
                <p class="font14 pt-2">
                    当館は、お元気な方から医療を必要とされている方、お身体の不自由な方、認知症の方まで幅広く対応しています。日常の健康管理から緊急時の対応まで安心して過ごせる環境を整え、ご本人・ご家族希望に応じて看取りまでお世話させて頂きます。
                </p>
                <p class="pt-1 font12" style="border-top: 1px solid #9d9d9d">
                    ※入居者の言動が、他の入居者に精神的苦痛を与えたり、生命に危害を及ぼす恐れがあり、かつ入居者に対する通常の介護方法ではこれを防止する事ができない場合は、契約を解除し退所していただく事があります。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">06.アクティビティ</div>
                <div class="font-Pr6N font16">ACTIVITY</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">毎日を笑顔でお過ごしいただくために、<br>明日が待ち遠しくなる多彩な催しをご用意しています。</h3>
                <p class="font14 pt-2">
                    入居者様が日々の暮らしを楽しんでいただけるよう、七夕やクリスマスなど季節に合わせたイベントを開催しています。また、レクリエーションや体操など、楽しみながら参加できるプログラムも充実しており、参加はご本人の意志を尊重し、自由に選んでいただけるよう配慮しています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[8])): ?>
                <img src="<?php echo esc_url($image[8]['url']); ?>" alt="サン・ケアレジデンス" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-Pr6N font31">07.立地</div>
                <div class="font-Pr6N font16">LOCATION</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2 pc">岡崎の中心地。歴史と文化と自然に囲まれた、住み心地の良い住環境です。</h3>
                <h3 class="font-Pr6N font20 mt-4 mb-2 sp">岡崎の中心地。<br>歴史と文化と自然に囲まれた、<br>住み心地の良い住環境です。</h3>
                <p class="font14 pt-2">
                    愛知県岡崎市の中心部に位置する「サン・ケア レジデンス」は、都市部名古屋市へのアクセスが良く、周辺には岡崎城や大岡越前守陣屋跡、図書館交流プラザなどの歴史的建造物や文化施設などが充実。<br>
                    岡崎公園前を流れる乙川沿いは、緑豊かで春には桜が咲き誇るなど、歴史と文化と自然が融合した住み心地の良い住環境です。
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="sancare-section-wrapper">
        <div class="font28 font-Pr6N text-center">ACCESS</div>
        <div class="font20 font-Pr6N text-center pb-3">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1634.9816285798897!2d137.16678343828053!3d34.95752959148657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bd2f00591a5d%3A0x1d1a3d9b1de67082!2z44K144Oz44O744Kx44Ki44Os44K444OH44Oz44K5!5e0!3m2!1sja!2sjp!4v1733971523480!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            所在地：〒444-0038 愛知県岡崎市伝馬通1丁目78番地　
            <a href="https://www.google.com/maps/place/%E3%82%B5%E3%83%B3%E3%83%BB%E3%82%B1%E3%82%A2%E3%83%AC%E3%82%B8%E3%83%87%E3%83%B3%E3%82%B9/@34.9575296,137.1667834,18z/data=!3m1!4b1!4m6!3m5!1s0x6004bd2f00591a5d:0x1d1a3d9b1de67082!8m2!3d34.9575274!4d137.1680709!16s%2Fg%2F1v16q7ph?hl=ja&entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-l-gray container-fluid py-80">
        <section class="expenses-box">
            <div class="top-section-title">
                <h4 class="font28">EXPENSES</h4>
                <h5 class="font20">ご利用料金のご案内</h5>
            </div>
            <?php $example = get_field('例', 'option'); ?>
            <?php $comment = get_field('コメント', 'option'); ?>
            <p class="expenses-title font-Pr6N mt-5">
                <?php 
                    $entryExpenses = get_field_object('入居費用', 'option');
                    foreach ($entryExpenses['value'] as $row) {
                        if ($row['色'] == "black") {
                            echo "<span>" . $row['句'] . "</span>";
                        } else {
                            echo "<span class='color-d-red'>" . $row['句'] . "</span>";
                        }
                    }
                ?>
            </p>
            <p class="font16 mt-4 mb-1"><?php echo $example; ?></p>
            <?php
                $plans = get_field_object('プラン', 'option');
                foreach ($plans['value'] as $row) {
                    echo '<div class="plan-row pc font-SourceHanSansJP-M">';
                    echo '<div><a class="plan-title">'. $row['番号'] .'</a><span class="font22">'. $row['タイトル'] .'</span></div>';
                    echo '<div class="plan-price"><div><span class="color-d-red font32">'. $row['タイプ'] .'</span><span class="color-d-red font25">'. $row['単位'] .'</span><span class="font22 me-2">'. $row['テキスト'] .'</span></div><div><span class="color-d-red font25">'. $row['価格'] .'</span><span class="color-d-red font22">'. $row['価格単位'] .'</span><span class="font16">'. $row['税金'] .'</span></div></div>';
                    echo '</div>';
                }

                foreach ($plans['value'] as $row) {
                    echo '<div class="sp font-SourceHanSansJP-M">';
                    echo '<div class="plan-title">'. $row['番号'] .'</div>';
                    echo '<div><span class="font22 me-2">'. $row['タイトル'] .'</span><span class="color-d-red font32">'. $row['タイプ'] .'</span><span class="color-d-red font25">'. $row['単位'] .'</span></div>';
                    echo '<div><span class="font22 me-2">'. $row['テキスト'] .'</span><span class="color-d-red font25">'. $row['価格'] .'</span><span class="color-d-red font22">'. $row['価格単位'] .'</span><span class="font16">'. $row['税金'] .'</span></div>';
                    echo '</div>';
                }
            ?>
            <p class="font16"><?php echo $comment; ?></p>
            <div class="d-flex justify-content-center mt-40">
                <a href=" <?php echo esc_url( home_url() ); ?>/expenses/">
                    <div class="toggle-btn">
                        <span>料金表を見る</span>
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/arrow-up-right.svg"
                            alt="arrow-up-right-icon" class="arrow-up-right-icon" />
                    </div>
                </a>
            </div>
        </section>
    </div>
    <div class="sancare-section-wrapper">
        <div class="grid-two-column-2">
            <div>
                <p class="color-d-blue font18 font-Pr6N">■施設概要</p>
                <div class="font16">有料老人ホーム「サン・ケアレジデンス」</div>
                <p class="font25 font-Pr6N-M">
                    <i class="fa fa-phone font20"></i>
                    <span>0564-22-7575</span>
                </p>
                <?php if (!empty($image[9])): ?>
                <img src="<?php echo esc_url($image[9]['url']); ?>" alt="サン・ケアレジデンス" width="100%" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="color-d-blue font18 font-Pr6N mb-2">■施設概要</div>
                <div class="mb-5">
                    ●建物構造／鉄筋コンクリート造地上5階・地下1階建（土地・建物共自己所有）●敷地面積／1388.95㎡●建築面積／803.42㎡●延床面積／4243.67㎡（その内有料老人ホーム部分としての延床面積は2642.52㎡）●入居定員／50名●施設の類型／介護付有料老人ホーム（一般型特定施設入居者生活介護）●居住の権利形態／利用権方式●入居時の要件／自立、要支援、要介護●介護保険／愛知県指定介護保険特定施設、愛知県指定介護予防特定施設●介護居室区分／全室個室●介護にかかわる職員体制／2：1以上（要介護者2人に対し週37時間換算で介護職員1人以上）●介護保険の指定居宅サービスの種類／特定施設入居者生活介護・介護予防特定施設入居者生活介護のサービス
                </div>
                <div class="color-d-blue font18 font-Pr6N mb-2">■協力医療機関</div>
                <div class="mb-2">
                    ●内科／大原内科医院【週1回の往診、年1回の健康診断 （ご希望者に限り年２回目の健康診断も含む）】<br>
                    ●精神科、神経科、心療内科／竜美ストレス心療クリニック【月2回の往診】<br>
                    ●眼科／みやした眼科【1回の往診】<br>
                    ●歯科／宮野歯科【受診及び口腔ケア指導　奥平歯科診療所【受診及び口腔ケア指導】<br>
                </div>
                <div>※医療機関に支払う医療費は、ご本人負担となります。</div>
            </div>
        </div>
        </section>
        <div class="modal" id="myModal" tabindex="-1">
            <div class="modal-dialog-centered" id="myModal">
                <div class="modal-content" id="floor">
                    <div class="floor-prev"><i class="fa fa-angle-left"></i></div>
                    <?php if (!empty($floor[0])): ?>
                    <img src="<?php echo esc_url($floor[0]['url']); ?>" alt="サン・ケアレジデンス" id="floor_image"
                        loading="lazy">
                    <?php endif; ?>
                    <div class="floor-next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
            <div class="close-btn"><i class="fa fa-close"></i></div>
            <div class="search-btn"><i class="fa fa-search"></i></div>
        </div>
</main>
<?php get_footer(); ?>

<script>
$(document).ready(function() {
    var width1 = "45%"
    var width2 = "80%"
    var isModal = false;
    var floorImages = <?php echo json_encode($floor); ?>;
    var current = 0;

    $('#floor-toggle').click(function() {
        $('#myModal').fadeIn();
        isModal = true;
        $('#floor').css("width", "45%");
        $('body').css('overflow-y', 'hidden');
        if (window.innerWidth <= 768) {
            $('#floor').css("width", "80%");
        }
    });

    $('.close-btn').click(function() {
        $('#myModal').fadeOut();
        $('body').css('overflow-y', 'auto');
        isModal = false;
    });

    $('.search-btn').click(function() {
        if (window.innerWidth <= 768) {
            if (width2 == '80%') {
                $('#floor').css("width", "100%");
                width2 = "100%"
            } else {
                $('#floor').css("width", "80%");
                width2 = "80%"
            }
        } else {
            if (width1 == '45%') {
                $('#floor').css("width", "55%");
                width1 = "55%"
            } else {
                $('#floor').css("width", "45%");
                width1 = "45%"
            }
        }
    });

    $(window).click(function(event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').fadeOut();
            $('body').css('overflow-y', 'auto');
            isModal = false;
        }
    });

    $('.floor-prev').click(function() {
        current = (current === 0) ? floorImages.length - 1 : (current - 1);
        $('#floor_image').attr('src', floorImages[current]['url']);
    });
    $('.floor-next').click(function() {
        current = (current === floorImages.length - 1) ? 0 : (current + 1);
        $('#floor_image').attr('src', floorImages[current]['url']);
    });
    $(window).on('keydown', function(event) {
        if (isModal) {
            event.preventDefault();
            if (event.keyCode === 37) {
                current = (current === 0) ? floorImages.length - 1 : (current - 1);
                $('#floor_image').attr('src', floorImages[current]['url']);
            } else if (event.keyCode === 39) {
                current = (current === floorImages.length - 1) ? 0 : (current + 1);
                $('#floor_image').attr('src', floorImages[current]['url']);
            }
        }
    });
});
</script>