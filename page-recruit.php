<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-blue">
        <h5 class="mb-3">RECRUIT</h5>
        <h1>採用情報</h1>
    </div>
    <section class="section-wrapper pb-100">
        <div class="recruit-description">
            <h2>働きやすい環境が自慢です</h2>
            <div class="text-start font15 my-40">
                親会社である「太田油脂株式会社」は、創業110年超の岡崎の老舗企業です。労働条件などは同じですので、社員の休暇は年間120日。スタッフ数が充実しているので、無理な勤務体制になることがありません。子育て中の方も安心して働くことができます。
            </div>
            <a href="<?php echo esc_url( home_url() ); ?>/work-environment/">
                <button class="work-environment-btn bg-color-d-blue font15">職場環境等の取り組みについて
                </button>
            </a>
        </div>
        <div class="my-60 font20 text-center">
            募集要項一覧
        </div>
        <div class="recruit-viewer">
            <p class="font12">ご覧になりたい項目をクリックしてください</p>
            <div class="recruit-list">
                <div class="recruit-item">
                    <span>
                        介護付有料老人ホーム サン・ケア レジデンス<br>
                        【 正社員 ／ 嘱託社員 】
                    </span>
                    <span class=""> ー </span>
                </div>
                <div class="recruit-item-menu hide">
                    <div class="mb-2 font16 bold color-d-blue">正社員 募集要項</div>
                    <table class="recruit-table">
                    </table>
                </div>
                <div class="recruit-item">
                    <span>
                        介護付有料老人ホーム サン・ケア レジデンス<br>
                        【 正社員 ／ 嘱託社員 】
                    </span>
                    <span class="recruit-item-icon"> ー </span>
                </div>
                <div class="recruit-item-menu hide">
                    <div class="mb-2 font16 bold color-d-blue">正社員 募集要項</div>
                    <table class="recruit-table">
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center container-fluid bg-color-l-gray py-100">
        <div class="mb-2 font16">随時募集しています。</div>
        <div class="mb-3 font16">「ENTRY」ボタンよりご応募ください。</div>
        <a href="<?php echo esc_url( home_url() ); ?>/form-entry/">
            <button class="entry-btn bg-color-d-blue font20 bold">ENTRY
            </button>
        </a>
    </div>
</main>
<?php get_footer(); ?>

<script>
$(document).ready(function() {
    $.getJSON("<?php echo get_template_directory_uri(); ?>/assets/json/company-introduce.json")
        .done(function(data) {
            const rows = data.map(element =>
                `<tr><td class="rt-label">${element.label}</td><td>${element.value}</td></tr>`
            ).join('');
            $('.recruit-table').html(rows);
        })
        .fail(function() {
            console.error("Could not find company-introduce.json file");
        });
    $(".recruit-item").on("click", function() {
        if (!$(this).next().hasClass('hide')) {
            $(this).next().toggleClass('hide');
            $(this).find('.recruit-item-icon').text('ー')
            return;
        }
        $('.recruit-list').find(".recruit-item-menu").addClass('hide');
        $(this).next().toggleClass('hide');
        $('.recruit-list').find(".recruit-item-icon").text('ー');
        $(this).find('.recruit-item-icon').text('＋')
    });
});
</script>