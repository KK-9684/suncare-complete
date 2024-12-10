<?php get_header();?>
<main class="top-page">
    <div class="section-title-bar bg-color-d-blue">
        <h5 class="mb-3">EXPENSES</h5>
        <h1>ご利用料金のご案内</h1>
    </div>
    <section class="sancare-section-wrapper">
        <div class="color-d-red">
            <div class="font28 font-Pr6N text-center">入居一時金</div>
            <div class="font40 bold font-Pr6N text-center pb-3">0円プラン料金表</div>
            <div class="expenses-title-underline"></div>
            <div class="d-flex justify-content-center">
                <div class="expenses-title-angle"></div>
            </div>
        </div>
        <div class="my-4 py-2 font15 wrap">
            <?php 
                $text = get_field('0-plan-description', 'option');
                $rows = explode("\n", $text);
                foreach( $rows as $row ) {
                    echo "<div class='d-flex'><span>●</span><span>".$row."</span></div>";
                }
            ?>
        </div>
        <div class="expenses-table-title">介護なし居室 【B・C・Dタイプ】</div>
        <div class="mb-3">月額利用料（1ヶ月を30日として換算しております／料金は税込表示です）</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-6">
                <thead>
                    <th></th>
                    <th>居住費 </th>
                    <th>管理費</th>
                    <th>光熱水費</th>
                    <th>食費</th>
                    <th>合計</th>
                </thead>
                <tbody id="zero-plan-1">
                    <?php 
                    $rows = get_field('no-nursing-care-room', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-label'>".$row['type']."</td><td>".$row['housing-costs']."</td><td>".$row['administrative-costs']."</td><td>".$row['other-costs']."</td><td>".$row['meal']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="mb-5" style="margin-top: -15px">Cタイプ、Dタイプの費用は、2名様での利用料金となります。</div>
        <div class="expenses-table-title">介護付き（要支援・要介護）居室 【Aタイプ】</div>
        <div class="mb-3">月額利用料（1ヶ月を30日として換算しております／料金は税込表示です）</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-6">
                <thead>
                    <th></th>
                    <th>居住費 </th>
                    <th>管理費</th>
                    <th>光熱水費</th>
                    <th>食費</th>
                    <th>合計</th>
                </thead>
                <tbody id="zero-plan-2">
                    <?php 
                    $rows = get_field('rooms-with-nursing-care', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-label'>".$row['type']."</td><td>".$row['housing-costs']."</td><td>".$row['administrative-costs']."</td><td>".$row['other-costs']."</td><td>".$row['meal']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table mt-4 td-5">
                <thead>
                    <th></th>
                    <th>①上記表合計費用</th>
                    <th>介護費用</th>
                    <th>介護保険負担分</th>
                    <th>合計</th>
                </thead>
                <tbody id="zero-plan-3">
                    <?php 
                    $rows = get_field('rooms-with-nursing-care-2', 'option');
                    if( $rows ) {
                        foreach( $rows as $index => $row ) {
                            $colorLabel = '';
                            $colorLine = '';
                            if ($index > 1) {
                                $colorLabel = 'color-label';
                            }
                            if ($index == 2) {
                                $colorLine = 'color-line';
                            }
                            echo "<tr class='".$colorLine ."'><td class='t-label ".$colorLabel."'>".$row['request-number']."</td><td>".$row['above-table-total-costs']."</td><td>".$row['nursing-care-costs']."</td><td>".$row['nursing-and-health']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="sancare-section-wrapper">
        <div class="color-d-red">
            <div class="font28 font-Pr6N text-center">入居一時金</div>
            <div class="font40 bold font-Pr6N text-center pb-3">1,000万円プラン料金表</div>
            <div class="expenses-title-underline"></div>
            <div class="d-flex justify-content-center">
                <div class="expenses-title-angle"></div>
            </div>
        </div>
        <div class="my-4 py-2 font15 wrap">
            <?php 
                $text = get_field('1000-plan-description', 'option');
                $rows = explode("\n", $text);
                foreach( $rows as $row ) {
                    echo "<div class='d-flex'><span>●</span><span>".$row."</span></div>";
                }
            ?>
        </div>
        <div class="expenses-table-title">介護なし居室 【B・C・Dタイプ】</div>
        <div class="mb-3">入居一時金</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-4">
                <thead>
                    <th></th>
                    <th>Bタイプ</th>
                    <th>Cタイプ</th>
                    <th>Dタイプ</th>
                </thead>
                <tbody id="thousand-plan-1">
                    <?php 
                    $rows = get_field('1000-no-nursing-care-room-top', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-label'>".$row['hourly-gold']."</td><td>".$row['b-type']."</td><td>".$row['c-type']."</td><td>".$row['d-type']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="mb-3 mt-4">月額利用料（1ヶ月を30日として換算しております／料金は税込表示です）</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-5">
                <thead>
                    <th></th>
                    <th>管理費</th>
                    <th>光熱水費</th>
                    <th>食費</th>
                    <th>合計</th>
                </thead>
                <tbody id="thousand-plan-2">
                    <?php 
                    $rows = get_field('1000-no-nursing-care-room', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-label'>".$row['type']."</td><td>".$row['administrative-costs']."</td><td>".$row['other-costs']."</td><td>".$row['meal']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="mb-5" style="margin-top: -15px">Cタイプ、Dタイプの費用は、2名様での利用料金となります。</div>
        <div class="expenses-table-title">介護付き（要支援・要介護）居室 【Aタイプ】</div>
        <div class="mb-3">入居一時金</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-2">
                <tbody id="thousand-plan-3">
                    <?php 
                    $field = get_field('1000-rooms-with-nursing-care-top', 'option');
                    echo "<tr><td class='t-label'>入居一時金</td><td>".$field."</td></tr>";
                ?>
                </tbody>
            </table>
        </div>
        <div class="mb-3 mt-4">月額利用料（1ヶ月を30日として換算しております／料金は税込表示です）</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table td-5">
                <thead>
                    <th></th>
                    <th>管理費</th>
                    <th>光熱水費</th>
                    <th>食費</th>
                    <th>合計</th>
                </thead>
                <tbody id="thousand-plan-4">
                    <?php 
                    $rows = get_field('1000-rooms-with-nursing-care', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-label'>".$row['type']."</td><td>".$row['administrative-costs']."</td><td>".$row['other-costs']."</td><td>".$row['meal']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table mt-4 td-5">
                <thead>
                    <th></th>
                    <th>①上記表合計費用</th>
                    <th>介護費用</th>
                    <th>介護保険負担分</th>
                    <th>合計</th>
                </thead>
                <tbody id="thousand-plan-5">
                    <?php 
                    $rows = get_field('1000-rooms-with-nursing-care-2', 'option');
                    if( $rows ) {
                        foreach( $rows as $index => $row ) {
                            $colorLabel = '';
                            $colorLine = '';
                            if ($index > 1) {
                                $colorLabel = 'color-label';
                            }
                            if ($index == 2) {
                                $colorLine = 'color-line';
                            }
                            echo "<tr class='".$colorLine."'><td class='t-label ".$colorLabel."'>".$row['request-number']."</td><td>".$row['above-table-total-costs']."</td><td>".$row['nursing-care-costs']."</td><td>".$row['nursing-and-health']."</td><td class='font-SourceHanSansJP-M'>".$row['total']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="bg-color-d-blue expenses-table-title-2">
            オプションサービスの費用例（各タイプ共通）</div>
        <div class="expenses-table-wrapper">
            <table class="expenses-table mt-4 td-2">
                <thead>
                    <th>サービス内容</th>
                    <th>料金（税込表示です）</th>
                </thead>
                <tbody id="thousand-plan-6">
                    <?php 
                    $rows = get_field('services-costs', 'option');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            echo "<tr><td class='t-wide-label'>".$row['services']."</td><td>".$row['costs']."</td></tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="sancare-section-wrapper pt-0">
        <p class="main-costs">■主な費用の内訳</p>
        <?php 
            $rows = get_field('main-costs', 'option');
            if( $rows ) {
                foreach( $rows as $index => $row  ) {
                    echo "<div class='d-flex wrap'><div></div><div class='color-d-blue font18 font-SourceHanSansJP-M'>".($index + 1).".</div><div><div class='color-d-blue font18 font-SourceHanSansJP-M mb-1'>".$row['title']."</div><p class='font16'>".$row['description']."</p></div></div>";
                }
            }
        ?>
    </section>
</main>
<?php get_footer(); ?>
