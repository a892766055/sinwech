<!-- kadima Callout Section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="foot-topdiv">
    <img src="http://localhost/wrd-auto/wp-content/themes/auto/images/xwy-41.png">
</div>
<div class="kadima_footer_widget_area">
	<div class="container">
		<div class="row">
			<?php
			if ( is_active_sidebar( 'footer-widget-area' ) ){
				dynamic_sidebar( 'footer-widget-area' );
			} else
			{
			$args = array(
				'before_widget' => '<div class="col-md-3 col-sm-6 kadima_footer_widget_column">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="kadima_footer_widget_title">',
				'after_title'   => '<div class="kadima-footer-separator"></div></div>'
			);
			the_widget('WP_Widget_Pages', null, $args);
			} ?>
         </div>
     </div>
</div>
<!--<div class="ka-foot">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 col-sm-4 kadima_footer_widget_column">-->
<!--                <div class="kadima_footer_widget_title">COMPANY</div>-->
<!--                <ul>-->
<!--                    <li class="page_item page-item-23"><a href="http://localhost/wrd-auto/index.php/abouts-us/">Home</a></li>-->
<!--                    <li class="page_item page-item-27"><a href="http://localhost/wrd-auto/index.php/contact-us/">News</a></li>-->
<!--                    <li class="page_item page-item-25"><a href="http://localhost/wrd-auto/index.php/equipment/">Events</a></li>-->
<!--                    <li class="page_item page-item-19"><a href="http://localhost/wrd-auto/index.php/no-access/">Address</a></li>-->
<!--                    <li class="page_item page-item-24"><a href="http://localhost/wrd-auto/index.php/products/">Contact us</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4 kadima_footer_widget_column">-->
<!--                <div class="kadima_footer_widget_title">PRODUCTS</div>-->
<!--                <ul>-->
<!--                    <li class="page_item page-item-23"><a href="http://localhost/wrd-auto/index.php/abouts-us/">Metal pipes fittings</a></li>-->
<!--                    <li class="page_item page-item-27"><a href="http://localhost/wrd-auto/index.php/contact-us/">CNC machining parts</a></li>-->
<!--                    <li class="page_item page-item-25"><a href="http://localhost/wrd-auto/index.php/equipment/">Sheet metal parts</a></li>-->
<!--                    <li class="page_item page-item-19"><a href="http://localhost/wrd-auto/index.php/no-access/">Stamping die</a></li>-->
<!--                    <li class="page_item page-item-24"><a href="http://localhost/wrd-auto/index.php/products/">More</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4 kadima_footer_widget_column">-->
<!--                <div class="kadima_footer_widget_title">APPLICATION</div>-->
<!--                <ul>-->
<!--                    <li class="page_item page-item-23"><a href="http://localhost/wrd-auto/index.php/abouts-us/">Aerospace</a></li>-->
<!--                    <li class="page_item page-item-27"><a href="http://localhost/wrd-auto/index.php/contact-us/">Military facilities</a></li>-->
<!--                    <li class="page_item page-item-25"><a href="http://localhost/wrd-auto/index.php/equipment/">Electrical equipment</a></li>-->
<!--                    <li class="page_item page-item-19"><a href="http://localhost/wrd-auto/index.php/no-access/">Fitness equipment</a></li>-->
<!--                    <li class="page_item page-item-24"><a href="http://localhost/wrd-auto/index.php/products/">More</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</div>-->
<div class="kadima_footer_area">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
			<p class="kadima_footer_copyright_info wl_rtl" >
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
			if($wl_theme_options['info_copyright']) { echo "|" .esc_attr($wl_theme_options['info_copyright']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['info_fax']) { echo esc_url($wl_theme_options['info_fax']); } ?>"><?php if($wl_theme_options['info_tel']) { echo esc_attr($wl_theme_options['info_tel']); } ?></a></p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="kadima_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>
                <p>Copyright © Sinwech 2001,All Right Reserved</p>
			</div>
		</div>
</div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>
