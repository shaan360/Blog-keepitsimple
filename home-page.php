<?php
/*
 * 
 * Template Name: Home Page
 */

$postTitleError = '';

if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {

	if(trim($_POST['postTitle']) === '') {
		$postTitleError = 'Please enter a title.';
		$hasError = true;
	} else {
		$postTitle = trim($_POST['postTitle']);
	}

$tags = $_POST['post_tags'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$google = $_POST['google-plus'];
	$post_information = array(
		'post_title' => esc_attr(strip_tags($_POST['postTitle'])),
		'post_content' => esc_attr(strip_tags($_POST['postContent'])),
		'custom-fields' => esc_attr(strip_tags($_POST['customFields'])),
		'post_type' => 'post',
		//'facebook' => $facebook,
		//'twitter' => $twitter,
		//'google-plus' => $google,
		'post_status' => 'publish'
	);

	$post_id = wp_insert_post($post_information);

//add_post_meta($post_id, 'facebook', $facebook, true);
//add_post_meta($post_id, 'twitter', $twitter, true);
//add_post_meta($post_id, 'google-plus', $google, true);
	if($post_id)
	{
		wp_redirect(home_url());
		exit;
	}

}

get_header(); ?>
	
	 <!-- MAIN CONTAINER -->
        <div class="row">
            
                <!-- LEFT FIXED SIDE BAR -->
                  
<?php get_sidebar(); ?>
<div class="col-xs-12 col-sm-9">
                    <!-- BLOG POST CONTENT -->
                    <div class="row-fluid post">
                        <div class="col-md-12"> 
                            <?php
if ( is_user_logged_in() ) { ?>
<div class="post">
                            <div class="jumbotron">
                                <div class="card-heading image">
                            <form action="" id="primaryPostForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
<div class="card-body">
			<div class="form-group">

				<label for="postTitle" class="control-label"><?php _e('Post\'s Title:', 'framework') ?></label>

				<input type="text" class="form-control" name="postTitle" id="postTitle" value="<?php if(isset($_POST['postTitle'])) echo $_POST['postTitle'];?>" class="required" />

			</div>
                                
			<?php if($postTitleError != '') { ?>
				<span class="error"><?php echo $postTitleError; ?></span>
				<div class="clearfix"></div>
			<?php } ?>
</div>
                                
			<div class="form-group">
				
                                		
				<label for="postContent" class="control-label"><?php _e('Post\'s Content:', 'framework') ?></label>

				<textarea class="form-control" name="postContent" placeholder="place Your comments, posts or Question?" id="postContent"  rows="10" class="input-block-level" ><?php if(isset($_POST['postContent'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['postContent']); } else { echo $_POST['postContent']; } } ?></textarea>

			</div>
                                </div>
                                <div class="card-actions card-comments">
			<fieldset style="border: 0px;">
				<!-- wine Rating -->
				
<!--<fieldset class="facebook">
          <label for="winerating"><?php //_e('Facebook:', 'framework') ?></label>
          <input type="text" value="" id="winerating" size="70" tabindex="25" name="facebook">
</fieldset>
<fieldset class="twitter">
          <label for="winerating"><?php //_e('Twitter:', 'framework') ?></label>
          <input type="text" value="" id="winerating" size="70" tabindex="25" name="twitter">
</fieldset>
<fieldset class="google-plus">
          <label for="winerating"><?php //_e('Google Plus:', 'framework') ?></label>
          <input type="text" value="" id="winerating" size="70" tabindex="25" name="google-plus">
</fieldset>--->

				<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>

				<input type="hidden" name="submitted" id="submitted" value="true" />
				<button class="btn btn-default" type="submit"><?php _e('Add Post', 'framework') ?></button>

			</fieldset>
                                </div>

		</form>
                            
                        </div></div>
                            <?php }
                            query_posts('showposts=3');
                            if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="post">
                            <div class="jumbotron">
                                <div class="card-heading image"> 
                                    <div class="pull-right"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_id(), $size = '96', $default = '<path_to_url>' ); ?></a></div>
                                    <div class="card-heading-header">
                                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                        <h3>  <span class="author"><?php _e( 'Published - <i class="icon-time muted"> </i>', 'html5blank' ); ?> <?php the_time('g:i a'); ?> <i class="icon-eye-open muted"> </i><?php the_time('F j, Y'); ?>  by <?php the_author_posts_link(); ?></span>
			<span class="comments">  in  <i class="icon-bookmark muted"> </i><?php comments_popup_link( __( ' Topic/Category ', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> </h3>
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
    <?php the_content(); ?>
  </div>
</div>
                               

                                

                            </div>
                            <div class="post-actions">
								<!--<div style="width:90%; float:left; margin-top:-14px"><?php //echo do_shortcode('[hupso]'); ?></div>-->
                                    <!--<button class="btn">+1</button>
									
                                    <a class="btn" href="http://www.addtoany.com/share_save" >Share</a>-->
									
                                    <a href="https://facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"  target="_blank"> <i class="icon-facebook  muted pull-right"></i> </a>

                                    <a href="http://twitter.com/home?status=<?php echo the_title(); ?>"  target="_blank"> <i class="icon-twitter  muted pull-right"></i> </a>
									
                                    <a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" target="_blank"> <i class="icon-google-plus  muted pull-right"></i> </a>

                                </div></div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="row-fluid post">
                        <div class="col-md-12"> 
                            <div class="jumbotron">
                                

                                <div class="media-body">
                                    
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1') ) : ?><?php endif; ?>
									
									<?php //echo do_shortcode("[statigram_widget]"); ?>
                                        
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <!-- BLOG POST CONTENT ENDS -->
                    
                    

                    <!-- BOTTOM TABS -->
                    
                    <!-- BOTTOM TABS ENDS-->
                </div>
                <!-- RIGHT BLOG CONTENT CONTAINER ENDS -->
                
        </div>
        <!-- MAIN CONTAINER END -->
<?php get_footer(); ?>