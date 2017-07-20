<!-- service section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
<?php //if($wl_theme_options['home_service_heading'] !='') { ?>
<!--<div class="container">-->
<!--	<div class="row">-->
<!--		<div class="col-sm-12">-->
<!--			<div class="kadima_heading_title">-->
<!--				<h3>--><?php //echo esc_attr($wl_theme_options['home_service_heading']); ?><!--</h3>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<?php //} ?>
<!--<div class="container">-->
<!--		<div class="row isotope" id="isotope-service-container">-->
<!--			--><?php //for($i=1; $i<4; $i++ ) { ?>
<!--			<div class=" col-md-4 service">-->
<!--				<div class="kadima_service_area appear-animation bounceIn appear-animation-visible">-->
<!--					--><?php //if($wl_theme_options['service_icons_'.$i] !='') { ?><!--<div class="kadima_service_iocn pull-left"><i class="--><?php //echo esc_attr($wl_theme_options['service_icons_'.$i]); ?><!--"></i></div>--><?php //} ?>
<!--					<div class="kadima_service_detail media-body">-->
<!--						--><?php //if($wl_theme_options['service_title_'.$i] !='') { ?><!--<h3><a href="--><?php //echo esc_url($wl_theme_options['service_link_'.$i]); ?><!--">--><?php //echo esc_attr($wl_theme_options['service_title_'.$i]); ?><!--</a></h3>--><?php //} ?>
<!--						--><?php //if($wl_theme_options['service_text_'.$i] !='') { ?><!--<p>--><?php //echo apply_filters('the_content', $wl_theme_options['service_text_'.$i], true); ?><!--</p>--><?php //} ?>
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			--><?php //} ?>
<!--		</div>-->
<!--	</div>-->
<!--    五个div-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 padding">
                <h1 class="title"><?php echo esc_attr($wl_theme_options['custom_title_1'])?></h1>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 padding">
                <p class="kadima-p"><?php echo esc_attr($wl_theme_options['custom_title_1_3'])?></p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 padding">
                <p class="kadima-p2"><?php echo esc_attr($wl_theme_options['custom_title_1_4'])?></p>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 kadima-div">
                <div class="hov"><div class="kadima-bg"></div></div>
                <div class="kadima-box"><span class="kadiam-box-span1"><?php echo esc_attr($wl_theme_options['custom_title_1_5'])?></span></div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 kadima-div">
                <div class="hov"><div class="kadima-bg2"></div></div>
                <div class="kadima-box"><span class="kadiam-box-span2"><?php echo esc_attr($wl_theme_options['custom_title_1_6'])?></span></div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 kadima-div">
                <div class="hov"><div class="kadima-bg3"></div></div>
                <div class="kadima-box"><span class="kadiam-box-span3"><?php echo esc_attr($wl_theme_options['custom_title_1_7'])?></span></div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 kadima-div">
                <div class="hov"> <div class="kadima-bg4"></div></div>
                <div class="kadima-box"><span class="kadiam-box-span4"></span><?php echo esc_attr($wl_theme_options['custom_title_1_8'])?></span></div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 kadima-divlast">
                <div class="hov"><div class="kadima-bg5"></div></div>
                <div class="kadima-box"><span class="kadiam-box-span5"><?php echo esc_attr($wl_theme_options['custom_title_1_3'])?></span></div>
            </div>
            <!--图片和文字-->
            <div>
                <div class="col-md-6 col-sm-12 col-xs-12 padding">
                    <div class="ma">
                        <H1 class="kadima-h1"><?php echo esc_attr($wl_theme_options['custom_title_1_2'])?></H1>
<!--                        <H1 class="kadima-h1"></H1>-->
                    </div>
                    <p class="article">
                        <?php echo esc_attr($wl_theme_options['custom_text_1_2'])?>v
                    </p>
                    <div>
                        <a href="#"><div class="more">MORE</div></a>
                        <a href="#">
                            <div class="jiantou">
                                <img src="http://localhost/wrd-auto/wp-content/themes/auto/images/xwy-20.png">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 padding">
                    <img src="<?php echo  esc_url($wl_theme_options['custom_img_1_1'])?>" class="img-max main-img">
                </div>
            </div>
        </div>
    </div>

<!--    main products-->
    <div class="mainproduct"></div>
    <div class="zhezhao"></div>
    <div class="text">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="mainproduct-size">
<!--                        <h2 class="mainproduct-span">We are a professional hardware manufacturer</h2>-->
                        <p class="mainproduct-span2 custom-2-5"><?php echo  esc_attr($wl_theme_options['custom_text_2_5'])?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#"><div class="mainproduct-btn">Request a Quote</div></a>
                </div>
            </div>
        </div></div>
    <div class="mainproduct-content">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 padding mainproduct-box">
            <div class="mainproduct-text">
                <div class="ma2"><h1><?php echo esc_attr($wl_theme_options['custom_title_2'])?></h1></div>
                <div class="mainproduct-text-blue"></div>
                <div class="mainproduct-text2"><?php echo esc_attr($wl_theme_options['custom_desciption_2'])?></div>
            </div>
        </div>
