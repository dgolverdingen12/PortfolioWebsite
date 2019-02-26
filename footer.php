<footer class="footer">
	<div class="footer--container">
		<div class="footer__item1">
			<?php dynamic_sidebar('footer1_widget'); ?>
		</div>
		<div class="footer__item2">
			<h4 class="footer__item-head">Highlighted Projects</h4>
			<ul class="footer__menu">
				<?php dynamic_sidebar('footer2_widget'); ?>
			</ul>
		</div>
		<div class="footer__item3">
			<h4 class="footer__item-head">Latest project</h4>
			<?php $args = array(
				'post_type' => array(
				'code',
				'design',
			),
				'posts_per_page' => 1,
				'orderby' => 'date',
				'order' => 'DESC',
			);
			$query = new WP_Query( $args );

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();	
					$images = rwmb_meta( 'Foto', array('image_advanced'), get_the_ID() ); // Since 4.8.0
				if ( !empty( $images ) ) {
				foreach ( $images as $image ) { ?>
					<a href="<?php echo the_permalink(); ?>">
						<img class="footer__item-image"src="<?php echo $image['full_url']; ?>" alt="">
					</a>
				<?php }
				}
			}
		} 
			wp_reset_query(); ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
