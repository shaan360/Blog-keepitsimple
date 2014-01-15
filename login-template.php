<?php
/*
 * 
 * Template Name: Login Template
 */
global $user_ID;

if (!$user_ID) {

if($_POST){
    //We shall SQL escape all inputs
    $username = $wpdb->escape($_REQUEST['username']);
    $password = $wpdb->escape($_REQUEST['password']);
    $remember = $wpdb->escape($_REQUEST['rememberme']);

    if($remember) $remember = "true";
    else $remember = "false";
    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;
    $login_data['remember'] = $remember;
    $user_verify = wp_signon( $login_data, false ); 
    //wp_signon is a wordpress function which authenticates a user. It accepts user info parameters as an array.

    if ( is_wp_error($user_verify) ) 
    {
       echo "<span class='error'>Invalid username or password. Please try again!    </span>";
       exit();
     } else 
     {  
        echo "<script type='text/javascript'>window.location='". get_bloginfo('url') ."/keepitsimple/profile/'</script>";
        exit();
      }
} else { 

 
get_header(); ?>
	 <!-- MAIN CONTAINER -->
        <div class="container">
             <!-- LOGIN FORM -->
            <form class="form-signin"  action="" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input class="input-block-level"  name="username" type="text" placeholder="Email address">
                <input class="input-block-level" name="password" type="password" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox"  name="rememberme" value="remember-me">
                    Remember me
                </label>
                <input type="submit" class="btn btn-large btn-primary" id="submitbtn" name="submit" value="Sign in" />
            </form>
              <!-- LOGIN FORM ENDS -->
              <?php 
}
}
else {
echo "<script type='text/javascript'>window.location='". get_bloginfo('siteurl')   ."'</script>";
} ?>
        </div>
        <!-- MAIN CONTAINER ENDS-->
<?php get_footer(); ?>