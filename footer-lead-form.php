<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>
	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>

<div id="SOLightBoxDanmer" style="top: -10000px; position: fixed; padding: 0px; margin: 0px;">
<div id="SOInnerLightBox">
<div style="height: 100%;" align="center">
<div id="SOIC_Danmer" style="padding: 0px; margin: 0px; width: 24px; height: 24px; background-color: #000; border: solid 2px #FFF; color: #fff; font-size: 18px; font-weight: bold; font-family: tahoma; -webkit-border-radius: 14px; border-radius: 14px; position: absolute; top: -15px; text-align: center; line-height: 23px; cursor: pointer; box-sizing: content-box; right: -17px;" onclick="soe.toggleLightBox('Danmer')">X</div>
<p><iframe id="SOI_Danmer" style="border-radius: 7px; -webkit-border-radius: 7px; border: solid 3px #FFF; background-color: #fff;" name="ScheduleOnceIframe" src="https://secure.scheduleonce.com/Danmer&amp;thm=blue&amp;dt=&amp;em=1" height="620" width="735" frameborder="0" marginwidth="0" marginheight="0" scrolling="auto"></iframe></p>
</div>
</div>
</div>
<p><script type="text/javascript" src="https://secure.scheduleonce.com/mergedjs/ScheduleOnceEmbed.js"></script><script type="text/javascript">// <![CDATA[
soe.AddEventListners();
// ]]&gt;</script></p>
</div>

<script>

 // html.js body.page div#container.hfeed div#header div.main-nav ul#menu-event-lead-form-menu.menu li#menu-item-659.menu-item a
jQuery( document ).ready(function( $ ) {
	// Code using $ as usual goes here.
	$('li#menu-item-659.menu-item a').click(function(){
		soe.toggleLightBox('Danmer');
		return false;
	});
	
	     $("input[type=email]").attr("autocapitalize", "off");
	     
	  $('input[type="text"]#input_3_5').attr('type', 'number');
   
});

</script>

</body>
</html>