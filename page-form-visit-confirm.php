<?php
/* Template Name: visit-confirm Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-red">
        <h5 class="mb-3">VISIT</h5>
        <h1>見学予約</h1>
    </div>
    <section class="sancare-section-wrapper confirm">
        <?php echo do_shortcode('[mwform_formkey key="426"]'); ?>
    </section>
</main>
<?php get_footer(); ?>