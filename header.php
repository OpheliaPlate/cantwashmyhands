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
                    <a href="#aktuelle-situation">
                        <li>
                            aktuelle situation
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                    <a href="#unsere-forderungen">
                        <li>
                            unsere forderungen
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                    <a href="#aktiv-werden">
                        <li>
                            aktiv werden
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                    <a href="#persoenliche-einblicke">
                        <li>
                            persönliche einblicke
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                    <a href="#unterstuetzer_innen-netzwerk">
                        <li>
                            unterstützer*innen / netzwerk
                            <hr class="bg-secondary" />
                            <hr class="bg-secondary" />
                        </li>
                    </a>
                </ul>
            </nav>
        </header>
