<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
		
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( ! $tag ) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
