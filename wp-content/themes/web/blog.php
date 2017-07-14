<?php
/*
* Template Name: blog Page
*/
?>
<?php get_header() ?>
    <!-- start content -->
	 <div class="main1">
	 	 <div class="content">
	 	 	<h2>The standard chunk of Lorem Ipsum used since the 1500s is reproduced </h2>
	 	 </div>
		<div class="blog">
			<?php
			$blog_p = new WP_Query (
				array (
					'post_type' => 'blog_p',
					'posts_per_page' => -1,
					'post_status'      => 'publish',
				)
			);
			?>
			<?php
			if($blog_p->have_posts()): while($blog_p->have_posts()): $blog_p->the_post();
				$feature_image_id = get_post_thumbnail_id(get_the_ID());
				$feature_image_meta = wp_get_attachment_image_src($feature_image_id, get_the_ID());
				/*$count = $portfolio->found_posts;
                echo $count;*/
			?>
				<div class="blog_list">
					<h4><a href=""><?php echo get_the_title(); ?></a></h4>
					<h5><?php echo the_time('F j, Y'); ?> , Posted by&nbsp;<a href="<?php get_the_author_link(); ?>"><?php echo get_the_author(); ?></a></h5>
					<div class="blog_para">
						<p class="para1"><a href="details.html" rel="lightbox"><img src="<?php echo $feature_image_meta[0] ?>" alt=""></a><?php echo get_the_content(); ?></p>
						<div class="read_more">
							<a class="btn" href="details.html">Read More</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			<?php
			endwhile; endif;
			wp_reset_postdata();
			?>
			</div>
		</div>
 	 </div>
</div>
</div>
  <!-- start foorter -->
<?php get_footer() ?>