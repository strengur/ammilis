<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title() ;?></h3>	
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>
	
	<p>Engar færslur til að birta á þessari síðu.</p>

<?php endif; ?>

<?php get_footer(); ?>