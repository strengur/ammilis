<header>
	<div class="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="Merki fyrirtækisins."></a>
	</div>
	
	<div class="logo-mobile">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/ll-logo.svg" alt="Merki fyrirtækisins"></a>
	</div>
	
	<div class="navigation">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>">HEIM</a></li>
			<li><a href="<?php bloginfo('url'); ?>/greinar">GREINAR</a></li>
			<li><a href="<?php bloginfo('url'); ?>/netklubbur-likama-lifsstils">NETKLÚBBUR</a></li>
			<li><a href="<?php bloginfo('url'); ?>/hafa-samband">HAFA SAMBAND</a></li>
			<li><a href="http://n.likamioglifsstill.is/index.php?route=common/home&tracking=555a2f9fb4230" class="navigation-online-store button-blue-gradient button">NETVERSLUN</a></li>
		</ul>
	</div>
	
	<div class="navigation-mobile">
		<ul>
			<li><a a href="http://n.likamioglifsstill.is/index.php?route=common/home&tracking=555a2f9fb4230" id="mobile-onlinestore-button" class="navigation-online-store button-blue-gradient button">NETVERSLUN</a></li>
			<li><a class="navigation-mobile-menu button-grey-gradient button">
					<img src="<?php bloginfo('template_directory');?>/images/icons/menu.svg" alt="Opna Valmynd">
					<img style="display: none;" src="<?php bloginfo('template_directory');?>/images/icons/cancel.svg" alt="Loka Valmynd">
				</a>
			</li>
		</ul>
	</div>
	
	<div class="navigation-mobile-menu-closed">

		<span><?php wp_nav_menu( array('menu' => 'Main Menu')); ?></span>

<!--
		<ul>
			<li><a href="http://n.likamioglifsstill.is/index.php?route=common/home&tracking=555a2fe30471a">NETVERSLUN</a></li>
			<li><a href="<?php bloginfo('url'); ?>">HEIM</a></li>
			<li><a href="<?php bloginfo('url'); ?>/greinar">GREINAR</a></li>
			<li><a href="<?php bloginfo('url'); ?>/netklubbur-likama-lifsstils">NETKLÚBBUR</a></li>
			<li><a href="<?php bloginfo('url'); ?>/hafa-samband">HAFA SAMBAND</a></li>
		</ul>
-->
	</div>
</header>