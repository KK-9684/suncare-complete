<footer class="footer">
    <div class="d-flex flex-wrap justify-content-center">
        <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo-toyowelfare.png"
                alt="東洋ウェルフェア株式会社" class="log-img" />
        </a>
        <a href="https://ota-oil.co.jp/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo-otaoil.png" alt="太田油脂株式会社"
                class="log-img" />
        </a>
    </div>
    <div class="footer-menu-items mt-3">
        <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item"><span>有料老人ホーム</span></a>
        <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item"><span>グループホーム</span></a>
        <a href="<?php echo esc_url( home_url() ); ?>" class="menu-text-item"><span>デイサービス</span></a>
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