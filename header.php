<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package love-not-game
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>

    <?php
    if (function_exists('get_field')) {
        $location = get_field('op_header_location', 'options');
        $contact = get_field('op_header_contact', 'options');
        $cta_btn = get_field('op_header_cta_buttun', 'options');
    }
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <a class="header__logo logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" aria-label="Home">
        <div class="flex items-center">
            <?php if ( has_custom_logo() ) : ?>
                <img
                        width="187"
                        height="48"
                        src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>"
                        alt="<?php bloginfo('name'); ?>">
            <?php else : ?>
                <span class="text-xl font-bold"><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </div>
    </a>
</header>
