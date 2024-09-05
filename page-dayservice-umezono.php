<?php get_header();?>
<?php $image = get_field('sancare-images', 'option'); ?>
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
    <section class="sancare-section-wrapper" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h3 class="font-serif"> 利用者様とご家族様の </h3>
                <h3 class="font-serif" style="margin-left:-15px">「穏やかな生活」を支援します。</h3>
                <p class="font16 pt-4">
                    デイサービスセンター燦うめぞのでは自宅で過ごすようなゆっくりと穏やかな時間が流れ、利用者様とスタッフが一緒に一日を過ごします。
                    また、ケアをさせていただく場合は、適切なタイミングで決して無理強いをすることなく利用者様に合わせて行ってまいります。
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
                <p class="font16">岡崎市内の　梅園・根石・男川・羽根・岡崎・六名・三島・竜美丘・連尺・広幡・井田愛宕・岩津・大樹寺・大門・矢作東・矢作北・城南の各小学校区ただし旧額田地区を除く。</p>
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
            <div class="mt-3">所在地：〒444-0814　愛知県岡崎市羽根町小豆坂87番地　（Googleマップで見る）</div>
        </div>
    </section>
    <div class="bg-color-lr-red container-fluid">
        <section class="sancare-section-wrapper">
            <div class="grid-two-column-3 mt-0">
                <div>
                    <p class="color-l-red font18 font-serif">■施設情報</p>
                    <div class="font16 mb-2">デイサービスセンター燦 うめぞの</div>
                    <p class="font25 font-umi">
                        <i class="fa fa-phone font20"></i>
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
                <div class="bg-image-center"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bottoms/umezono-bottom.jpg)">
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>