<footer class="footer">
    <div class="d-flex flex-wrap justify-content-center align-items-center">
        <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="東洋ウェルフェア株式会社"
                class="log-img" />
        </a>
        <a href="https://ota-oil.co.jp/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo-otaoil.png" alt="太田油脂株式会社"
                class="log-img" />
        </a>
    </div>
    <div class="footer-menu-items mt-3">
        <div class="menu-text-item-wrapper">
            <div class="menu-text-item">有料老人ホーム</div>
            <div class="menu-text-item-menu hide">
                <a href="<?php echo esc_url( home_url() ); ?>/san-care/" class="menu-text-item-menu-item">
                    <div>介護付有料老人ホーム<br>サン・ケア レジデンス</div>
                    <span>→</span>
                </a>
            </div>
        </div>
        <div class="menu-text-item-wrapper">
            <div class="menu-text-item">グループホーム</div>
            <div class="menu-text-item-menu hide">
                <a href="<?php echo esc_url( home_url() ); ?>/grouphome-fukuoka/" class="menu-text-item-menu-item">
                    <div>グループホーム燦 ふくおか</div>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/grouphome-mutsumi/" class="menu-text-item-menu-item">
                    <div>グループホーム燦　むつみ</div>
                    <span>→</span>
                </a>
            </div>
        </div>
        <div class="menu-text-item-wrapper">
            <div class="menu-text-item">デイサービス</div>
            <div class="menu-text-item-menu hide">
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-azukizaka/" class="menu-text-item-menu-item">
                    <div>デイサービスセンター燦 あずき坂</div>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-umezono/" class="menu-text-item-menu-item">
                    <div>デイサービスセンター燦 うめぞの</div>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-tenma/" class="menu-text-item-menu-item">
                    <div>デイサービスセンター燦 てんま</div>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hakken/" class="menu-text-item-menu-item">
                    <div>デイサービスセンター燦 はっけん</div>
                    <span>→</span>
                </a>
                <a href="<?php echo esc_url( home_url() ); ?>/dayservice-hane/" class="menu-text-item-menu-item">
                    <div>デイサービスセンター燦 はね</div>
                    <span>→</span>
                </a>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url() ); ?>/company/" class="menu-text-item"><span>会社概要</span></a>
        <a href="<?php echo esc_url( home_url() ); ?>/privacy-policy/"
            class="menu-text-item"><span>個人情報保護について</span></a>
        <a href="<?php echo esc_url( home_url() ); ?>/work-environment/"
            class="menu-text-item"><span>職場環境等の取り組みについて</span></a>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/function.js"></script>

</html>