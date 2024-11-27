<?php
/* Template Name: entry-confirm Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-blue">
        <h5 class="mb-3">ENTRY</h5>
        <h1>新卒・キャリア採用 エントリーフォーム</h1>
    </div>
    <section class="sancare-section-wrapper confirm">
        <?php echo do_shortcode('[mwform_formkey key="423"]'); ?>
    </section>
</main>
<?php get_footer(); ?>
<script>
</script>