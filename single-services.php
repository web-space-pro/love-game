<?php
/**
 * The template for displaying all single services posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package love-not-game
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();
            if ( have_rows('components' )  ) :
                while( have_rows('components') )
                {
                    the_row();
                    $layout = get_row_layout();
                    $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "parts" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";
                    if( file_exists( $inclusion ) )
                    {
                        include( $inclusion );
                    }
                }
            else:
                ?>
                <section class="mt-10">
                    <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
                        <div class="container">
                            <?php
                            get_template_part( 'content-parts/content', get_post_type() );
                            ?>
                        </div>
                    </div>
                </section>
            <?php
            endif;
        endwhile;
        ?>

    </main>

<?php
get_footer();
