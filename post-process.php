<?php
/**
 * post-process.php
 * make sure to include post-process.php in your functions.php. Use this in functions.php:
 *
 * get_template_part('post-process');
 *
 */
function do_insert() {	
	if( 'POST' == $_SERVER['REQUEST_METHOD'] 
		&& !empty( $_POST['action'] ) 
		&& $_POST['post_type'] == 'book' ) { // Check what the post type is here instead
		
		// Setting the 'post_type' => $_POST['post_type'] in the $post array below causes 404
		// Just set it based on what is set in the above IF $_POST type == 'book'. 
		// and below do 'post_type' => 'book'
	
		// Do some minor form validation to make sure there is content
		if (isset ($_POST['title'])) { $title =  $_POST['title']; } else { echo 'Please enter a title'; }
		if (isset ($_POST['description'])) { $description = $_POST['description']; } else { echo 'Please enter the content'; }
		
		$tags = trim( $_POST['post_tags'] );
		// Get the array of selected categories as multiple cats can be selected
		$cat = array( $_POST['cat'] );
		
		// Add the content of the form to $post as an array
		$post = array(
			'post_title'	=> $title,
			'post_content'	=> $description,
			'post_category'	=> $cat, // Usable for custom taxonomies too
			'tags_input'	=> $tags,
			'post_status'	=> 'publish', // Choose: publish, preview, future, etc.
			'post_type'		=> 'book' // Set the post type based on the IF is post_type X
		);
		wp_insert_post($post);  // Pass  the value of $post to WordPress the insert function
								// http://codex.wordpress.org/Function_Reference/wp_insert_post
	} // end IF
}

// Do the wp_insert_post action to insert it
do_action('wp_insert_post', 'do_insert');
?>


<!-- Put this in your theme template file -->
<div id="postbox">
	
	<form id="new_post" name="new_post" method="post" action="<?php bloginfo('template_directory');?>/post-process.php">
	
		<p><label for="title">Title</label><br />
		<input type="text" id="title" value="" tabindex="1" size="20" name="title" /></p>
		
		<p><label for="description">Description</label><br />
		<textarea id="description" tabindex="3" name="description" cols="50" rows="6"></textarea>
		</p>
		
		<p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>
		
		<p><label for="post_tags">Tags</label>
		<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>
		
		<p><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
		
		<input type="hidden" name="post_type" id="post_type" value="book" />
		<input type="hidden" name="action" value="post" />
		<?php wp_nonce_field( 'new-post' ); ?>
	
	</form>

</div>