<?php get_header(); ?>

<div class="banners">
	<img class="banners-img" src="<?php bloginfo('template_directory');?>/images/banners/nike-1.jpg" alt="Banner image">

	<div class="banner-headline">

<!-- 			<img id="banner-headline-image-left" src="images/icons/left-side-logo-blue.png" alt="Vinstri hlið af LL logoi"> -->
			<h1>
				Við hjálpum þér að ná þínum markmiðum!
			</h1>
<!-- 			<img id="banner-headline-image-right" src="images/icons/right-side-logo-blue.png" alt="Hægri hlið af LL logoi"> -->
	</div>



</div>

<div class="banner-button-clearfix">
		<div class="banner-button">
			<a href="#" class="banner-button-button button-blue-gradient button">Nánar...</a>
		</div>
	</div>

<div class="arrow-down-clearfix">
	<div class="arrow-down">
		<img src="<?php bloginfo('template_directory');?>/images/icons/arrow-down.png" alt="">
	</div>
</div>

<div class="social-media-icons">

	<a href="http://facebook.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/facebook.png" alt="Smámynd af Facebook merkinu"></a>
	<a href="http://instagram.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/instagram.png" alt="Smámynd af Facebook merkinu"></a>
	<a href="http://twitter.com/likamilifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/twitter.png" alt="Smámynd af Facebook merkinu"></a>
	<a href="http://youtube.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/youtube.png" alt="Smámynd af Facebook merkinu"></a>

</div>

<div class="article-columns background-img background-img-1" data-type="background" data-speed="5">

<!-- 	<img src="images/banners/female-running.jpg" alt="Bakgrunnsmynd þar sem nýjustu greinarnar birtast."> -->

	<div class="article-columns-content">

		<div class="article-columns-border-top"></div>

		<div class="newest-article">
			<h1>NÝJUSTU GREINAR</h1>
		</div>

		<div class="article-columns-border-bottom"></div>


		<div class="article-columns-logo-left">
			<img src="<?php bloginfo('template_directory');?>/images/icons/left-side-logo-blue.png" alt="Vinstri hlið af LL logoi">
		</div>

		<div class="article-columns-center-fix">
			<div class="article-column-one">

				<?php

					$args = array('posts_per_page' => 1, 'offset' => 0);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();

							echo '<a href="';
							the_permalink();
							echo '"><h1>';
							the_title();
							echo '</a></h1>';
							the_excerpt();
						}

						wp_reset_postdata();

					} else {

						echo "Því miður finnst engin grein til að birta";
					}
				?>

			</div>

			<div class="article-column-two">

				<?php

					$args = array('posts_per_page' => 1, 'offset' => 1);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();

							echo '<a href="';
							the_permalink();
							echo '"><h1>';
							the_title();
							echo '</a></h1>';
							the_excerpt();
						}

						wp_reset_postdata();

					} else {
						echo "Því miður finnst engin grein til að birta";
					}
				?>
			</div>
		</div>

		<div class="article-columns-logo-right">
			<img src="<?php bloginfo('template_directory');?>/images/icons/right-side-logo-blue.png" alt="Hægri hlið af LL logoi">
		</div>

	</div>
</div>

<div class="ad-banners">
	<div class="ad-banners-frame">
		<img src="<?php bloginfo('template_directory');?>/images/banners/get-fit2.jpg" alt="Ad banner description">
	</div>
</div>

<div class="section-2 background-img background-img-2" data-type="background" data-speed="5">

	<div class="article-columns-content">
		<div class="article-columns-border-top"></div>

		<div class="newest-article">
				<h1>NÝJUSTU GREINAR</h1>
		</div>

		<div class="article-columns-border-bottom"></div>
	</div>

</div>

<?php get_footer(); ?>