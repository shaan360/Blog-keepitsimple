<?php get_header(); ?>
	
	<!-- section -->
	<div class="row">
        
                <!-- LEFT FIXED SIDE BAR -->
                  
<?php get_sidebar(); ?>
<div class="col-xs-12 col-sm-9">
                    <!-- BLOG POST CONTENT -->
                    <div class="row-fluid post">
                        <div class="col-md-12"> 
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="jumbotron"> 
		<!-- article -->
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<div class="card-heading-header">
			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
			</div>
			<!-- post details -->
			<h3>  <span class="author"><?php _e( 'Published - <i class="icon-time muted"> </i>', 'html5blank' ); ?> <?php the_time('g:i a'); ?> <i class="icon-eye-open muted"> </i><?php the_time('F j, Y'); ?>  by <?php the_author_posts_link(); ?></span>
			<span class="comments">  in  <i class="icon-bookmark muted"> </i><?php comments_popup_link( __( ' Topic/Category ', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> </h3>
			<!-- /post details -->
			<div class="panel-body">
			<?php the_content(); // Dynamic Content ?>
			
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php //comments_template(); ?>
			
		</div>
		<!-- /article -->
		</div>
		<div class="card-actions card-comments">
								
                                    <!--<button class="btn">+1</button>
									
                                    <a class="btn" href="http://www.addtoany.com/share_save" >Share</a>-->
									
                                    <a href="https://facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"  target="_blank"> <i class="icon-facebook  muted pull-right"></i> </a>

                                    <a href="http://twitter.com/home?status=<?php echo the_title(); ?>"  target="_blank"> <i class="icon-twitter  muted pull-right"></i> </a>
									
                                    <a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" target="_blank"> <i class="icon-google-plus  muted pull-right"></i> </a>

                                </div></div>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
                        </div></div></div></div>

<?php get_footer(); ?>