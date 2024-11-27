<?php
/* Template Name: contact-confirm Template */
?>
<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-green">
        <h5 class="mb-3">CONTACT</h5>
        <h1>お問い合わせ</h1>
    </div>
    <section class="sancare-section-wrapper confirm">
        <?php echo do_shortcode('[mwform_formkey key="419"]'); ?>
    </section>
</main>
<?php get_footer(); ?>

<script>
</script>