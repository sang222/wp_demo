<?php
/*
* Template Name: portfolio Page
*/
?>
<?php get_header() ?>
    <!-- start content -->
	 <div class="main1">
	 	 <div class="content">
	 	 	<h2>list of projects</h2>
	 	 </div>


		 <div class="grids_of_4">
		<?php
		$portfolio = new WP_Query (
			array (
				'post_type' => 'portfolio_list',
				'posts_per_page' => -1,
				'post_status'      => 'publish',
			)
		);
		?>
		<?php
		if($portfolio->have_posts()): while($portfolio->have_posts()): $portfolio->the_post();
		$feature_image_id = get_post_thumbnail_id(get_the_ID());
		$feature_image_meta = wp_get_attachment_image_src($feature_image_id, get_the_ID());
			/*$count = $portfolio->found_posts;
			echo $count;*/
		?>
			<div class="grid_1_of_4 images_1_of_4">
				<img src="<?php echo $feature_image_meta[0] ?>" title="Project1" alt="" />
				<h3><a target="_blank" href="<?php the_field('url'); ?>"><?php echo get_the_title(); ?></a></h3>
				<p class="para"><?php echo get_the_content(); ?></p>
				<h4><a target="_blank" href="<?php the_field('url'); ?>"><?php the_field('text_url'); ?></h4></a>
			</div>
		<?php
			endwhile; endif;
			wp_reset_postdata();
		?>
		 </div>
		 <div class="clear"></div>
 	 </div>
</div>
</div>
  <!-- start foorter -->
<?php get_footer() ?>