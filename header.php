<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="overflow-protector">
        <header>
            <div id="header-slope" class="bg-primary"></div>
            <div id="header-background" class="bg-primary"></div>
            <a href="#"><h1>cantwashmyhands</h1></a>
            <hr class="bg-secondary" />
            <div id="mobile-menu" onclick="expandMobileMenu()">
                <hr class="bg-secondary" />
                <hr class="bg-secondary" />
                <hr class="bg-secondary" />
            </div>
            <nav id="menu">
                <ul>
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['header-menu']);
                $menu_items = wp_get_nav_menu_items( $menu->term_id, array('order' => 'DESC'));
                for ($i = 1; $i < sizeof($menu_items); $i+=1) {
                    $menu_item = $menu_items[$i];
                    $id = get_post_meta($menu_item->ID, '_menu_item_object_id', true);
                    $section = get_page($id);?>
                    <a href="#<?php echo $section->post_name; ?>">
                        <li>
                            <?php echo $section->post_title; ?>
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                <?php } ?>
                </ul>
            </nav>
        </header>
