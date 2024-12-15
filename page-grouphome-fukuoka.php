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
    <section class="sancare-section-wrapper pt-0" style="max-width: 1240px">
        <div class="grid-two-column">
            <div>
                <h2 class="font25 font-Pr6N">自宅のような温もりと安心感。<br>心に寄り添うケアで日々の暮らしを支えます。</h2>
                <p class="font16 pt-4 mt-1">
                    グループホーム燦
                    ふくおかでは、入居者様が自宅と変わらない生活を送り、穏やかに過ごしていただけることを大切にしています。少人数制ならではの家庭的な雰囲気を大切にし、入居者様の生活リズムや個性を尊重しながら、柔軟にサポート。広いスペースを活用して快適に過ごせる環境を提供しています。
                </p>
            </div>
            <div>
                <?php if (!empty($image[1])): ?>
                <img src="<?php echo esc_url($image[1]['url']); ?>" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid-8">
        <section class="sancare-section-wrapper carousel-mode">
            <?php echo do_shortcode('[metaslider id="148"]'); ?>
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
                <div class="font-Pr6N font31">01.住空間 </div>
                <div class="font-Pr6N font16">LIVING</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">自宅のように快適に過ごせる<br>清潔感あふれる居室をご用意しています。</h3>
                <p class="font14 pt-2">
                    グループホーム燦
                    ふくおかの居室は、自宅のように快適に過ごせる工夫が施されています。明るく清潔感のある部屋には、介護用ベッドや収納スペースも備えており、日常生活をサポートする環境が整っています。利用者様が安心して快適に過ごせるよう、細部にわたり心配りを感じる空間となっています。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">02.介護サービス</div>
                <div class="font-Pr6N font16">NURSING CARE SERVICE</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">アットホームな空間で、自立を尊重し、<br>心のこもった介護をご提供いたします。</h3>
                <p class="font14 pt-2">
                    家庭的でアットホームな雰囲気を大切にし、入居者様がリラックスして過ごせる環境を整えています。職員が必要な部分を手助けしつつ、できる範囲で家事をお手伝いいただくことで、自立した生活をサポートしています。
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
                <h3 class="font-Pr6N font20 mt-4 mb-2">週1回の定期訪問診療と24時間365日医療体制で、<br>安心してお過ごしいただける環境を整えています。</h3>
                <p class="font14 pt-2">
                    週1回の定期訪問診療を実施し、ひとり当たり月に2回の診察を受けられます。診察日以外でも、心配事があればいつでもご相談いただけるほか、24時間365日体制で入居者様の健康をサポートしています。内科をはじめ、眼科や皮膚科など幅広いケアを受けられ、必要に応じて専門医・専門医療機関を紹介を行っています。
                </p>
            </div>
        </div>
        <div class="grid-two-column column-reverse">
            <div>
                <div class="font-Pr6N font31">04.食事</div>
                <div class="font-Pr6N font16">MEAL</div>
                <h3 class="font-Pr6N font20 mt-4 mb-2">栄養バランスに配慮した、<br>新鮮な手づくりの食事です。（ミキサー食対応）</h3>
                <p class="font14 pt-2">
                    新鮮な食材を使い、スタッフがひとつひとつ心を込めて手作りした温かいお食事をご提供しています。また、ご利用者様お一人おひとりの噛む力や飲み込む力に合わせて、おかゆや刻み食、ミキサー食にも対応しておりますので、安心して食事を召し上がっていただけます。
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
                <h3 class="font-Pr6N font20 mt-4 mb-2">「笑顔」が一番！<br>毎月、ホーム主催の行事を予定しております。</h3>
                <p class="font14 pt-2">
                    午前中は、ボールを使った機能訓練や脳トレを楽しみながら、利用者様が笑顔で過ごせる工夫をしています。午後は、ボランティアによる歌や踊り、生け花などのアクティビティを行い、お昼寝が必要な方には無理なくそれぞれのペースに合わせて、ゆったりとした時間をお過ごしいただけます。
                </p>
            </div>
        </div>
        <div class="pt-4 service-btns">
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.251100283481!2d137.14862197392424!3d34.90014757248834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004bdeb84109a2b%3A0x66c2da8898b8254c!2z44Kw44Or44O844OX44Ob44O844Og44O754em44G144GP44GK44GL!5e0!3m2!1sja!2sjp!4v1733971760639!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-3">
            所在地：〒444-0825　岡崎市福岡町字通長36番地　
            <a href="https://www.google.com/maps/place/%E3%82%B0%E3%83%AB%E3%83%BC%E3%83%97%E3%83%9B%E3%83%BC%E3%83%A0%E3%83%BB%E7%87%A6%E3%81%B5%E3%81%8F%E3%81%8A%E3%81%8B/@34.9001476,137.148622,17z/data=!3m1!4b1!4m6!3m5!1s0x6004bdeb84109a2b:0x66c2da8898b8254c!8m2!3d34.9001432!4d137.1511969!16s%2Fg%2F1td7hpcr?hl=ja&entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                target="_blank" class="nowrap">（Googleマップで見る）</a>
        </div>
    </section>
    <div class="bg-color-mr-blue container-fluid">
        <section class="sancare-section-wrapper" style="max-width: 820px">
            <div class="bottom-grid mt-0">
                <div>
                    <p class="color-m-blue font18 font-Pr6N">■施設情報</p>
                    <div class="font16">グループホーム燦 ふくおか</div>
                    <p class="font25 font-Pr6N-M">
                        <i class="fa fa-phone font18"></i>
                        <span>0564-59-5159</span>
                    </p>
                    <div class="font14 line-normal">
                        ●介護保険事業所番号<br>
                        　認知症対応型共同生活介護　2372101440<br>
                        　介護予防認知症対応型共同生活介護　2372101440<br>
                        　共用型指定認知症対応型通所介護　2372101026
                    </div>
                </div>
                <?php if (!empty($image[7])): ?>
                <img src="<?php echo esc_url($image[7]['url']); ?>" width="100%" alt="Sancare Image" loading="lazy">
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
