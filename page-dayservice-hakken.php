<?php get_header();?>
<?php $image = get_field('day-hakken-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">通所介護</h6>
        <h1>デイサービスセンター燦 はっけん</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N pc"><span class="ml--">「共に笑い、共に生きる」をモットーに、</span><br>共に成長をすることを目指しています。</h2>
                <h2 class="font25 font-Pr6N sp"><span class="ml--">「共に笑い、共に生きる」をモットーに、</span>共に成長をすることを目指しています。</h2>
                <p class="font16 pt-4 mt-1">
                    デイサービスセンター燦
                    はっけんでは、「共に笑い、共に生きる」をモットーに、利用者様、家族様、スタッフが一体となり、成長を共にすることを目指しています。特に食事とレクリエーションに力を入れ、彩り豊かな美しいお食事や種類豊富なメニューを提供。おやつ作りでは利用者様にお手伝いいただき、楽しめる環境を整えています。職員の特技を活かした多彩なレクリエーションも好評で、心身ともに充実した時間をお過ごしいただけます。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid-8">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="213"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1240px">
        <div class="dayservice-section-title mb-5">
            <h4 class="font28">THE FEATURE</h4>
            <h5 class="font20">デイサービスセンター燦 はっけんの強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">ここに来たからこそ味わえる感動</p>
                <p class="font14">
                    無限の可能性で、ワンランク上の体験を創り上げています。個性豊かで多彩なスタッフが集まり、音楽、おやつ作り、創作活動、フラワーアレンジメント、己書教室、美容セラピー等様々なイベントを企画。日常生活に新しい感動が生まれ、個性を引き出すお手伝いをさせていただきます。
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">心と体にやさしい手作りのお昼ごはん</p>
                <p class="font14">
                    美味しいと評判のお昼ごはんは、スタッフの真心込めた手作りです。新鮮な食材で、品数も多い自慢の昼食。イベント食にも力を入れ、食の楽しみ満載。見た目の美しさにもこだわり、飲食店にも負けていない絶品のメニューで、豊かな心と、健やかな身体づくりをお手伝いします。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font18 font-Pr6N">笑顔が弾む、ガーデンスペース</p>
                <p class="font14">
                    デイルームから繋がるガーデンスペースには、温かみのある木のファニチャーがお出迎え。車椅子や歩行器でもお散歩が楽しめるアプローチでは、四季を感じながら、活動的に過ごせます。畑づくりは、利用者様から知識を教わりながら、共に季節の作物を育て、収穫し、食事やおやつでご提供しています。
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
                        $rows = get_field('hakken-time-schedule', 'option');
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
                    <img src="<?php echo esc_url($image[5]['url']); ?>" alt="デイサービスセンター燦 はっけん" class="circle-image"
                        loading="lazy">
                    <?php endif; ?>
                    <?php if (!empty($image[6])): ?>
                    <img src="<?php echo esc_url($image[6]['url']); ?>" alt="デイサービスセンター燦 はっけん" class="circle-image"
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.8563108677913!2d137.02072711210704!3d34.91005527183651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60049a7cc674be5f%3A0xe693718d1c540fef!2z44OH44Kk44K144O844OT44K544K744Oz44K_44O854em44Gv44Gj44GR44KT!5e0!3m2!1sja!2sjp!4v1733939398144!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-1213　愛知県安城市東端町八剱74番地2　
            <a href="https://www.google.com/maps/place/%E3%83%87%E3%82%A4%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E3%82%BB%E3%83%B3%E3%82%BF%E3%83%BC%E7%87%A6%E3%81%AF%E3%81%A3%E3%81%91%E3%82%93/@34.9100553,137.0207271,17z/data=!3m1!4b1!4m6!3m5!1s0x60049a7cc674be5f:0xe693718d1c540fef!8m2!3d34.9100509!4d137.0233074!16s%2Fg%2F11btww819c?hl=ja&entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-Pr6N">■施設情報</p>
                    <div class="font16 line-normal">デイサービスセンター燦 はっけん</div>
                    <p class="font25 font-Pr6N-M line-normal">
                        <i class="fa fa-phone font18"></i>
                        <span>0566-45-7070</span>
                    </p>
                    <div class="font14 line-normal d-flex facility-info-description">
                        <div>
                            ●事業所種別／通常規模型デイサービス　<br>
                            ●事業所番号／2373101910<br>
                            ●営業日／月～土曜日<br>
                            ●休業日／日曜日
                        </div>
                        <div>
                            ●サービス提供時間／9時55分～17時00分<br>
                            ●利用定員／35名／日
                        </div>
                    </div>
                </div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" alt="デイサービスセンター燦 はっけん" loading="lazy">
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>