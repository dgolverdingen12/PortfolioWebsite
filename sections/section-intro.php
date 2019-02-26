<section class="intro" id="intro">
	<div class="container">
		<h1 class="intro__block--heading">
			<?php echo rwmb_meta( 'pagina_titel', array('type=text') ); ?>
		</h1>
		<hr class="style-eight">
		<div class="intro__block">
			<div class="intro__block--left">
				<div class="intro__block--profile">
					<?php 
						$images = rwmb_meta( 'profiel_foto', array('image_advanced') ); // Since 4.8.0
							if ( !empty( $images ) ) {
							foreach ( $images as $image ) {
								echo "<div class='intro__block--profile-photo' style='background-image: url( " . $image['full_url'] . " );'></div>";
							}
						}
					?>
				</div>
				<div class="intro__block--left-name">
					<h2 class="intro__block--name">
						<?php echo rwmb_meta( 'profiel_naam', array('type=text') ); ?>
					</h2>
					<h2 class="intro__block--name-bottom">
						<?php echo rwmb_meta( 'profiel_functie', array('type=text') ); ?>
					</h2>
					<p>
						<a href="<?php echo rwmb_meta('github_link', array('type=text'));?>" target="_blank">
							<button class="btn-icons--home"><i class="fab fa-github-alt fa-2x"></i></button>
						</a>
						<a href="<?php echo rwmb_meta('linkedin_link', array('type=text'));?>" target="_blank">
							<button class="btn-icons--home"><i class="fab fa-linkedin-in fa-2x"></i></button>
						</a>
					</p>
				</div>
			</div>
			<div class="intro__block--right">
				<?php echo rwmb_meta('profiel_intro', array('type=wysiwyg')); ?>
			</div>
		</div>
	</div>
</section>