<?php wp_head(); ?>

<?php ini_set('display_errors', 1); 
error_reporting(E_ALL); ?>

<?php echo "Hallo"; ?>

<?php
	
	$uploads = wp_upload_dir();				
	$scanned_directory = array_diff(scandir($uploads['basedir'].'/banners/header-images'), array('..', '.'));
	$rand_images = array_rand($scanned_directory);

	
	echo '<img class="banners-img" src="';
	echo $uploads['baseurl'].'/banners/header-images/' . ($scanned_directory[$rand_images]);
	echo '" alt="Banner image">';

	echo '<div class="banner-headline">';
	echo '<h1>Gott úrval af frábærum vörum!</h1>';
	echo '</div>';
?>