<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-blue">
        <h5 class="mb-3">RECRUIT</h5>
        <h1>採用情報</h1>
    </div>
    <section class="section-wrapper pt-0 pb-80">
        <div class="recruit-description">
            <?php
                $introduceTitle = get_field('recruitment-introduce-title', 'option');
                $introduceDescription = get_field('recruitment-introduce-description', 'option');           
               
                echo "<h2>".$introduceTitle."</h2>";
                echo "<div class='text-start font15 my-30'>".$introduceDescription."</div>";
            ?>
            <a href="<?php echo esc_url( home_url() ); ?>/work-environment/">
                <button class="work-environment-btn bg-color-d-blue font15">職場環境等の取り組みについて
                </button>
            </a>
        </div>
        <div class="mb-5 pb-3 font20 text-center">
            募集要項一覧
        </div>
        <div class="recruit-viewer">
            <p class="font12">ご覧になりたい項目をクリックしてください</p>
            <div class="recruit-list">
                <?php 
                    $rows = get_field('recruitment', 'option');
                    if( $rows ) {
                        foreach( $rows as $index => $row  ) {
                            echo "<div class='recruit-item'><span> &nbsp ".$row['recruitment-title']."<br>".$row['recruitment-category']."</span>".($row['recruitment-content'] ? "<span class='recruit-item-icon'> ＋ </span>" : '' )."</div>";
                            
                            if ($row['recruitment-content']) {
                                echo "<div class='recruit-item-menu hide'>";

                                foreach( $row['recruitment-content'] as $con) {
                                    if (isset($con)) {
                                        echo "<div class='mb-2 font16 font-SourceHanSansJP-M color-d-blue'>".$con['カテゴリー']." 募集要項</div><table class='recruit-table'>";
                                        foreach( $con as $field_name => $item) {
                                            if ($field_name != 'カテゴリー' && $item) {
                                                echo "<tr><td class='rt-label'>".$field_name."</td><td>". $item."</td></tr>";
                                            }
                                        }
                                        echo "</table>";
                                    }
                                }
                                echo "</div>";
                            }                           
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <div class="text-center container-fluid bg-color-l-gray py-80">
        <div class="mb-2 font16">随時募集しています。</div>
        <div class="mb-3 font16">「ENTRY」ボタンよりご応募ください。</div>
        <a href="<?php echo esc_url( home_url() ); ?>/form-entry/">
            <button class="entry-btn bg-color-d-blue font20">ENTRY
            </button>
        </a>
    </div>
</main>
<?php get_footer(); ?>

<script>
$(document).ready(function() {
    $(".recruit-item").on("click", function() {
        if (!$(this).next().hasClass('hide')) {
            $(this).next().toggleClass('hide');
            $(this).find('.recruit-item-icon').text('＋')
            return;
        }
        $('.recruit-list').find(".recruit-item-menu").addClass('hide');
        $(this).next().toggleClass('hide');
        $('.recruit-list').find(".recruit-item-icon").text('＋');
        $(this).find('.recruit-item-icon').text('ー')
    });
});
</script>
