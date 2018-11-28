<?php
/**
 * The template for displaying all submit page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section>
                
                <div>
                    <?php the_title(); ?>
                </div>

                <?php // If user is logged in & can edit posts ?>
                    <!-- display form html -->
                <?php if ( is_user_logged_in() ) : ?>
                    <form id="submitQuote">
                        <h2>Author of Quote</h2>
                        <input type="text" id="update-title" />
                        <h2>Quote</h2>
                        <textarea id="quote"></textarea>
                        <h2>Where did you find this quote? (e.g. book name)</h2>
                        <input type="text" id="quote-where" />
                        <h2>Provide the url of the quote source, if available.</h2>
                        <input type="text" id="quote-url" />
                        <input type="submit" id="submit" value="Submit Quote" />
                    </form>

                    <p class='submit-success'></p>
                    <p class='submit-failure'></p>
                    <?php  else : ?>
                         <p><a href="<?php echo esc_url( home_url( ‘/’ ) ); ?>/wp-login.php">Click here to login.</a></p>
                      <?php  endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>