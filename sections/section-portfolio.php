<section class="portfolio">
	<div class="portfolio__items">
		<h2 class="portfolio__item-title"><?php echo rwmb_meta( 'pagina_titel_links', array('type=text') ); ?></h2>
		<span class="portfolio__divider"><img class="portfolio__icons" src="<?php echo get_template_directory_uri(); ?>/code-icon.svg" alt="icon"></span>
		<div class="slider">
			<div class="portfolio__item-wrapper">
				<a href="/code">
					<?php 
						$images = rwmb_meta( 'portfolio_code_foto', array('image_advanced') ); // Since 4.8.0
							if ( !empty( $images ) ) {
							foreach ( $images as $image ) {
							echo "<div class='portfolio__item-image' style='background-image: url( " . $image['full_url'] . " );'></div>";
							}
						}
					?>
				</a>
			</div>
			<div class="portfolio__progress-bar">
				<?php 
					foreach ( $images as $image ) {
						echo "<span class='portfolio__progress-item'></span>";
					}
				?>
			</div>
		</div>
		<a href="/code-portfolio">
			<button class="btn-show">show me more</button>
		</a>
	</div>
	<div class="portfolio__items">
		<h2 class="portfolio__item-title"><?php echo rwmb_meta( 'pagina_titel_rechts', array('type=text') ); ?></h2>
		<span class="portfolio__divider"><img class="portfolio__icons" src="<?php echo get_template_directory_uri(); ?>/design-icon.svg" alt="icon"></span>
		<div class="slider">
			<div class="portfolio__item-wrapper">
				<a href="/design">
					<?php 
						$images = rwmb_meta( 'portfolio_design_foto', array('image_advanced') ); // Since 4.8.0
							if ( !empty( $images ) ) {
							foreach ( $images as $image ) {
							echo "<div class='portfolio__item-image' style='background-image: url( " . $image['full_url'] . " );'></div>";
							}
						}
					?>
				</a>
			</div>
			<div class="portfolio__progress-bar">
				<?php 
					foreach ( $images as $image ) {
						echo "<span class='portfolio__progress-item'></span>";
					}
				?>
			</div>
		</div>
		<a href="/design-portfolio"><button class="btn-show">show me more</button></a>
	</div>
</section>
