<header class="header container">
	<div class="header__logo">
		<div class="header-hamburger">
			<span></span>
		</div>
		<h2 class="header__logo--title">
			<a class="home__url" href="<?php echo get_home_url();?>">Denise.
		</h2>
	</div>
	<nav class="header__menu">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>
</header>
