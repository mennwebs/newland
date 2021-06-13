<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<?php $bodyClass = ''; if (is_active_sidebar( 'headbar_d' )) { $bodyClass = 'headbar-d'; } if (is_active_sidebar( 'headbar_m' )) { $bodyClass .= ' headbar-m'; } ?>

<body <?php body_class($bodyClass); ?>>
    <?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newland' ); ?></a>
    <header id="masthead" class="site-header _heading">
        <div class="s-container">
            <div class="site-branding">
                <div class="site-logo"><?php seed_logo(); ?></div>
            </div>
            <div class="site-toggle"><b></b></div>
            <nav id="site-navigation" class="site-nav-d _desktop">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );?>
            </nav>
            <?php // seed_member_menu() ?>
        </div>
        <nav id="site-nav-m" class="site-nav-m">
            <div class="s-container">
                <?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
            </div>
        </nav>
    </header>
    <div class="site-header-space"></div>
    <div id="content" class="site-content">