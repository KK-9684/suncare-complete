<?php get_header();?>
<?php $image = get_field('day-tenma-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">認知症対応型通所介護</h6>
        <h1>デイサービスセンター燦 てんま</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N pc">元気になれる、きれいになれるをスローガンに、未来に希望がもてる介護を目指しています。</h2>
                <h2 class="font25 font-Pr6N sp">元気になれる、きれいになれるを<br>スローガンに、<br>未来に希望がもてる介護を<br>目指しています。</h2>
                <p class="font16 pt-4 mt-1">
                    デイサービスセンター燦
                    てんまでは、心と身体の両面から元気を引き出す取り組みを行っています。特に「ビューティタッチセラピー」によるフェイシャルマッサージやハンドマッサージ、ネイルケアなどの美容ケアは、リラクゼーション効果と血行促進を促し、心身のリフレッシュをサポートします。また、機能訓練系のデイサービスが難しい方にも、遊び感覚でリハビリを行うプログラムを提供するなど、余暇活動を通じて、健康と笑顔に満ちた日々をお届けします。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid-8">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="200"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1240px">
        <div class="dayservice-section-title mb-5">
            <h4 class="font28">THE FEATURE</h4>
            <h5 class="font20">デイサービスセンター燦てんまの強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">充実した余暇活動</p>
                <p class="font14">
                    利用者様が楽しく運動機能の向上や低下防止に取り組めるよう、モルックやボッチャといったニュースポーツを積極的に導入しています。さらに、ボランティアの方々による合唱や習字、太鼓、スタッフとのおやつ作りやゲームなど、工夫を凝らしたレクリエーションをご用意しております。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">心も体も美しくなる、手作りのお昼ごはん</p>
                <p class="font14">
                    栄養バランスにこだわった手作りのお昼ごはんは、美味しさだけでなく、楽しく食べて美しくなる要素が詰まっています。認知症予防に効果が期待されるえごま油を取り入れたメニューや、新鮮な食材を使用した多彩なメニューが、心も体も健やかに保ち、利用者様の笑顔を引き出します。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">お風呂はお一人ずつゆったりと</p>
                <p class="font14">
                    当館自慢の「檜風呂」は、着替えから入浴まで完全にお一人ずつの「個浴」のため、温泉気分を味わいながらリラックスしてご利用いただけます。また、1対1でスタッフとの会話も弾み、人生の先輩からのお話を聞かせていただく貴重な時間として、スタッフにとっても特別なひとときとなっています。
                </p>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper" style="max-width:1240px">
            <div class="dayservice-section-title mb-5">
                <h4 class="font28">TIME SCHEDULE</h4>
                <h5 class="font20">1日の過ごし方</h5>
            </div>
            <div class="grid-two-column-5">
                <div class="">
                    <?php 
                        $rows = get_field('tenma-time-schedule', 'option');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                $margin = '';
                                if (empty($row['schedule-time'])) $margin = 'margin-top--20';
                                echo "<div class='d-flex mb-4 ".$margin."'><span class='color-l-red font18 font-SourceHanSansJP-M' style='min-width:100px'>".$row['schedule-time']."</span><div><div class='color-l-red font18 font-SourceHanSansJP-M mb-2'>".$row['schedule-title']."</div><p class='wrap'>".$row['schedule-description']."</p></div></div>";
                            }
                        }
                    ?>
                </div>
                <div class="circle-image-wrapper">
                    <?php if (!empty($image[5])): ?>
                    <img src="<?php echo esc_url($image[5]['url']); ?>" alt="Sancare Image" class="circle-image"
                        loading="lazy">
                    <?php endif; ?>
                    <?php if (!empty($image[6])): ?>
                    <img src="<?php echo esc_url($image[6]['url']); ?>" alt="Sancare Image" class="circle-image"
                        loading="lazy">
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
    <section class="sancare-section-wrapper">
        <div class="font28 font-Pr6N text-center">ACCESS</div>
        <div class="font20 font-Pr6N text-center pb-3">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1634.9816285798897!2d137.16678343828053!3d34.95752959148657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bd2f00591a5d%3A0x1d1a3d9b1de67082!2z44K144Oz44O744Kx44Ki44Os44K444OH44Oz44K5!5e0!3m2!1sja!2sjp!4v1733971523480!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-0038　愛知県岡崎市伝馬通1丁目78番地（サンケアレジデンス内）
            <a href="https://www.google.com/maps/place/%E3%82%B5%E3%83%B3%E3%83%BB%E3%82%B1%E3%82%A2%E3%83%AC%E3%82%B8%E3%83%87%E3%83%B3%E3%82%B9/@34.9575296,137.1667834,18z/data=!3m1!4b1!4m6!3m5!1s0x6004bd2f00591a5d:0x1d1a3d9b1de67082!8m2!3d34.9575274!4d137.1680709!16s%2Fg%2F1v16q7ph?hl=ja&entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" class="no-wrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-Pr6N">■施設情報</p>
                    <div class="font16 line-normal">デイサービスセンター燦 てんま</div>
                    <p class="font25 font-Pr6N-M line-normal">
                        <i class="fa fa-phone font18"></i>
                        <span>0564-22-0177</span>
                    </p>
                    <div class="font14 line-normal d-flex facility-info-description">
                        <div>
                            ●事業所種別／大規模Ⅰ型デイサービス　<br>
                            ●事業所番号／2372101812<br>
                            ●営業日／月～土曜日<br>
                            ●休業日／日曜日
                        </div>
                        <div>
                            ●サービス提供時間／9時25分～16時30分<br>
                            ●利用定員／45名／日
                        </div>
                    </div>
                </div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
