<?php get_header(); ?>

<div class="single-page contact-clearfix background-img background-img-4">
	<div class="contact-form">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<center><h1><?php the_title() ;?></h1></center>
			<hr>
			
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			
			<p>Engar færslur til að birta á þessari síðu.</p>
		
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>

	