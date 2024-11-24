<?php get_header();?>
<main class="top-page">
    <section class="section-wrapper">
        <div>
            <div class="top-section-title">
                <h4>COMPANY</h4>
                <h5>会社概要</h5>
            </div>

            <table class="company-table">
                <tbody id="comapany-introduce-table">
                    <?php
                        $companyName = get_field_object('company-name', 'option');
                        $companyEstablish = get_field_object('company-establish', 'option');
                        $companyCeo = get_field_object('company-ceo', 'option');
                        $companyMembers = get_field_object('company-members', 'option');
                        $companyAddress = get_field_object('company-address', 'option');
                        $companyCapital = get_field_object('company-capital', 'option');
                        echo "<tr><td class='t-label'>".$companyName['label']."</td><td>".$companyName['value']."</td></tr>";
                        echo "<tr><td class='t-label'>".$companyEstablish['label']."</td><td>".$companyEstablish['value']."</td></tr>";
                        echo "<tr><td class='t-label'>".$companyCeo['label']."</td><td>".$companyCeo['value']."</td></tr>";
                        echo "<tr><td class='t-label'>".$companyMembers['label']."</td><td>".$companyMembers['value']."</td></tr>";
                        echo "<tr><td class='t-label'>".$companyAddress['label']."</td><td>".$companyAddress['value']."</td></tr>";
                        echo "<tr><td class='t-label'>".$companyCapital['label']."</td><td>".$companyCapital['value']."</td></tr>";
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="section-wrapper pb-80">
        <div>
            <div class="top-section-title">
                <h4>HISTORY</h4>
                <h5>会社沿革</h5>
            </div>
            <table class="company-table">
                <tbody id="comapany-history-table">
                    <?php 
                        $rows = get_field('company-history', 'option');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                echo "<tr><td class='t-label'>".$row['history-year']."</td><td>".$row['history-content']."</td></tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<script>
</script>