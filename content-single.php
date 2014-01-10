<?php
/**
 * @package glu
 */
?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php the_time('F jS, Y'); ?>
		</div><!-- .entry-meta -->

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
		</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'glu' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'glu' ), '<span class="edit-link">', '</span>' ); ?>
