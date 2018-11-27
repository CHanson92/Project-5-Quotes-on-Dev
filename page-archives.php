<?php /* Template name: archives */
/**
 * The template for displaying Archives Page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section>
                <!-- Display Author links to show archive of single post by 
                author with 'Show me another' button -->
                <?php 
                    // get_posts() with posts_per_page as arg
                    // foreach and setup_postdata
                ?>
            </section>

            <section>
                <!-- Display Category links to show archive of posts of this 
                category -->
                <?php 
                    // Use WordPrewss method to list your categories
                    // No loop required
                ?>
            </section>

            <section>
                <!-- Display Tags links to show archive of posts of this tag -->
                <?php 
                    // Use WordPrewss method to show a tag cloud
                    // No loop required
                ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
