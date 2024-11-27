<?php
/* Template Name: form-entry Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-blue">
        <h5 class="mb-3">ENTRY</h5>
        <h1>新卒・キャリア採用 エントリーフォーム</h1>
    </div>
    <section class="sancare-section-wrapper">
        <div class="form-desc">下記のフォームに必要事項をご入力いただき、「確認」ボタンをクリックしてください。<br>
            応募内容をご確認の上、当社の採用担当より数日～1週間以内にメールもしくは電話にてお返事をさせて頂きます。</div>
        <?php echo do_shortcode('[mwform_formkey key="423"]'); ?>
    </section>
</main>
<?php get_footer(); ?>
<script>
</script>