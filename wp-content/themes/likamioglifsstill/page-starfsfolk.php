<?php
	/* Template Name: Starfsfólk */
?>

<?php get_header(); ?>

<div class="single-page employee-clearfix background-img background-img-5">
	<div class="employee-profiles">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="article-columns-border-top"></div>
				<center><h1><?php the_title() ;?></h1></center>
			<div class="article-columns-border-bottom"></div>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>Engar færslur til að birta á þessari síðu.</p>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>

	