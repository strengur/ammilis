<?php
	/* Template Name: Greinar */
?>

<?php get_header(); ?>

<div class="single-page pages-clearfix background-img background-img-3">
	<div class="single-page-content article-list">
		
		<div class="article-columns-border-top"></div>
			<center><h1><?php the_title(); ?></h1></center>
		<div class="article-columns-border-bottom"></div>
		
		<?php	
			$the_query = new WP_Query( 'category_name=flokkur-frettir' );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<hr>
		
			<h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
			<?php the_excerpt(); ?>
			
		<?php endwhile; else: ?>
			
			<p>There are no posts or pages here</p>
		
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>