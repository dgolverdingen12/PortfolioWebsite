<?php 
	if (!isset($getLastPost))
		$getLastPost = false;

	$current_post = get_post();
	$current_post_id = get_the_ID();
	$current_post_title = get_the_title();
	$current_post_content = $current_post->post_content;

	if ($getLastPost) {
		$args = array(
			'post_type' => $postType,
			'posts_per_page' => 1
		);
		$lastPost = wp_get_recent_posts($args, OBJECT);

		foreach( $lastPost as $post ) {
			$current_post_id = $post->ID;
			$current_post_title = $post->post_title;
			$current_post_content = $post->post_content;
			$current_post = $post;
		}
		wp_reset_query();
	}
?>

<span class="portfolio__divider"><img class="portfolio__icons" src="<?php echo get_template_directory_uri(); ?>/<?php echo $postType ?>-icon.svg" alt="icon"></span>
<div class="intro__block">
	<div class="intro__block--left">
	<?php 
		query_posts( array('posts_per_page' => 1, 'post_type' => $postType) );
		if ( have_posts() ) : while ( have_posts() ) : the_post();  
	
		$notFound = false;
			endwhile; else : 
		$notFound = true;
			endif;
		$loop = new WP_Query( array( 'post_type' => $postType ) );
		while ( $loop->have_posts() ) {
			$loop->the_post();
			$post = get_post();
			$post_id = $post->ID;
	?>
			<li class="portfolio-archive<?php echo $post_id == $current_post_id ? ' current' : ''; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php 
		}
	?>
</div>
<div class="intro__block--right">
	<div class="portfolio__items portfolio-theme">
		<div class="slider">
			<div class="slider__icon">
				<button class="btn-icons"><i class="fas fa-expand fa-2x"></i></button>
			</div>
			<div class="portfolio__item-wrapper">
				<a class="prev"><i class="fas fa-arrow-left"></i></a>
				<a class="next"><i class="fas fa-arrow-right"></i></a>
				<?php 
					$images = rwmb_meta( 'Foto', array('image_advanced'), $current_post_id ); // Since 4.8.0
						if ( !empty( $images ) ) {
						foreach ( $images as $image ) {
							echo "
								<div class='slider__item-overlay'>
									<p class='slider__item-overlay-text'>$current_post_title</p>
								</div>
								<div class='portfolio__item-image' style='background-image: url( " . $image['full_url'] . " );'></div>
							";
						}
					}
				?>
			</div>
			<div class="portfolio__progress-bar">
				<?php 
					foreach ( $images as $image ) {
						echo "<span class='portfolio__progress-item'></span>";
					}
				?>
			</div>
		</div>
		<p class="portfolio__items text">
			<?php echo $current_post_content;?>
		</p>
		<p class="portfolio__item btn-right">
			<a href="<?php echo rwmb_meta('github_link', array('type=text'));?>" target="_blank">
				<button class="btn-icons"><i class="fab fa-github-alt fa-2x"></i></button>
			</a>
			<a href="<?php echo rwmb_meta('linkedin_link', array('type=text'));?>" target="_blank">
				<button class="btn-icons"><i class="fab fa-linkedin-in fa-2x"></i></button>
			</a>
		</p>
	</div>
</div>
	<?php if ($notFound) { ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php } ?>
</div>
<section class="switch" id="switch">
	<div class="intro__block--design">
		<div class="intro__block--design-left">
			<?php 
				$images = rwmb_meta( 'design_foto', array('image_advanced') ); // Since 4.8.0
				if ( !empty( $images ) ) {
					foreach ( $images as $image ) {
						echo "<div class='intro__block--design-photo' style='background-image: url( " . $image['full_url'] . " );'></div>";
					}
				}
			?>
		</div>
		<div class="intro__block--design-right">
			<h2 class="intro__block--design-heading">Take a look at my other work</h2>
			<p>
				<a href="/design-portfolio"><button class="btn-show">Check it out</button></a>
			</p>
		</div>
	</div>
</section>
