<?php
/* Template Name: request-thanks Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-l-blue">
        <h5 class="mb-3">DOCUMENT REQUEST</h5>
        <h1>資料請求</h1>
    </div>
    <section class="sancare-section-wrapper text-center">
        <p class="font25 bold mt-40 py-5">送信が完了致しました。</p>
        <p class="font16">
            この度は、資料請求にお申し込みいただきまして、誠にありがとうございます。
        <p>
        <p class="font16 my-4">
            資料の発送準備ができ次第、順次お送り致します。<br>
            お手元に届くまで今しばらくお待ちください。
        <p>
        <p class="font16">
            ご不明な点やご質問がございましたら、お気軽にお問い合わせください。
        <p>
        <div class="form-submit-wrapper mt-40 py-5">
            <a class="form-submit-btn bg-color-l-blue" href="<?php echo esc_url( home_url() ); ?>/">
                トップページへ戻る
            </a>
        </div>
        <div class="my-5 py-5">
        </div>
    </section>
</main>
<?php get_footer(); ?>