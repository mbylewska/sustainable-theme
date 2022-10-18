<?php wp_footer(); ?>


<?php if (has_nav_menu('footer-menu')) {
    wp_nav_menu(
        array('theme_location' => 'footer-menu')
    );
}; ?>

</body>

</html>