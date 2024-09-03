<?php get_header();?>
<?php $image = get_field('grouphome-fukuoka-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-m-blue">
        <h6 class="mb-3">認知症対応型共同生活介護</h6>
        <h1>グループホーム燦 ふくおか</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h3 class="font-serif"> 笑顔がつなぐ、温もりの日々。</h3>
                <h3 class="font-serif"> 心に寄うケアで暮らしを支えます。</h3>
                <p class="font16 pt-4">
                    個人の豊かな人生経験を尊重したサポートで、安心の暮らしを提供します。一人ひとりに寄り添う心配りで、居心地の良い毎日を大切にしています。地域との繋がりも深めながら、家族のような温もりを大切にし、明るく穏やかな時間を過ごせる環境を整えています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid">
        <section class="sancare-section-wrapper">
            Coming
        </section>
    </div>
    <section class="sancare-section-wrapper pt-0">
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[2])): ?>
                <img src="<?php echo esc_url($image[2]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-serif font31">01.介護サービス </div>
                <div class="font-serif font16">NURSING CARE SERVICE</div>
                <div class="font-serif font20 mt-3">明るい雰囲気と、きめ細やかで</div>
                <div class="font-serif font20 mt-1">ゆとりのある介護を心掛けています。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
                <button class="toggle-btn">
                    <span>敷地配置図・間取り例</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up-right.svg"
                        alt="arrow-up-right-icon" class="arrow-up-right-icon" />
                </button>
            </div>

        </div>
        <div class="grid-two-column">
            <div>
                <div class="font-serif font31">02.食事</div>
                <div class="font-serif font16">MEAL</div>
                <div class="font-serif font20 mt-3">太田油脂のえごまオイルを使った、</div>
                <div class="font-serif font20 mt-1">新鮮な手づくりの食事です。（ミキサー食対応）</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
            <div>
                <?php if (!empty($image[3])): ?>
                <img src="<?php echo esc_url($image[3]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[4])): ?>
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-serif font31">03.入浴</div>
                <div class="font-serif font16">BATHING</div>
                <div class="font-serif font20 mt-3">木の香り漂うひのき風呂をご用意しました。</div>
                <div class="font-serif font20 mt-1">脱衣場に床暖房完備しています。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <div class="font-serif font31">04.アクティビティ</div>
                <div class="font-serif font16">ACTIVITY</div>
                <div class="font-serif font20 mt-3">「笑顔」が一番！</div>
                <div class="font-serif font20 mt-1">毎月、ホーム主催の行事を予定しております。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
            <div>
                <?php if (!empty($image[5])): ?>
                <img src="<?php echo esc_url($image[5]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="pt-5 service-btns">
            <p class="font20 font-serif">余暇活動として、様々な催しものを企画しております。</p>
            <div class="service-btns-wrapper">
                <button class="service-btn bg-color-m-blue">季節のイベント</button>
                <button class="service-btn bg-color-m-blue">ボランティアの訪問</button>
                <button class="service-btn bg-color-m-blue">職員が行う余暇活動</button>
            </div>
        </div>
    </section>
    <hr>
    <section class="sancare-section-wrapper">
        <div class="font31 font-serif text-center">ACCESS</div>
        <div class="font20 font-serif text-center pb-5">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.25048273573!2d137.148635675519!3d34.90016307248479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bdeb840fb79d%3A0x8bca28b9a18f9bb!2z44CSNDQ0LTA4MjUg5oSb55-l55yM5bKh5bSO5biC56aP5bKh55S66YCa6ZW377yT77yW!5e0!3m2!1sja!2sjp!4v1723136585876!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-3">所在地：〒444-0825　岡崎市福岡町字通長36番地　（Googleマップで見る）</div>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid">
        <section class="sancare-section-wrapper" style="max-width: 820px">
            <div class="grid-two-column mt-0">
                <div>
                    <p class="color-m-blue font18 font-serif">■施設情報</p>
                    <div class="font16 mb-2">グループホーム燦 ふくおか</div>
                    <p class="font25 font-umi">
                        <i class="fa fa-phone font20"></i>
                        <span>0564-59-5159</span>
                    </p>
                    <p>
                        ●介護保険事業所番号<br>
                        　認知症対応型共同生活介護　2372101440<br>
                        　介護予防認知症対応型共同生活介護　2372101440<br>
                        　共用型指定認知症対応型通所介護　2372101026
                    </p>
                </div>
                <div class="bg-image-center"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gh-fukuoka-bottom.jpg)">
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>