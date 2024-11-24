<?php get_header();?>
<?php $image = get_field('day-umezono-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">認知症対応型通所介護</h6>
        <h1>デイサービスセンター燦 うめぞの</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1080px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N">利用者様とご家族様の「穏やかな生活」を支援します。 </h2>
                <p class="font16 pt-2">
                    デイサービスセンター燦
                    うめぞのでは、静かに過ごしたい方、音楽を楽しみたい方、お話をしたい方など、皆様がそれぞれの過ごし方を自由に選び、リラックスして過ごしていただける環境を整えています。スタッフは利用者様一人ひとりのペースに寄り添い、デイサービス内だけでなく、ご自宅でも安心して穏やかに過ごせることを目指しています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-l-gray container-fluid">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="187"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1080px">
        <div class="dayservice-section-title mb-5">
            <h4>THE FEATURE</h4>
            <h5>デイサービスセンター燦 うめぞのの強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">穏やかに過ごせる個別ケアの徹底</p>
                <p class="font14">利用者様の意志や感情を最優先に考え、できる限りペースを乱さないよう心掛け、その方にとって最適なケアを提供しています。日々の生活の中では、食事後の片付けやタオルの洗濯など、利用者様が自主的にお手伝いくださる場面もあり、無理なく自然な形でケアを進めています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">心と体にやさしい手作りのお昼ごはん</p>
                <p class="font14">美味しいと評判のお昼ごはんでは、認知症予防に効果のあるといわれているえごま油も摂取していただいています。新鮮な食材で品数も多い自慢の昼食は、飲食店にも負けない絶品の手作りごはんで、利用者様の笑顔を引き出します。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">自然にふれ、共に楽しむレクリエーション</p>
                <p class="font14">季節ごとに外出を楽しみ、桜や紅葉など自然の美しさを感じられるイベントを開催しています。八幡の蓮の花や川津桜、滝山寺、一畑山薬師寺への外出も好評で、利用者様は毎回楽しみにされています。少人数で行われる書道やパズルなど豊富なアクティビティもご用意しており、参加は自由です。
                </p>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper" style="max-width:1080px">
            <div class="dayservice-section-title mb-5">
                <h4>TIME SCHEDULE</h4>
                <h5>1日の過ごし方</h5>
            </div>
            <div class="grid-two-column-5">
                <div class="mb-5">
                    <?php 
                        $rows = get_field('umezono-time-schedule', 'option');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                $margin = '';
                                if (empty($row['schedule-time'])) $margin = 'margin-top--20';
                                echo "<div class='d-flex mb-4 ".$margin."'><span class='color-l-red font18 bold' style='min-width:100px'>".$row['schedule-time']."</span><div><div class='color-l-red font18 bold mb-2'>".$row['schedule-title']."</div><p class='wrap'>".$row['schedule-description']."</p></div></div>";
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
                    <div class="font16">デイサービスセンター燦 うめぞの</div>
                    <p class="font25 font-Pr6N-M">
                        <i class="fa fa-phone font18"></i>
                        <span>0564-64-3064</span>
                    </p>
                    <div class="d-flex facility-info-description">
                        <div>
                            ●事業所種別／認知症対応型通所介護（単独型）<br>
                            ●事業所番号／2392100331<br>
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