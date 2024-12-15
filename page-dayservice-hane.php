<?php get_header();?>
<?php $image = get_field('day-hane-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">認知症対応型通所介護</h6>
        <h1>デイサービスセンター燦 はね</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N">長い木で、長い生きを。<br>温もりに包まれた心地よいケアをご提供します。</h2>
                <p class="font16 pt-4 mt-1">
                    デイサービスセンター燦
                    はねは、「長い木で長い生きをしよう」というコンセプトのもと、木の温かみと香りが漂う落ち着いた木造施設です。利用者様がリラックスして過ごせる環境を整え、マッサージ機を導入するなど、心身ともに快適にお過ごしいただけます。また、カラオケ設備もあり、歌を楽しみながら笑顔あふれるひとときをお届けしています。『選ぶ・為す・繋がる』を理念に掲げ、利用者様の個性を大切にしたケアを実践しています。
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
            <?php echo do_shortcode('[metaslider id="226"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1240px">
        <div class="dayservice-section-title mb-5">
            <h4 class="font28">THE FEATURE</h4>
            <h5 class="font20">デイサービスセンター燦 はねの強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">「笑顔」があふれる心のこもったケア</p>
                <p class="font14">
                    木の香りが漂う温かい空間で、最新のマッサージ機を使ったリラクゼーションが好評です。スタッフは一人ひとりに合わせた個別ケアを行い、利用者様の自立を支援します。スタッフの温かい対応により、他の施設では難しかった方も楽しく通えるようになっています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">心と体にやさしい手作りのお昼ごはん</p>
                <p class="font14">
                    美味しいと評判のお昼ごはんでは、認知症予防に効果のあるといわれているえごま油も摂取していただいています。新鮮な食材で品数も多い自慢の昼食は、飲食店にも負けない絶品の手作りごはんで、利用者様の笑顔を引き出します。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">完全個浴で自宅のような安心感</p>
                <p class="font14">
                    完全個浴の3つのお風呂を用意し、利用者様お一人ずつの着替えと入浴をサポートしています。大勢での入浴が苦手な方でも安心してリラックスできる環境です。普段は会話が苦手な方も、入浴時には自然とコミュニケーションが生まれ、リラックスした雰囲気の中で会話が弾むこともあります。
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
                        $rows = get_field('hane-time-schedule', 'option');
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.074221409536!2d137.15959617392602!3d34.929675470895624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bd0005740479%3A0xfea3f96c7b9b5617!2z44OH44Kj44K144O844OT44K554em44Gv44Gt!5e0!3m2!1sja!2sjp!4v1733971251251!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-1213　愛知県岡崎市羽根北町一丁目３番地２　
            <a href="https://www.google.com/maps/place/%E3%83%87%E3%82%A3%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E7%87%A6%E3%81%AF%E3%81%AD/@34.9296755,137.1595962,17z/data=!3m1!4b1!4m6!3m5!1s0x6004bd0005740479:0xfea3f96c7b9b5617!8m2!3d34.9296711!4d137.1621711!16s%2Fg%2F11wpsqf69v?hl=ja&entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-Pr6N">■施設情報</p>
                    <div class="font16 line-normal">デイサービスセンター燦 はね</div>
                    <p class="font25 font-Pr6N-M line-normal">
                        <i class="fa fa-phone font20"></i>
                        <span>0564-64-7560</span>
                    </p>
                    <div class="font14 line-normal d-flex facility-info-description">
                        <div>
                            ●事業所種別／通常規模型デイサービス　<br>
                            ●事業所番号／2372104816<br>
                            ●営業日／月～土曜日<br>
                            ●休業日／日曜日
                        </div>
                        <div>
                            ●サービス提供時間／9時25分～16時30分 <br>
                            ●利用定員／30名／日
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
