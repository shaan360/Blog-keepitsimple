/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
    var c = {};    
    c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
    return c;
})();


jQuery(document).ready(function($) {
	
    // Style Switcher	
    $('#style-switcher').animate({
        right: '-305px'
    });
		
    $('#style-switcher h2 a').click(function(e){
        e.preventDefault();
        var div = $('#style-switcher');
        console.log(div.css('right'));
        if (div.css('right') === '-305px') {
            $('#style-switcher').animate({
                right: '0px'
            }); 
        } else {
            $('#style-switcher').animate({
                right: '-305px'
            });
        }
    })
                
	
    $('.bg li a').click(function(e){
        e.preventDefault();
        $(this).parent().parent().find('a').removeClass('active');
        $(this).addClass('active');
        var bg = $(this).css('backgroundImage');
        $('body').css('backgroundImage',bg)
    })
                
	  $('.sidebarcolor li a').click(function(e){
        e.preventDefault();
        $(this).parent().parent().find('a').removeClass('active');
        $(this).addClass('active');
        var bg = $(this).css('backgroundColor');
        $('.sidebar-nav-fixed').css('backgroundColor',bg).css('backgroundImage','none')
    });
    
    $('.bgsolid li a').click(function(e){
        e.preventDefault();
        $(this).parent().parent().find('a').removeClass('active');
        $(this).addClass('active');
        var bg = $(this).css('backgroundColor');
        $('body').css('backgroundColor',bg).css('backgroundImage','none')
        $('a').css('color',bg)
    });
                
		
    $('#reset a').click(function(e){
        $("#colors" ).attr("href", "css/style.css" );
    });
			

});