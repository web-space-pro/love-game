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
      <div class="container">
          <div class="flex item-center justify-between flex-wrap">
            <div class="footer__copyright">
                © <?= date("Y")?> ИП Константинопольский Константин Константинович
            </div>
           <div class="footer__develop">
                  Разработано
                  <a href="https://web-space.pro">web-space.pro</a>
              </div>
          </div>
      </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
