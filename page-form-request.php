<?php
/* Template Name: form-request Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-l-blue">
        <h5 class="mb-3">DOCUMENT REQUEST</h5>
        <h1>資料請求</h1>
    </div>
    <section class="sancare-section-wrapper">
        <div class="form-desc">下記のフォームに必要事項をご入力いただき、「確認」ボタンをクリックしてください。</div>
        <?php echo do_shortcode('[mwform_formkey key="417"]'); ?>
    </section>
</main>
<?php get_footer(); ?>