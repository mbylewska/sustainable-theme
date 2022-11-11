<?php wp_footer(); ?>

<div class="footer">

    <p>Copyrights @ Marta Bylewska</p>
    <?php if (has_nav_menu('footer-menu')) {
        wp_nav_menu(
            array('theme_location' => 'footer-menu')
        );
    }; ?>



</div>
</body>

</html>