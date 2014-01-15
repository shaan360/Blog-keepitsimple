<!DOCTYPE html>
<html  <?php language_attributes(); ?> lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       <!-- <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo get_template_directory_uri(); ?>/css/switcher.css" rel="stylesheet" title="style" type="text/css" />

         <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' );?>" />
         <?php $options = get_option('majoo'); ?>

<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
    </head>
    <body <?php body_class(); ?>  style="<?php 
                    if($options['my-image']) {
                        echo "background-image: url("; echo $options['my-image']; echo ')"';
                    }
                    elseif(isset( $options['14'] ))  {
                        
                echo "background-image: url(".get_template_directory_uri()."/img/bg/";
                echo $options['14'];
                echo ".png);";
               } 
               
               ?>">
			   