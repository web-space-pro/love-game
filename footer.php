<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package love-not-game
 */

?>

<?php
if (function_exists('get_field')) {
    $test = get_field('test', 'options');
}
?>
	<footer class="footer">

	</footer>

<?php wp_footer(); ?>

</body>
</html>
