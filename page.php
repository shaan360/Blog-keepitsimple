<?php get_header(); ?>
	
	<div class="row">
            <div class="row-fluid">
                <!-- LEFT FIXED SIDE BAR -->
                  
<?php get_sidebar(); ?>
<div class="col-md-9">
                    <!-- BLOG POST CONTENT -->
                    <div class="row-fluid post">
                       <div class="col-md-12"> 
		<h1><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="jumbotron"> 
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /article -->
		</div>
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	
	
                        </div></div></div></div></div>

<?php get_footer(); ?>