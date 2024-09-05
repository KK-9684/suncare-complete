<?php get_header();?>
<?php $image = get_field('sancare-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-l-red">
        <h6 class="mb-3">認知症対応型通所介護</h6>
        <h1>デイサービスセンター燦 はっけん</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h3 class="font-serif">あたたかな雰囲気、スタッフの笑顔。</h3>
                <h3 class="font-serif">共に笑い、共に生きるがモットーです。</h3>
                <p class="font16 pt-4">
                    デイサービスセンター燦はっけんでは、大きな窓から光があふれるゆったりとしたフロアで、一日を過ごしていただけます。司会上手なスタッフをはじめ、ガーデニングが得意なスタッフなど、明るい笑顔のスタッフが様々な個性を活かして利用者様へのサービスに繋げています。
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
            <?php echo do_shortcode('[metaslider id="213"]'); ?>
        </section>
    </div>
    <section class="sancare-section-wrapper" style="max-width:1240px">
        <div class="dayservice-section-title mb-5">
            <h4>THE FEATURE</h4>
            <h5>デイサービスセンター燦の強み</h5>
        </div>
        <div class="grid-column-4">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font20 font-serif">「笑顔」があふれる心のこもったケア</p>
                <p>利用者様の意志、感情を最優先にし、決して強要はしません。笑顔あふれるスタッフたちによる個別ケアのため、他では続けられなかった方も、楽しんで通ってくださるよう心のこもったサポートを行っています。</p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font20 font-serif">心と体にやさしい手作りのお昼ごはん</p>
                <p>美味しいと評判のお昼ごはんでは、認知症予防に効果のあるといわれているえごま油も摂取していただいています。新鮮な食材で品数も多い自慢の昼食は、飲食店にも負けない絶品の手作りごはんで、利用者様の笑顔を引き出します。
                </p>
            </div>
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
                <p class="pt-4 font20 font-serif">お風呂はお一人ずつゆったりと</p>
                <p>着替えから入浴まで完全にお一人ずつの「個浴」のため、リラックスしてお風呂を楽しんでいただけます。個室で１対１なので、ゆっくりとお話もできてお世話する私たちも人生の先輩のいろいろなお話が聞ける楽しみな時間です。
                </p>
            </div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper" style="max-width:1240px">
            <div class="dayservice-section-title mb-5">
                <h4>TIME SCHEDULE</h4>
                <h5>1日の過ごし方</h5>
            </div>
            <div class="grid-two-column-3">
                <div>
                    <div class="d-flex mb-4">
                        <span class="color-l-red font18 bold" style="min-width:100px">9:30</span>
                        <div>
                            <div class="color-l-red font18 bold mb-2">デイ到着&ティータイム</div>
                            <p>飲み物は各利用者様の好みに合わせたものを提供します。スタッフも一緒です。</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <span class="color-l-red font18 bold" style="min-width:100px">9:30</span>
                        <div>
                            <div class="color-l-red font18 bold mb-2">デイ到着&ティータイム</div>
                            <p>飲み物は各利用者様の好みに合わせたものを提供します。スタッフも一緒です。</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <span class="color-l-red font18 bold" style="min-width:100px">9:30</span>
                        <div>
                            <div class="color-l-red font18 bold mb-2">デイ到着&ティータイム</div>
                            <p>飲み物は各利用者様の好みに合わせたものを提供します。スタッフも一緒です。</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <span class="color-l-red font18 bold" style="min-width:100px">9:30</span>
                        <div>
                            <div class="color-l-red font18 bold mb-2">デイ到着&ティータイム</div>
                            <p>飲み物は各利用者様の好みに合わせたものを提供します。スタッフも一緒です。</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <span class="color-l-red font18 bold" style="min-width:100px">9:30</span>
                        <div>
                            <div class="color-l-red font18 bold mb-2">デイ到着&ティータイム</div>
                            <p>飲み物は各利用者様の好みに合わせたものを提供します。スタッフも一緒です。</p>
                        </div>
                    </div>
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
            <div class="dayservice-section-area">
                <p class="font20 color-l-red">送迎エリア</p>
                <p class="font16">愛知県安城市東端町八剱より半径約5km圏内</p>
            </div>
        </section>
    </div>
    <section class="sancare-section-wrapper">
        <div class="font31 font-serif text-center">ACCESS</div>
        <div class="font20 font-serif text-center pb-5">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.28548500013!2d137.17371617551998!3d34.9243764711789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bc52dd2a8f83%3A0x5a7ebcaf43163aa5!2z44CSNDQ0LTA4MTQg5oSb55-l55yM5bKh5bSO5biC57695qC555S65bCP6LGG5Z2C77yY77yXIOODh-OCpOOCteODvOODk-OCueOCu-ODs-OCv-ODvOeHpuOBguOBmuOBjeWdgg!5e0!3m2!1sja!2sjp!4v1723215582885!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-3">所在地：〒444-1213　愛知県安城市東端町八剱74番地2　（Googleマップで見る）</div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-serif">■施設情報</p>
                    <div class="font16 mb-2">デイサービスセンター燦 はっけん</div>
                    <p class="font25 font-umi">
                        <i class="fa fa-phone font20"></i>
                        <span>0566-45-7070</span>
                    </p>
                    <div class="d-flex facility-info-description">
                        <div>
                            ●事業所種別／通常規模型デイサービス<br>
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
                <div class="bg-image-center"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bottoms/hakken-bottom.jpg)">
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>