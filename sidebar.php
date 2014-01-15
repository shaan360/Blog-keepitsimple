<?php $options = get_option('majoo'); ?>
 <div class="col-xs-12 col-sm-3">
                    <div class="img-responsive sidebar-nav-fixed affix" style="<?php if( $options['13'] )  {
                        
                echo "background-image: url(".get_template_directory_uri()."/img/bg/";
                echo $options['13'];
                echo ".png);";
               } ?>">

                        <div class="hovercard">
<?php

if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
$options = get_option('majoo');
?>
                            <img src="<?php echo $options['sidebar-image']; ?>" alt="image avatar" />
                          
	
		<!-- article -->
		
                            <div class="bottom text-center avatar">
							
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php if(($posts[0]->post_author)) { userphoto($posts[0]->post_author);  } else { echo get_avatar( get_the_author_meta('email'), '90' ); } ?></a>
							<!--<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><img src="<?php echo get_avatar_url(get_avatar( $curauth->ID, 150 )); ?>" align="left" class="authorimage" /></a>
                              <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_id(), $size = '96', $default = '<path_to_url>' ); ?></a>--->
                           
                  
                
                            <div class="info">
                                <div class="title">
                                    <h2><?php echo $curauth->nickname; ?></h2>

                                </div>
                                <div class="desc"><?php echo $curauth->user_description; ?></div> </div>
                                
                                <!-- SOCIAL MEDIA LINKS -->
                                <div class="bottom text-center">
                                   <?php if($options['facebook']) { ?>
                                    <a class="btn  btn-circle btn-facebook " href="<?php echo $options['facebook']; ?>" target="_blank"><i class="icon-facebook"></i></a>
									<?php } if($options['google_plus']) { ?>
                                    <a class="btn  btn-circle btn-gplus " href="<?php echo $options['google_plus']; ?>" target="_blank"><i class="icon-google-plus"></i></a>
									<?php } if($options['twitter']) { ?>
                                    <a class="btn  btn-circle btn-twitter " href="<?php echo $options['twitter']; ?>" target="_blank"><i class="icon-twitter"></i></a>
									<?php } ?>

                                </div>
                                <!-- SOCIAL MEDIA LINKS ENDS-->
                            </div>
                        </div>
                    </div>
                </div>