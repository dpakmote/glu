<?php
/**
 * @package glu
 */
?>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta">
			<?php the_time('F jS, Y'); ?>
	</div><!-- .entry-meta -->
	<?php endif; ?>

<?php if ( is_search() ) : // Only display Excerpts for Search ?>
<div class="entry-summary">
	<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'glu' ) ); ?>
	<a class="more forward" href="<?php the_permalink(); ?>" rel="bookmark">Continue Reading</a>

</div><!-- .entry-summary -->
<?php else : ?>
<div class="entry-content">
	<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'glu' ) ); ?>
	<a class="more forward" href="<?php the_permalink(); ?>" rel="bookmark">Continue Reading</a>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'glu' ),
			'after'  => '</div>',
		) );
	?>
</div><!-- .entry-content -->
<?php endif; ?>