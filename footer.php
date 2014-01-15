			<div id="footer">
            <div class="container ">
                <?php //html5blank_nav(array('theme_location' => 'header-menu', 'menu_class' => 'umted credit pull-right ')); ?>
               <?php  wp_nav_menu( array('theme_location' => 'primary-menu', 'menu_class' => 'umted credit pull-right') ); ?>
                <p class="muted credit pull-right ">
                <?php if(is_user_logged_in()): ?>
	<a href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
	<?php endif; ?>
	
                </p>
            </div>
        </div>

        <!--End FOOTER-->

        <!-- Styles Switcher -->
        <!--<div id="style-switcher">
            <h2>Color Switcher Options<a href="#" class="btn btn-circle btn-inverse"> <i class="icon-cogs"> </i></a></h2>
            <div>
                <p>Different colors and background options!</p>
                <h3>Side Bar Background Colors</h3>
                <ul class="colors sidebarcolor" id="sidebarcolor">
                    <li><a href="#" class="sexy-orange" title="Sexy Orange"></a></li>
                    <li><a href="#" class="blue" title="Blue"></a></li>
                    <li><a href="#" class="orange" title="Orange"></a></li>
                    <li><a href="#" class="navy" title="Navy"></a></li>
                    <li><a href="#" class="black" title="Black"></a></li>
                    <li><a href="#" class="yellow" title="Yellow"></a></li>
                    <li><a href="#" class="peach" title="Peach"></a></li>
                    <li><a href="#" class="beige" title="Beige"></a></li>
                    <li><a href="#" class="purple" title="Purple"></a></li>
                    <li><a href="#" class="red" title="Red"></a></li>
                    <li><a href="#" class="pink" title="Pink"></a></li>
                    <li><a href="#" class="celadon" title="Celadon"></a></li>
                    <li><a href="#" class="brown" title="Brown"></a></li>
                    <li><a href="#" class="cherry" title="Cherry"></a></li>
                    <li><a href="#" class="gray" title="Gray"></a></li>
                    <li><a href="#" class="olive" title="Olive"></a></li>
                    <li><a href="#" class="dirty-green" title="Dirty Green"></a></li>
                    <li><a href="#" class="wet-asphalt" title="WET ASPHALT"></a></li>
                    <li><a href="#" class="green-sea" title="green-sea"></a></li>
                    <li><a href="#" class="alizarin" title="alizarin"></a></li>
                    <li><a href="#" class="carrot" title="carrot"></a></li>
                    <li><a href="#" class="peter-river" title="peter-river"></a></li>
                    <li><a href="#" class="wisteria" title="wisteria"></a></li>
                    <li><a href="#" class="sun-flower" title="sun-flower"></a></li>
                    <li><a href="#" class="pomegranat" title="pomegranat"></a></li>
                </ul>

                <h3>Background Image</h3>
                <ul class="colors bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                    <li><a href="#" class="bg6"></a></li>
                    <li><a href="#" class="bg7"></a></li>
                    <li><a href="#" class="bg8"></a></li>
                    <li><a href="#" class="bg9"></a></li>
                    <li><a href="#" class="bg10"></a></li>
                    <li><a href="#" class="bg11"></a></li>
                    <li><a href="#" class="bg12"></a></li>
                    <li><a href="#" class="bg13"></a></li>
                    <li><a href="#" class="bg14"></a></li>
                    <li><a href="#" class="bg15"></a></li>
                    <li><a href="#" class="bg16"></a></li>
                    <li><a href="#" class="bg17"></a></li>
                    <li><a href="#" class="bg18"></a></li>
                    <li><a href="#" class="bg19"></a></li>
                    <li><a href="#" class="bg20"></a></li>
                    <li><a href="#" class="bg21"></a></li>
                    <li><a href="#" class="bg22"></a></li>

                    <li><a href="#" class="bg23"></a></li>
                    <li><a href="#" class="bg24"></a></li>
                    <li><a href="#" class="bg25"></a></li>
                    <li><a href="#" class="bg26"></a></li>
                    <li><a href="#" class="bg27"></a></li>
                    <li><a href="#" class="bg28"></a></li>
                    <li><a href="#" class="bg29"></a></li>
                    <li><a href="#" class="bg30"></a></li>
                    <li><a href="#" class="bg31"></a></li>
                    <li><a href="#" class="bg32"></a></li>
                    <li><a href="#" class="bg33"></a></li>
                    <li><a href="#" class="bg34"></a></li>
                    <li><a href="#" class="bg35"></a></li>
                    <li><a href="#" class="bg36"></a></li>
                    <li><a href="#" class="bg37"></a></li>
                    <li><a href="#" class="bg38"></a></li> 
                </ul>

                <h3>Background Color</h3>
                <ul class="colors bgsolid" id="bgsolid">
                    <li><a href="#" class="green-bg" title="Green"></a></li>
                    <li><a href="#" class="blue-bg" title="Blue"></a></li>
                    <li><a href="#" class="orange-bg" title="Orange"></a></li>
                    <li><a href="#" class="navy-bg" title="Navy"></a></li>
                    <li><a href="#" class="yellow-bg" title="Yellow"></a></li>
                    <li><a href="#" class="peach-bg" title="Peach"></a></li>
                    <li><a href="#" class="beige-bg" title="Beige"></a></li>
                    <li><a href="#" class="purple-bg" title="Purple"></a></li>
                    <li><a href="#" class="red-bg" title="Red"></a></li>
                    <li><a href="#" class="pink-bg" title="Pink"></a></li>
                    <li><a href="#" class="celadon-bg" title="Celadon"></a></li>
                    <li><a href="#" class="brown-bg" title="Brown"></a></li>
                    <li><a href="#" class="cherry-bg" title="Cherry"></a></li>
                    <li><a href="#" class="gray-bg" title="Gray"></a></li>
                    <li><a href="#" class="dark-bg" title="Dark"></a></li>
                    <li><a href="#" class="cyan-bg" title="Cyan"></a></li>
                    <li><a href="#" class="olive-bg" title="Olive"></a></li>
                    <li><a href="#" class="dirty-green-bg" title="Dirty Green"></a></li>
                    <li><a href="#" class="wet-asphalt" title="WET ASPHALT"></a></li>
                    <li><a href="#" class="green-sea" title="green-sea"></a></li>
                    <li><a href="#" class="alizarin" title="alizarin"></a></li>
                    <li><a href="#" class="carrot" title="carrot"></a></li>
                    <li><a href="#" class="peter-river" title="peter-river"></a></li>
                    <li><a href="#" class="wisteria" title="wisteria"></a></li>
                    <li><a href="#" class="sun-flower" title="sun-flower"></a></li>
                    <li><a href="#" class="pomegranat" title="pomegranat"></a></li>
                </ul>

            </div>
        </div>-->
        <?php wp_footer(); ?>
		<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
        <!--Style Switcher End-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/switcher.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/holder.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/application.js"></script>

    </body>
</html>
