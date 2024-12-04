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
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N"> 自宅のような温もりと安心感。<br>心に寄り添うケアで日々の暮らしを支えます。</h2>
                <p class="font16 pt-4 mt-1">
                    グループホーム燦
                    むつみは、明るく楽しい雰囲気が広がる施設です。スタッフ同士の連携も良好で、笑顔と笑い声が絶えません。広々とした屋内には床暖房が完備され、温かく快適な環境で過ごしていただけます。また、家庭用のキッチンや畑を設け、入居者様が得意なことを活かせる場所も提供しています。一人ひとりの心に寄り添った、きめ細やかなケアを大切にしています。
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
            <?php echo do_shortcode('[metaslider id="161"]'); ?>
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
                <div class="font-Pr6N font31">01.住空間</div>
                <div class="font-Pr6N font16">LIVING</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">自宅のように快適に過ごせる<br>清潔感あふれる居室をご用意しています。</h3>
                <p class="font14 pt-2">
                    グループホーム燦
                    むつみはの居室は、自宅のように快適に過ごせる工夫が施されています。明るく清潔感のある部屋には、介護用ベッドや収納スペースも備えており、日常生活をサポートする環境が整っています。利用者様が安心して快適に過ごせるよう、細部にわたり心配りを感じる空間となっています。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">02.介護サービス</div>
                <div class="font-Pr6N font16">NURSING CARE SERVICE</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">笑い声が絶えない環境で、自立を尊重しながら<br>心のこもった介護をご提供いたします。</h3>
                <p class="font14 pt-2">
                    地域に密着した家庭的な雰囲気の中で、入居者様の自立した生活を尊重しながらサポートしています。食器洗いや畑仕事など、できる範囲で家事をお手伝いいただくことで、役割を持つことによる達成感や充実感を感じ、『ここにいてよい』という安心感をもって暮らしていただける環境を目指しています。
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
                <div class="font-Pr6N font31">03.医療</div>
                <div class="font-Pr6N font16">MEDICAL</div>
                <div class="font-Pr6N font20 mt-4 mb-2">医療連携をしっかりと整え、<br>安心して過ごせるケアをご提供しています。</div>
                <p class="font14 pt-2">
                    看護師による日常的な健康管理を徹底しています。また、24時間365日オンコール体制を整えており、万が一のケガや緊急事態にも迅速に対応できるため、入居者様とご家族様に安心して過ごしていただけます。必要に応じて、看取りケアまで丁寧に対応させていただくことで、安心して長く暮らしていただける医療体制を整えています。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">04.食事</div>
                <div class="font-Pr6N font16">MEAL</div>
                <div class="font-Pr6N font20 mt-4 mb-2">家庭菜園の恵みを取り入れた手作りの食事で、<br>毎日楽しみにしていただいております。</div>
                <p class="font14 pt-2">
                    食事はスタッフが手作りし、新鮮な食材を使って品数も豊富です。目の前で調理するので、香りに誘われて「今日は何かな？」という会話も弾みます。家庭菜園で育てた野菜も取り入れ、利用者様にお手伝いいただくこともあり、食事の楽しみを一緒に感じていただけます。
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
                <div class="font-Pr6N font31">05.アクティビティ</div>
                <div class="font-Pr6N font16">ACTIVITY</div>
                <div class="font-Pr6N font20 mt-4 mb-2">四季折々のイベントと多彩なレクリエーションで、<br>毎日笑顔をお届けしています。</div>
                <p class="font14 pt-2">
                    季節のイベントやボランティアによる活動、職員による体操やゲームなど、豊富なレクリエーションを通じて、利用者様に笑顔を届けています。お花見やクリスマス会、子供たちとのふれあいなど、毎月さまざまな行事を企画し、楽しい時間を過ごしていただいています。
                </p>
            </div>
        </div>
        <div class="pt-5 service-btns">
            <p class="font20 font-Pr6N">余暇活動として、様々な催しものを企画しております。</p>
            <div class="service-btns-wrapper">
                <div class="service-btn bg-color-m-blue">季節のイベント</div>
                <div class="service-btn bg-color-m-blue">ボランティアさんの訪問</div>
                <div class="service-btn bg-color-m-blue">職員が行う余暇活動</div>
            </div>
        </div>
    </section>
    <hr>
    <section class="sancare-section-wrapper">
        <div class="font28 font-Pr6N text-center">ACCESS</div>
        <div class="font20 font-Pr6N text-center pb-3">アクセス</div>
        <div class="my-3 google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.1211212331423!2d137.13213817552003!3d34.928499170956506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600497df16a604c5%3A0xb0b0c854f46d3b9e!2z44CSNDQ0LTAyNDEg5oSb55-l55yM5bKh5bSO5biC6LWk5riL55S65a-65YmN77yR77yZ4oiS77yR!5e0!3m2!1sja!2sjp!4v1723138779564!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-0241　岡崎市赤渋町寺前19番地1　
            <a href="https://maps.google.com/maps?ll=34.928495,137.134713&z=17&t=m&hl=ja&gl=JP&mapclient=embed&q=%E3%80%92444-0241%20%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%B2%A1%E5%B4%8E%E5%B8%82%E8%B5%A4%E6%B8%8B%E7%94%BA%E5%AF%BA%E5%89%8D%EF%BC%91%EF%BC%99%E2%88%92%EF%BC%91"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid">
        <section class="sancare-section-wrapper" style="max-width: 820px">
            <div class="bottom-grid mt-0">
                <div>
                    <p class="color-m-blue font18 font-Pr6N">■施設情報</p>
                    <div class="font16">グループホーム燦 むつみ</div>
                    <p class="font25 font-Pr6N-M">
                        <i class="fa fa-phone font18"></i>
                        <span>0564-58-3003</span>
                    </p>
                    <p>
                        ●介護保険事業所番号<br>
                        　認知症対応型共同生活介護　2372100034<br>
                        　介護予防認知症対応型共同生活介護　2372100034<br>
                    </p>
                </div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>