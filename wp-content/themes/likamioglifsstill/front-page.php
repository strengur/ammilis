<?php get_header(); ?>

<div class="banners">
	
	
	<?php
		
		$uploads = wp_upload_dir();				
		$scanned_directory = array_diff(scandir($uploads['basedir'].'/banners/header-images'), array('..', '.'));
		$rand_images = array_rand($scanned_directory);
	?>
		
	<img class="banners-img" src="<?php echo $uploads['baseurl'].'/banners/header-images/' . ($scanned_directory[$rand_images]);?>" alt="Banner image">

	<div class="banner-headline">
			<h1>
				Vilt þú gjöf frá okkur!
			</h1>
	</div>

</div>

<div class="banner-button-clearfix">
		<div class="banner-button">
			<a href="http://n.likamioglifsstill.is/index.php?route=common/home&tracking=555a27b0d3d9f" class="banner-button-button button-orange-gradient button">JÁ TAKK!</a>
		</div>
	</div>

<div class="arrow-down-clearfix">
	<div class="arrow-down">
		<img src="<?php bloginfo('template_directory');?>/images/icons/arrow-down.png" alt="">
	</div>
</div>

<div class="social-media-icons">

	<a href="http://facebook.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/facebook.png" alt="Smámynd af Facebook merkinu" title="Fylgstu með okkur á Facebook."></a>
	<a href="http://instagram.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/instagram.png" alt="Smámynd af Instagram merkinu" title="Fylgstu með okkur á Instagram"></a>
	<a href="http://twitter.com/likamilifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/twitter.png" alt="Smámynd af Twitter merkinu" title="Fylgstu með okkur á Twitter"></a>
	<a href="http://youtube.com/likamioglifsstill"><img src="<?php bloginfo('template_directory');?>/images/icons/youtube.png" alt="Smámynd af YouTube merkinu" title="Smelltu hér til að sjá myndbönd á YouTube"></a>
	<a href="http://likamioglifsstill.is/stadsetning/"><img src="<?php bloginfo('template_directory');?>/images/icons/stadsetning.png" alt="Staðsetning" title="Smelltu hér fyrir upplýsingar um staðsetningu ofl."></a>

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
		<a href="<?php bloginfo('url'); ?>/hafa-samband"><img src="<?php bloginfo('template_directory');?>/images/banners/newbanner2.jpg" alt="Ad banner description"></a>
	</div>
</div>

<div class="section-2 background-img background-img-2" data-type="background" data-speed="5">

	<div class="featured-products">
		<div class="article-columns-border-top"></div>

		<div class="newest-article">
				<h1>ÁHUGAVERÐAR VÖRUR</h1>
		</div>

		<div class="article-columns-border-bottom"></div>

	</div>

	<div class="products">
			<a href="http://n.likamioglifsstill.is/limitless-signature-bikini"><img src="<?php bloginfo('template_directory');?>/images/products/1.jpg" alt="Ad banner description"></a>
			<a href="http://n.likamioglifsstill.is/limitless-signature-thong"><img src="<?php bloginfo('template_directory');?>/images/products/2.jpg" alt="Ad banner description"></a>
			<a href="http://n.likamioglifsstill.is/yoga-handklaedi"><img src="<?php bloginfo('template_directory');?>/images/products/3.jpg" alt="Ad banner description"></a>
			<a href="http://n.likamioglifsstill.is/legghlifar"><img src="<?php bloginfo('template_directory');?>/images/products/4.jpg" alt="Ad banner description"></a>
	</div>

</div>

<?php get_footer(); ?>