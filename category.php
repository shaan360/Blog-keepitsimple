<?php get_header(); ?>
	
	<div class="row">
        
                <?php get_sidebar(); ?>
                <div class="col-xs-12 col-sm-9">
                    <!-- BLOGER POSTS -->

                    <div class="row-fluid post">
                        <div class="col-md-12"> 
		<h1><?php _e( 'Categories for', 'html5blank' ); echo the_category(); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
</div>

                </div>
                <!-- RIGHT BLOG CONTENT CONTAINER ENDS -->
               
        </div>
		</div>

<?php get_footer(); ?>