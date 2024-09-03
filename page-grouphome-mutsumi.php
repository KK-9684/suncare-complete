<?php get_header();?>
<?php $image = get_field('grouphome-mutsumi-images', 'option'); ?>
<main class="top-page">
    <div class="section-big-title-bar bg-color-m-blue">
        <h6 class="mb-3">認知症対応型共同生活介護</h6>
        <h1>グループホーム燦 むつみ</h1>
    </div>
    <div class="sancare-top-img">
        <?php if (!empty($image[0])): ?>
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h3 class="font-serif"> 手厚い人員体制のによる、</h3>
                <h3 class="font-serif"> きめ細やかな介護体制を実現しています。</h3>
                <p class="font16 pt-4">
                    グループホーム燦
                    むつみでは、玄関のカギをかけてはいません。常にフロアにはスタッフがいますので、知らないうちに出かけてしう心配がないからです。スタッフの笑い声がたえないきめ細やかな介護体制と家庭的な雰囲気の中で、寄り添って暮らしていただいています。
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
                <div class="font-serif font31">01.介護サービス</div>
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.1211212331423!2d137.13213817552003!3d34.928499170956506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497df16a604c5%3A0xb0b0c854f46d3b9e!2z44CSNDQ0LTAyNDEg5oSb55-l55yM5bKh5bSO5biC6LWk5riL55S65a-65YmN77yR77yZ4oiS77yR!5e0!3m2!1sja!2sjp!4v1723138779564!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-3">所在地：〒444-0241　岡崎市赤渋町寺前19番地1　（Googleマップで見る）</div>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid">
        <section class="sancare-section-wrapper" style="max-width: 820px">
            <div class="grid-two-column mt-0">
                <div>
                    <p class="color-m-blue font18 font-serif">■施設情報</p>
                    <div class="font16 mb-2">グループホーム燦 むつみ</div>
                    <p class="font25 font-umi">
                        <i class="fa fa-phone font20"></i>
                        <span>0564-58-3003</span>
                    </p>
                    <p>
                        ●介護保険事業所番号<br>
                        　認知症対応型共同生活介護　2372100034<br>
                        　介護予防認知症対応型共同生活介護　2372100034<br>
                    </p>
                </div>
                <div class="bg-image-center"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gh-mutsumi-bottom.jpg)">
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>