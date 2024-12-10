<?php get_header();?>
<?php $image = get_field('day-azukizaka-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">認知症対応型通所介護</h6>
        <h1>デイサービスセンター燦 あずき坂</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N">気持ちに寄り添い、共感する。<br>一人ひとりの笑顔を守る場所です。</h2>
                <p class="font16 pt-4 mt-1">
                    デイサービスセンター燦
                    あずき坂では、12名の利用者様一人ひとりの健康状態や過ごしやすさに配慮し、認知症に特化した個別ケアを提供しています。コミュニケーションが難しい場面でも、スタッフが寄り添い、穏やかで安心できる日々をサポートします。施設内だけでなく、ご自宅でも穏やかに過ごせるよう心掛け、無理なく楽しい毎日をお手伝いしています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="174"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1240px">
        <div class="dayservice-section-title mb-5">
            <h4 class="font28">THE FEATURE</h4>
            <h5 class="font20">デイサービスセンター燦 あずき坂の強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">心のこもった介護</p>
                <p class="font14">
                    利用者様とスタッフが楽しく日々を過ごせるような介護を目指しています。スタッフの入れ替わりが少なく、認知症の方でも顔を覚えやすい環境です。無理なくその方に合った支援を提供し、役割や楽しみを見つけながら、充実した時間を過ごしていただけるようサポートしています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">飲食店にも負けない絶品の手作り昼食</p>
                <p class="font14">
                    美味しい食事は自然と笑顔を引き出します。あずき坂の自慢のお昼ごはんは、飲食店にも劣らない手作りの絶品料理。利用者様の近くで調理を行うことで、料理の温かさや香りが広がり、食欲をそそります。心を込めた手作りの食事が、利用者様に元気と笑顔をもたらします。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">ゆったり、のんびり、イライラせずに</p>
                <p class="font14">
                    利用者様一人ひとりの個性を大切にし、穏やかでリラックスできる時間を過ごしていただくことを心がけています。声掛けの際はその方に合わせた工夫を凝らし、表情や態度からも気持ちを汲み取るよう努めています。入居者様が施設での時間を楽しみにしてくださることが、スタッフにとっても大きな喜びです。
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
            <div class="schedule grid-two-column-5">
                <div class="mb-5">
                    <?php 
                        $rows = get_field('azukizaka-time-schedule', 'option');
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.28548500013!2d137.17371617551998!3d34.9243764711789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bc52dd2a8f83%3A0x5a7ebcaf43163aa5!2z44CSNDQ0LTA4MTQg5oSb55-l55yM5bKh5bSO5biC57695qC555S65bCP6LGG5Z2C77yY77yXIOODh-OCpOOCteODvOODk-OCueOCu-ODs-OCv-ODvOeHpuOBguOBmuOBjeWdgg!5e0!3m2!1sja!2sjp!4v1723215582885!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-0814　愛知県岡崎市羽根町小豆坂87番地　
            <a href="https://maps.google.com/maps?ll=34.924372,137.176291&z=17&t=m&hl=ja&gl=JP&mapclient=embed&q=%E3%83%87%E3%82%A4%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E3%82%BB%E3%83%B3%E3%82%BF%E3%83%BC%E7%87%A6%E3%81%82%E3%81%9A%E3%81%8D%E5%9D%82%20%E3%80%92444-0814%20%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%B2%A1%E5%B4%8E%E5%B8%82%E7%BE%BD%E6%A0%B9%E7%94%BA%E5%B0%8F%E8%B1%86%E5%9D%82%EF%BC%98%EF%BC%97"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-Pr6N">■施設情報</p>
                    <div class="font16 line-normal">デイサービスセンター燦 あずき坂</div>
                    <p class="font25 font-Pr6N-M line-normal">
                        <i class="fa fa-phone font18"></i>
                        <span>0564-58-1250</span>
                    </p>
                    <div class="font14 line-normal d-flex facility-info-description">
                        <div>
                            ●事業所種別／認知症対応型通所介護（単独型）<br>
                            ●事業所番号／2392100216<br>
                            ●営業日／月～土曜日<br>
                            ●休業日／日曜日・12月31日～1月2日
                        </div>
                        <div>
                            ●サービス提供時間／9時30分～16時40分 <br>
                            ●利用定員／12名／日
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
