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
        <img src="<?php echo esc_url($image[0]['url']); ?>" alt="Sancare Image" loading="lazy">
        <?php endif; ?>
    </div>
    <section class="sancare-section-wrapper" style="max-width: 1080px">
        <div class="grid-two-column">
            <div>
                <h3 class="font-serif"> 賑やかに、</h3>
                <h3 class="font-serif"> 地域へとけこむ暮らし。</h3>
                <p class="font16 pt-4">
                    こだわりを持ち、わがままを共感して欲しい方向けの「サン・ケアレジデンス」は、オープンな環境で入居者様とご家族の両方の気持ちに寄り添うことで、他の高齢者様向け施設とは違い、家で過ごすよりも安心して明るく過ごせる有料老人ホームです。
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
            <?php echo do_shortcode('[metaslider id="48"]'); ?>
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
                <div class="font-serif font31">01.住空間 </div>
                <div class="font-serif font16">LIVING</div>
                <div class="font-serif font20 mt-3">思い思いに暮らせる、</div>
                <div class="font-serif font20 mt-1">自由度の高い快適な住まいです。 </div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
                <button class="toggle-btn" id="floor-toggle">
                    <span>敷地配置図・間取り例</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up-right.svg"
                        alt="arrow-up-right-icon" class="arrow-up-right-icon" />
                </button>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <div class="font-serif font31">02.介護サービス</div>
                <div class="font-serif font16">NURSING CARE SERVICE</div>
                <div class="font-serif font20 mt-3">寄り添って一緒に笑顔になる、</div>
                <div class="font-serif font20 mt-1">きめ細やかな個別ケアを心がけています。</div>
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
        <div class="pt-5 service-btns">
            <p class="font20 font-serif">安心しておくつろぎいただけるよう、様々な生活支援サービスも充実しています。</p>
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
                <img src="<?php echo esc_url($image[4]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-serif font31">03.医療・リハビリ</div>
                <div class="font-serif font16">MEDICAL /REHABILITATION</div>
                <div class="font-serif font20 mt-3">生活機能の維持や向上を目指し、 </div>
                <div class="font-serif font20 mt-1">健やかで楽しい毎日をサポートいたします。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <div class="font-serif font31">04.食事</div>
                <div class="font-serif font16">MEAL</div>
                <div class="font-serif font20 mt-3">安全・安心の食材を吟味し、 </div>
                <div class="font-serif font20 mt-1">こだわりの食事で健康を応援します。</div>
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
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[6])): ?>
                <img src="<?php echo esc_url($image[6]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-serif font31">05.終身入居の保証</div>
                <div class="font-serif font16">LIFETIME RESIDENCY GUARANTEE</div>
                <div class="font-serif font20 mt-3">終の棲家として、</div>
                <div class="font-serif font20 mt-1">老後を安心してお過ごしいただけます。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
                <p class="pt-3 font12">
                    ※入居者の言動が、他の入居者に精神的苦痛を与えたり、生命に危害を及ぼす恐れがあり、かつ入居者に対する通常の介護方法ではこれを防止する事ができない場合は、契約を解除した依拠していただく事があります。
                </p>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <div class="font-serif font31">06.アクティビティ</div>
                <div class="font-serif font16">ACTIVITY</div>
                <div class="font-serif font20 mt-3">季節の訪れを楽しむのイベントをはじめ、</div>
                <div class="font-serif font20 mt-1">明日が待ち遠しくなる多彩な催しをご用意しています。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
            <div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <div class="grid-two-column">
            <div>
                <?php if (!empty($image[8])): ?>
                <img src="<?php echo esc_url($image[8]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="font-serif font31">07.立地</div>
                <div class="font-serif font16">LOCATION</div>
                <div class="font-serif font20 mt-3">岡崎の中心エリアで暮らす、</div>
                <div class="font-serif font20 mt-1">満ち足りた日常。</div>
                <p class="pt-3">
                    この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、（100文字以内）
                </p>
            </div>
        </div>
    </section>
    <section class="sancare-section-wrapper">
        <div class="font31 font-serif text-center">ACCESS</div>
        <div class="font20 font-serif text-center pb-5">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.9712577643136!2d137.16543807552142!3d34.95732906940032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bd2f005a6855%3A0xab1c8b1eb2bfccc3!2z44CSNDQ0LTAwMzgg5oSb55-l55yM5bKh5bSO5biC5Lyd6aas6YCa77yR5LiB55uu77yX77yY!5e0!3m2!1sja!2sjp!4v1723104680464!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-3">
                所在地：〒444-0038 愛知県岡崎市伝馬通1丁目78番地　
                <a href="https://www.google.com/maps?ll=34.957325,137.168013&z=15&t=m&hl=ja&gl=JP&mapclient=embed&q=%E3%80%92444-0038+%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%B2%A1%E5%B4%8E%E5%B8%82%E4%BC%9D%E9%A6%AC%E9%80%9A%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%97%EF%BC%98"
                    target="_blank">（Googleマップで見る）</a>
            </div>
        </div>
    </section>
    <div class="bg-color-l-gray container-fluid d-flex flex-column align-items-center py-100">
        <br>
        <a href="<?php echo esc_url( home_url() ); ?>/expenses/">
            <div class="toggle-btn text-center mt-5">
                <span>料金表を見る</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up-right.svg"
                    alt="arrow-up-right-icon" class="arrow-up-right-icon" />
            </div>
        </a>
    </div>
    <section class="sancare-section-wrapper">
        <div class="grid-two-column-2">
            <div>
                <p class="color-d-blue font18 font-serif">■施設概要</p>
                <div class="font16 mb-2">有料老人ホーム「サン・ケアレジデンス」</div>
                <p class="font25 font-umi">
                    <i class="fa fa-phone font20"></i>
                    <span>0564-22-7575</span>
                </p>
                <?php if (!empty($image[9])): ?>
                <img src="<?php echo esc_url($image[9]['url']); ?>" alt="Sancare Image" width="100%" loading="lazy">
                <?php endif; ?>
            </div>
            <div>
                <div class="color-d-blue font18 font-serif mb-2">■施設概要</div>
                <div class="mb-5">
                    ●建物構造／鉄筋コンクリート造地上5階・地下1階建（土地・建物共自己所有）●敷地面積／1388.95㎡●建築面積／803.42㎡●延床面積／4243.67㎡（その内有料老人ホーム部分としての延床面積は2642.52㎡）●入居定員／50名●施設の類型／介護付有料老人ホーム（一般型特定施設入居者生活介護）●居住の権利形態／利用権方式●入居時の要件／自立、要支援、要介護●介護保険／愛知県指定介護保険特定施設、愛知県指定介護予防特定施設●介護居室区分／全室個室●介護にかかわる職員体制／2：1以上（要介護者2人に対し週37時間換算で介護職員1人以上）●介護保険の指定居宅サービスの種類／特定施設入居者生活介護・介護予防特定施設入居者生活介護のサービス
                </div>
                <div class="color-d-blue font18 font-serif mb-2">■協力医療機関</div>
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
            <div class="modal-content" id="floor" style="width:30%">
                <div class="floor-prev"><i class="fa fa-angle-left"></i></div>
                <?php if (!empty($floor[0])): ?>
                <img src="<?php echo esc_url($floor[0]['url']); ?>" alt="Sancare Floor Image" id="floor_image"
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
    var width1 = "30%"
    var width2 = "80%"
    var isModal = false;
    var floorImages = <?php echo json_encode($floor); ?>;
    var current = 0;

    $('#floor-toggle').click(function() {
        $('#myModal').fadeIn();
        isModal = true;
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
            if (width1 == '30%') {
                $('#floor').css("width", "50%");
                width1 = "50%"
            } else {
                $('#floor').css("width", "30%");
                width1 = "30%"
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