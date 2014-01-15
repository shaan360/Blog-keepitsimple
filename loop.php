<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post">
	<div class="jumbotron">
                                <div class="card-heading image">
                                    <div class="pull-right"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_id(), $size = '96', $default = '<path_to_url>' ); ?></a></div>
                                    <div class="card-heading-header">
		<!-- post thumbnail -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<h3><span class="author"><?php _e( 'Published - <i class="icon-time muted"> </i>', 'html5blank' ); ?> <?php the_time('g:i a'); ?> <i class="icon-eye-open muted"> </i><?php the_time('F j, Y'); ?>  by <?php the_author_posts_link(); ?></span>
			<span class="comments">  in  <i class="icon-bookmark muted"> </i><?php comments_popup_link( __( ' Topic/Category ', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></h3>
              
                                    </div>
                                </div>
                                <hr>
               
<div class="media">
   <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a class="pull-left col-md-3" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(220,220)); // Declare pixel size you need inside the array ?>
				</a>
                                    
               
			<?php endif; ?>
			
  <?php if ( has_post_thumbnail()) { ?>
  <div class="media-body col-md-8 pull-right">
  <?php } else {  ?>
  <div class="media-body">
  <?php } ?>
   <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
  </div>
</div>
		<?php edit_post_link(); ?>
		</div>
		<div class="post-actions">
								<!--<div style="width:90%; float:left; margin-top:-14px"><?php //echo do_shortcode('[hupso]'); ?></div>-->
                                    <!--<button class="btn">+1</button>
									
                                    <a class="btn" href="http://www.addtoany.com/share_save" >Share</a>-->
									
                                    <a href="https://facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"  target="_blank"> <i class="icon-facebook  muted pull-right"></i> </a>

                                    <a href="http://twitter.com/home?status=<?php echo the_title(); ?>"  target="_blank"> <i class="icon-twitter  muted pull-right"></i> </a>
									
                                    <a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" target="_blank"> <i class="icon-google-plus  muted pull-right"></i> </a>

                                </div>
		</div>
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>