<!--        <div class="col-md-6 col-sm-12 mainproduct-box padding">-->
<!--            <div class="mainproduct-box3">-->
<!--                <p>Stamping die</p>-->
<!--                <div class="mainproduct-ma">-->
<!--                    <div class="mainproduct-box3-div">-->
<!--                        <img src="http://localhost/wrd-auto/wp-content/themes/auto/images/xwy-23.png">-->
<!--                    </div>-->
<!--                    <div class="mainproduct-box3-div">-->
<!--                        <img src="http://localhost/wrd-auto/wp-content/themes/auto/images/xwy-22.png">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="col-md-6 col-sm-12 padding mainproduct-box">
            <div class="mainproduct-text">
                <div class="mainproduct-sheet"><p><?php echo esc_attr($wl_theme_options['custom_title_2_1'])?></p>
                    <div class="triangle-right"></div>
                </div>
                <div class="mainproduct-img">
                    <a href="#"><img src="<?php echo esc_url($wl_theme_options['custom_img_2_1'])?>" class="img-max"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 padding mainproduct-box">
            <div class="mainproduct-text">
                <div class="mainproduct-sheet"><p><?php echo esc_attr($wl_theme_options['custom_title_2_1'])?></p>
                    <div class="triangle-right"></div>
                </div>
                <div class="mainproduct-img">
                    <a href="#"><img src="<?php echo esc_url($wl_theme_options['custom_img_2_1'])?>" class="img-max"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mainproduct-box padding">
            <div class="mainproduct-text">
                <div class="mainproduct-sheet3"><p><?php echo esc_attr($wl_theme_options['custom_title_2_2'])?></p>
                    <div class="triangle-right"></div>
                </div>
                <div class="mainproduct-img2">
                    <a href="#"><img src="<?php echo esc_url($wl_theme_options['custom_img_2_2'])?>" class="img-max"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 padding mainproduct-box">
            <div class="mainproduct-text">
                <div class="mainproduct-sheet3"><p><?php echo esc_attr($wl_theme_options['custom_title_2_3'])?></p>
                    <div class="triangle-right"></div>
                </div>
                <div class="mainproduct-img2">
                    <a href="#"><img src="<?php echo esc_url($wl_theme_options['custom_img_2_3'])?>" class="img-max"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mainproduct-box padding" class="img-max">
            <div class="mainproduct-text">
                <div class="mainproduct-sheet"><p><?php echo esc_attr($wl_theme_options['custom_title_2_4'])?></p>
                    <div class="triangle-right"></div>
                </div>
                <div class="mainproduct-img">
                    <a href="#"><img src="<?php echo esc_url($wl_theme_options['custom_img_2_4'])?>" class="img-max"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--        application-->
    <div class="mainproduct2"></div>
    <div class="zhezhao"></div>
    <div class="text">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="mainproduct-size">
<!--                    <h2 class="mainproduct-span4">Our products are involved in aerospace, military facilities,</h2>-->
                    <p class="mainproduct-span2 cus-3-5"><?php echo  esc_attr($wl_theme_options['custom_text_3_5'])?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4"">
                <a href="#"><div class="mainproduct-btn">Contact Us</div></a>
            </div>
    </div>
</div></div>
    <div class="mainproduct-content">
    <div class="container">
        <div class="row">
            <h1 class="appliction-h1"><?php echo  esc_attr($wl_theme_options['custom_title_3'])?></h1>
            <div class="app-blue"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 padding mainproduct-box">
                <div class="app-img">
                <img src="<?php echo esc_url($wl_theme_options['custom_img_3_1'])?>" class="img-max">
                    <p class="app-p"><?php echo  esc_attr($wl_theme_options['custom_text_3_1'])?></p>
                </div>
            </div>
            <div class=" col-md-6 col-sm-12 col-xs-12 mainproduct-box padding">
                <div class="app-img">
                    <img src="<?php echo esc_url($wl_theme_options['custom_img_3_2'])?>" class="img-max">
                    <p class="app-p"><?php echo  esc_attr($wl_theme_options['custom_text_3_2'])?></p>
                </div>
            </div>
            <div class=" col-md-6 col-sm-12 col-xs-12 padding mainproduct-box">
                <div class="app-img">
                    <img src="<?php echo esc_url($wl_theme_options['custom_img_3_3'])?>" class="img-max">
                    <p class="app-p"><?php echo  esc_attr($wl_theme_options['custom_text_3_3'])?></p>
                </div>
            </div>
            <div class=" col-md-6 col-sm-12 col-xs-12 mainproduct-box padding">
                <div class="app-img">
                    <img src="<?php echo esc_url($wl_theme_options['custom_img_3_4'])?>" class="img-max">
                    <p class="app-p"><?php echo  esc_attr($wl_theme_options['custom_text_3_4'])?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Service section -->