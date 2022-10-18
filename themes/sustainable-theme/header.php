<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <title>Sustainable Theme</title>

    <?php wp_head(); ?>


</head>

<body>
    <header>

        <?php if (has_nav_menu('main-menu')) {
            wp_nav_menu(
                array('theme_location' => 'main-menu', 'menu_class' => 'main-menu',)
            );
        }; ?>

    </header>