<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/index-kenburns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 08:36:44 GMT -->
<?php include('include_head_link.php'); ?>                      

<body class="dark big-triangle">
    <!-- Preloader Starts -->
    <!-- <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="<?php echo base_url();?>web_assets/img/styleswitcher/logos/yellow.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div> -->
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='<?php echo base_url();?>web_assets/img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='<?php echo base_url();?>web_assets/img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='<?php echo base_url();?>web_assets/img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='<?php echo base_url();?>web_assets/img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='<?php echo base_url();?>web_assets/img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="<?php echo base_url();?>web_assets/img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"  /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <p class="separator">SEPARATOR <span class="hot">HOT</span></p>
            <span class="info">Select and scroll to see the changes</span>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="<?php echo base_url();?>web_assets/img/styleswitcher/separators/1.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url();?>web_assets/img/styleswitcher/separators/2.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url();?>web_assets/img/styleswitcher/separators/3.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" checked="checked" /> <img alt="separator" width="20" height="20" src="<?php echo base_url();?>web_assets/img/styleswitcher/separators/4.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle"  /> <img alt="separator" width="20" height="20" src="<?php echo base_url();?>web_assets/img/styleswitcher/separators/5.jpg" /></label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="index-kenburns.html">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="<?php echo base_url();?>web_assets/img/styleswitcher/logos/yellow.png" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="<?php echo base_url();?>web_assets/img/styleswitcher/logos/logos-dark/yellow.png" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						<ul class="nav navbar-nav" id="main-navigation">
							<li class="active"><a href="index-kenburns.html"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="about.html"><i class="fa fa-user"></i> About Us</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i> portfolio <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
									<li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
									<li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
									<li><a href="image-project.html">Image Project</a></li>
									<li><a href="slider-project.html">Slider Project</a></li>
									<li><a href="gallery-project.html">Gallery Project</a></li>
									<li><a href="video-project.html">Video project</a></li>
									<li><a href="youtube-project.html">youtube Project</a></li>
									<li><a href="vimeo-project.html">Vimeo Project</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Blog <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
									<li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
									<li><a href="blog-post.html">Single Post</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> pages <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="register.html">Register page</a></li>
									<li><a href="login.html">Login page</a></li>
									<li><a href="pricing.html">Pricing</a></li>                                        
									<li><a href="shopping-cart.html">Shopping cart</a></li>
									<li><a href="shopping-checkout.html">shopping checkout</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="404.html">404 Page</a></li>
									<li><a href="503.html">Server Error Page</a></li>
									<li><a href="faq.html">FAQ page</a></li>
									<li><a href="terms-of-services.html">Terms of Services</a></li>
								</ul>
							</li>
							<li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
							<!-- Cart Icon Starts -->
							<li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
							<!-- Cart Icon Starts -->
							<!-- Search Icon Starts -->
							<li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
							<!-- Search Icon Ends -->
						</ul>
						<!-- Main Menu Ends -->
					</div>
					<!-- Search Input Starts -->
					<div class="site-search hidden-xs">
						<div class="search-container">
							<input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
							<span class="close">×</span>
						</div>
					</div>
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
        <!-- Header Ends -->
        <!-- Main Slider Section Starts -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container dark-slider" data-alias="vimeo-hero" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_kenburns" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/thumb1.jpg" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/kenburns1.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE AMIRA
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">CREATIVE MULTIPURPOSE TEMPLATE
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="zoomin" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/thumb2.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/kenburns2.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE CREATIVE
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">TEAM WITH BIG TALENTS
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-3" data-transition="zoomin" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/thumb3.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="<?php echo base_url();?>web_assets/img/revolution-slider/kenburns/kenburns3.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE THE BEST
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">COMPANY IN THE WORLD
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target">learn more about us</a></div>
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>About</span> Us</h1>
                    <h4>sravan</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">WE ARE <strong>AMIRA</strong></h3>
                        <hr>
                        <p>We are a leading company sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste. </p>
                        <!-- Tabs Heading Starts -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                            <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                        </ul>
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="about.html">Learn more about us</a>
                    </div>
                    <div class="col-md-6 col-lg-6 about-right-side">
                        <div class="full-image-container hovered">
                            <img class="img-responsive hidden-xs" src="<?php echo base_url();?>web_assets/img/about.jpg" alt="">
                            <div class="full-image-overlay">
                                <h3>Why <strong>Choose Us</strong></h3>
                                <ul class="list-why-choose-us">
                                    <li>Clean Code & Design</li>
                                    <li>Responsive Layout</li>
                                    <li>Powerful Documentation</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy Customization</li>
                                    <li>& Much More ...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Promo</h1>
                        <h4>Made with love for you</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">See Amira like you've never seen it before! Watch our new promo video,<br> and discover just what an Amira membership can do for you!</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Services</h1>
                    <h4>What We Doing</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-leaf" data-headline="Creative Solutions"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-leaf">
                            <h2>Creative Solutions</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-anchor" data-headline="Featured Services"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-anchor">
                            <h2>Featured Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="Custom Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>Custom Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-support" data-headline="Technical Support"></span>
                        <!-- Service Item Cover Ends -->
                        <div class="services-box-item-content fa fa-support">
                            <h2>Technical Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-cogs" data-headline="Responsive Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-cogs">
                            <h2>Responsive Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-file-pdf-o" data-headline="Well Documented"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-file-pdf-o">
                            <h2>Well Documented</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- Testimonials Section Starts -->
        <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Happy</span> Customers</h1>
                        <h4>Testimonials</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper For Sliders Starts -->
                        <!-- Indicators Starts -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Indicators Ends -->
                        <div class="carousel-inner">
                            <!-- Quote #1 Starts -->
                            <div class="item active">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="<?php echo base_url();?>web_assets/img/testimonial/client1.jpg" alt="client">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                                    <h5>Miss Elina Pool</h5>
                                    <h6>Developer - Adobe</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #1 Ends -->
                            <!-- Quote #2 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="<?php echo base_url();?>web_assets/img/testimonial/client2.jpg" alt="client">
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                    <h5>Mr. Antoine Varane</h5>
                                    <h6>Manager - Twitter</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #2 Ends -->
                            <!-- Quote #3 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="<?php echo base_url();?>web_assets/img/testimonial/client3.jpg" alt="client">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <h5>Miss Lucy Walker</h5>
                                    <h6>Manager - Envato</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #3 Ends -->
                        </div>
                        <!-- Wrapper For Sliders Ends -->
                    </div>
                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <!-- Portfolio Section Starts -->
        <section class="portfolio">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Portfolio</h1>
                    <h4>Our latest Works</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-image" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Filter Wrapper Starts -->
                <nav>
                    <ul class="simplefilter nav nav-pills">
                        <!-- Filter Wrapper Items Starts -->
                        <li class="active" data-filter="all"><i class="fa fa-reorder"></i> All Projects</li>
                        <li data-filter="1">Images</li>
                        <li data-filter="2">Videos</li>
                        <li data-filter="3">External Links</li>
                        <!-- Filter Wrapper Items Ends -->
                    </ul>
                </nav>
                <!-- Filter Wrapper Ends -->
                <div>
                    <div class="filtr-container">
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-1.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-1.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-2.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-3.jpg" data-gal="magnific-pop-up[gallery]" title="Gallery project"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-3.jpg" alt="Gallery project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-3.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-4.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-5.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="gallery-project.html">
                                        <h3>Gallery Photos</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="gallery-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="3">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="image-project.html" title="portfolio"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-4.jpg" alt="portfolio" /><span class="zoom-icon external-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>External Link</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-5.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-5.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=O_C5CN1L3Xo"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-6.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-7.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-7.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-vimeo" href="https://vimeo.com/23534361"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-8.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="vimeo-project.html">
                                        <h3>Vimeo Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="vimeo-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-9.jpg" data-gal="magnific-pop-up[gallery]" title="Slider project"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/projects/project-9.jpg" alt="Slider project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="slider-project.html">
                                        <h3>slider project</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="slider-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                    </div>
                </div>
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Facts Section Starts -->
        <section class="facts">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Cool</span> Facts</h1>
                        <h4>our numbers</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Fact Badges Starts -->
                    <div class="fact-badges">
                        <div class="row">
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-briefcase"></i>
                                <h2>
                                    <span><strong class="badges-counter">76</strong>+</span>
                                </h2>
                                <h4>Projects</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-clock-o"></i>
                                <h2>
                                    <span><strong class="badges-counter">90</strong>+</span>
                                </h2>
                                <h4>Hours Work</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-home"></i>
                                <h2>
                                    <span><strong class="badges-counter">18</strong>+</span>
                                </h2>
                                <h4>Offices</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-user"></i>
                                <h2>
                                    <span><strong class="badges-counter">67</strong>+</span>
                                </h2>
                                <h4>Clients</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                        </div>
                    </div>
                    <!-- Fact Badges Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>affordable</span> packages</h1>
                    <h4>our prices</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-dollar" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                        <div class="pricing-switcher">
                            <p>
                                <input type="radio" name="switch" value="monthly" id="monthly-1" checked>
                                <label for="monthly-1">MONTHLY</label>
                                <input type="radio" name="switch" value="yearly" id="yearly-1">
                                <label for="yearly-1">YEARLY</label>
                                <span class="switch"></span>
                            </p>
                        </div>
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #1 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>bronze</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">100</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>1 GB</em> disk space</li>
                                                <li><em>2</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #1 Ends -->
                                    <!-- Yearly Pricing Table #1 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>bronze</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">360</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>10 GB</em> disk space</li>
                                                <li><em>100</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #2 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>silver</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">300</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>3 GB</em> disk space</li>
                                                <li><em>5</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #2 Ends -->
                                    <!-- Yearly Pricing Table #2 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>silver</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">599</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>100 GB</em> disk space</li>
                                                <li><em>unlimited</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #3 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <div class="badge-popular">
                                            <span class="popular">POPULAR</span>
                                        </div>
                                        <header class="pricing-header">
                                            <h2>gold</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">500</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>5 GB</em> disk space</li>
                                                <li><em>10</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #3 Ends -->
                                    <!-- Yearly Pricing Table #3 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <div class="badge-popular">
                                            <span class="popular">POPULAR</span>
                                        </div>
                                        <header class="pricing-header">
                                            <h2>gold</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">899</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>unlimited</em> disk space</li>
                                                <li><em>unlimited</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #3 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
        <!-- Newsletter Section Starts -->
        <section class="newsletter">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>our</span> newsletter</h1>
                        <h4>Keep in touch</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="newsletter-content">
                        <p class="text-center">Sign up to our newsletter subscription and be the first to know about<br> Important news <span> & </span> Amazing offers <span> & </span>Discounts</p>
                        <!-- Newsletter Form Starts -->
                        <form class="form-inputs">
                            <!-- Newsletter Form Input Field Starts -->
                            <div class="col-md-12 form-group custom-form-group">
                                <span class="input custom-input">
									<input placeholder="Enter Your Email" class="input-field custom-input-field" type="text" />
									<label class="input-label custom-input-label" >
										<i class="fa fa-envelope-open-o icon icon-field"></i>
									</label>
								</span>
                            </div>
                            <!-- Newsletter Form Input Field Ends -->
                            <!-- Newsletter Form Submit Button Starts -->
                            <button id="submit" name="submit" type="submit" class="custom-button" title="Send">Subscribe Now</button>
                            <!-- Newsletter Form Submit Button Ends -->
                        </form>
                        <!-- Newsletter Form Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Newsletter Section Ends -->
        <!-- Blog Section Starts -->
        <section class="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Blog</span> Posts</h1>
                    <h4>Latest Articles</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/blog/blog-post-small-1.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">how to be a good freelancer ?</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>18</span>
                                <span>AUG</span>
                            </div>
                            <!-- Post Date Ends -->
                            <a class="custom-button" href="blog-post.html">Read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/blog/blog-post-small-2.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">Collaboration with Envato</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>23</span>
                                <span>JUN</span>
                            </div>
                            <!-- Post Date Ends -->
                            <a class="custom-button" href="blog-post.html">Read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="blog-post.html"><img class="img-responsive" src="<?php echo base_url();?>web_assets/img/blog/blog-post-small-3.jpg" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">why themeforest is best ?</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>01</span>
                                <span>JAN</span>
                            </div>
                            <!-- Post Date Ends -->
                            <a class="custom-button" href="blog-post.html">Read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                </div>
                <!-- Latest Blog Posts Ends -->
            </div>
        </section>
        <!-- Blog Section Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-to-action">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>create</span> account</h1>
                        <h4>get started absolutely free</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Call To Action Starts -->
                    <div class="call-to-action-content">
                        <ul>
                            <li>No Credit Card Required</li>
                            <li>100% Match Deposit Bonus</li>
                            <li>Monthly Free Files</li>
                            <li>Daily Newsletter</li>
                        </ul>
                        <a class="custom-button" href="register.html">register now</a>
                    </div>
                    <!-- Call To Action Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Logos Section Starts -->
        <section class="logos">
            <div class="container">
                <ul class="bxslider" id="bxslider">
                    <!-- Logos Items Starts -->
                    <li><img id="3docean" src="<?php echo base_url();?>web_assets/img/logos-slider/3docean-dark-background.png" alt="3docean"></li>
                    <li><img id="activeden" src="<?php echo base_url();?>web_assets/img/logos-slider/activeden-dark-background.png" alt="activeden"></li>
                    <li><img id="audiojungle" src="<?php echo base_url();?>web_assets/img/logos-slider/audiojungle-dark-background.png" alt="audiojungle"></li>
                    <li><img id="codecanyon" src="<?php echo base_url();?>web_assets/img/logos-slider/codecanyon-dark-background.png" alt="codecanyon"></li>
                    <li><img id="graphicriver" src="<?php echo base_url();?>web_assets/img/logos-slider/graphicriver-dark-background.png" alt="graphicriver"></li>
                    <li><img id="photodune" src="<?php echo base_url();?>web_assets/img/logos-slider/photodune-dark-background.png" alt="photodune"></li>
                    <li><img id="themeforest" src="<?php echo base_url();?>web_assets/img/logos-slider/themeforest-dark-background.png" alt="themeforest"></li>
                    <!-- Logos Items Ends -->
                </ul>
            </div>
        </section>
        <!-- Logos Section Ends -->
        <!-- Footer Section Starts -->
        <footer class="footer top-logos">
            <!-- Footer Top Area Starts -->
            <div class="container top-footer">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Amira</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="pricing.html">pricing</a></li>
								<li><a href="portfolio-3-columns.html">portfolio</a></li>
                                <li><a href="blog-right-sidebar.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Support</h4>
                        <div class="menu">
                            <ul>
								<li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-services.html">Terms of Services</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                <li><span><i class="fa fa-envelope-open"></i> contact@website.com</span></li>
                                <li><span><i class="fa fa-phone"></i> 00216 21 184 010</span></li>
                                <li><span><i class="fa fa-map-marker"></i> London, England</span></li>
                                <li><span><i class="fa fa-clock-o"></i> mon-sat 08am &#x21FE; 05pm</span></li>
                                <li><span><i class="fa fa-skype"></i> amira.skype</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <div>
                                <h5>77,991</h5>
                                <span>projects</span>
                            </div>
                            <div>
                                <h5>80,217</h5>
                                <span>hours work</span>
                            </div>
                            <div>
                                <h5>1,253</h5>
                                <span>offices</span>
                            </div>
                            <div>
                                <h5>17,361</h5>
                                <span>clients</span>
                            </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="#" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="#" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Links Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
                <!-- Footer Bottom Area Starts -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2018 Amira All Rights Reserved | Created with Love by <a href="https://themeforest.net/user/celtano" target="_blank">celtano</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Ends -->
            </div>
            <!-- Footer Top Area Ends -->

        </footer>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <?php $this->load->view('include_foot_script'); ?>   
	
</body>


<!-- Mirrored from slimhamdi.net/amira/demos/index-kenburns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 08:38:05 GMT -->
</html>