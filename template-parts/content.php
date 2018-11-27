<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

 // Code to set variables for source and source url (get_post_meta)
$source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content"><?php the_content(); ?></div>
<h2 class="title"><?php the_title() ?></h2>

	<?php
	// If the source and source url fields are not empty then show them 
	if (!empty($source && $source_url)) {
		?>	<span class="source"><a href="<?php echo $source_url ?>"><?php echo $source ?></a></span>
	<?php
	// Else if the source only has content show the source only
	} elseif (!empty($source)) {
		?> <span><?php $source ?></span> 
	<?php
	// Else show empty span
	} else { ?>
		<span></span>
	<?php } ?>

</article><!-- #post-## -->
<?php  if (is_home() || is_single()) : ?>
	<button type="button" id="new-quote-button">Show Me Another!</button>
<?php  endif; ?>