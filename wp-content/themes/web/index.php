<?php get_header(); ?>

    <!-- start banner -->
    <div class="banner">

        <?php if( have_rows('article_home') ): ?>
            <?php while( have_rows('article_home') ): the_row();
                //var
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $page_link = get_sub_field('page-link');
                ?>
                <div class="banner-division d_img">
                    <img src="<?php echo $image['url'] ?>" alt="" />
                </div>
                <div class="banner-division">
                    <h2><?php echo $title ?></h2>
                    <p><?php echo $content ?></p>
                    <a href="<?php echo $page_link ?>" target="_blank">Read more</a>
                </div>
                <div class="clear"></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
  
    <!-- start content -->
	 <div class="main">
	 	 <div class="content">
	 	 	<h2>latest projects</h2>
	 	 </div>
	 	 <div class="grids_of_4">
			 <?php if( have_rows('lasted_project') ): ?>
				 <?php while( have_rows('lasted_project') ): the_row();
					 //var
					 $image = get_sub_field('image');
					 $project_title = get_sub_field('project_title');
					 $project_link = get_sub_field('project_link');
				 ?>
					 <div class="grid_1_of_4 images_1_of_4">
						 <img src="<?php echo $image['url'] ?>" title="<?php echo $image['alt'] ?>" alt=""/>
						 <h3><a href=""><?php echo $project_title ?></a></h3>
						 <h4><a href=""><?php echo $project_link ?></a></h4>
					 </div>
				 <?php endwhile; ?>
			 <?php endif; ?>
				<div class="clear"></div>
			</div>
	 	 	 <div class="content">
	 	 		<h2>how can we help you?</h2>
	 	 	</div>
		 <div class="grids_of_3">
		 	<?php if( have_rows('we_help_you') ): ?>
				<?php while( have_rows('we_help_you') ): the_row();
					//var
					$title = get_sub_field('title');
					$content = get_sub_field('content');
				?>
					 <div class="grid_1_of_3 images_1_of_3">
						<h3><?php echo $title ?></h3>
						<p><?php echo $content ?></p>
					 </div>

				<?php endwhile; ?>
			<?php endif; ?>
		 </div>
		 <div class="clear"></div>

 	 </div>
</div>
</div>
 <?php get_footer(); ?>