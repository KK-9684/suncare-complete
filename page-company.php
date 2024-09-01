<?php get_header();?>
<main class="top-page">
    <section class="section-wrapper">
        <div>
            <div class="top-section-titie">
                <h4>COMPANY</h4>
                <h5>会社概要</h5>
            </div>
            <table class="company-table">
                <tbody id="comapany-introduce-table">
                </tbody>
            </table>
        </div>
    </section>
    <section class="section-wrapper pb-100">
        <div>
            <div class="top-section-titie">
                <h4>HISTORY</h4>
                <h5>会社沿革</h5>
            </div>
            <table class="company-table">
                <tbody id="comapany-history-table">
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<script>
$(document).ready(function() {
    $.getJSON("<?php echo get_template_directory_uri(); ?>/assets/json/company-introduce.json")
        .done(function(data) {
            const rows = data.map(element =>
                `<tr><td class="t-label">${element.label}</td><td>${element.value}</td></tr>`
            ).join('');
            $('#comapany-introduce-table').html(rows);
        })
        .fail(function() {
            console.error("Could not find company-introduce.json file");
        });
    $.getJSON("<?php echo get_template_directory_uri(); ?>/assets/json/company-history.json")
        .done(function(data) {
            const rows = data.map(element =>
                `<tr><td class="t-label">${element.label}</td><td>${element.value}</td></tr>`
            ).join('');
            $('#comapany-history-table').html(rows);
        })
        .fail(function() {
            console.error("Could not find company-history.json file");
        });
});
</script>