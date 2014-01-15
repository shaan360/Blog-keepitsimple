<?php get_header(); ?>
	<div class="row">
            <div class="row-fluid">
                <!-- LEFT FIXED SIDE BAR -->
                  
<?php get_sidebar(); ?>
<div class="col-md-9">
                    <!-- BLOG POST CONTENT -->
                    <div class="row-fluid post">
                        <div class="col-md-12"> 
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	  </div></div></div></div></div>

<?php get_footer(); ?>