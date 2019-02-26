<section class="home">
	<?php require_once('section-navigation.php'); ?>
	<div class="blokje"><h2 class="pixel-blokje"></h2></div>
		<canvas class="home__mouse" id="canvas" width="1000" height="450"></canvas>
		<div class="container container--homepage">
			<div class="home__text">
				<h1 class="home__title"><span class="home__title--small">FRONT-END DEVELOPER &amp; DESIGNER</span>
					WHEN CODE &amp; DESIGN
					COME TOGETHER
				</h1>
			</div>
		</div>
		<div class="home__bar">
			<div class="home__bar-item home__bar-item home__bar-item--line">
				<img class="home__bar-image" src="<?php echo get_template_directory_uri(); ?>/code-icon.svg">
				<div class="home__bar-text">
					<h2 class="home__bar-heading">Code</h2>
					<p class="home__bar-p">We are working with the newest techniques, like: Wordpress, SASS, CSS, SCSS, HTML(5).</p>
			</div>
		</div>
		<div class="home__bar-item home__bar-item--active">
			<img class="home__bar-image" src="<?php echo get_template_directory_uri(); ?>/design-icon.svg">
			<div class="home__bar-text">
				<h2 class="home__bar-heading">Design</h2>
				<p class="home__bar-p">I'm a front-end developer with a passion for styling. I would like to show you my design work. </p>	
			</div>
		</div>
	</div>
</section>
