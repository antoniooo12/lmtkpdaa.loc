<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lmtkpdaa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'lmtkpdaa'); ?></a>

    <header id="masthead" class="site-header">

        <div class="site-branding">
            <div class="header_top_container">
                <div class="header_logo__wrapper">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <?php
                get_search_form();
                ?>
                <div></div>
            </div>
            <?php
            $lmtkpdaa_description = get_bloginfo('description', 'display');
            if ($lmtkpdaa_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $lmtkpdaa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->
        <?php
        ?>

        <nav id="site-navigation" class="nav-menu__container">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'lmtkpdaa'); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
