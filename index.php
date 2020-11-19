<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Archi is best selling interior design website template with responsive stunning design">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header class="header-custom">
            
			<div class="container">
                <div class="row align-items-center">
					<div class="col-lg-4 sm-hide">
						<div class="info-box s2">
							<i class="icon_clock_alt"></i>
							<div class="info-box_text">
								<div class="info-box_title"><span class="id-color">Opening Times</span></div>
                                <div class="info-box_subtite"><?php print get_option( 'timings' ); ?></div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-12 text-center">
                        <!-- logo begin -->
                        <div id="logo">

						<!-- custom logo -->
						<?php
						if(function_exists('the_custom_logo')){

							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src( $custom_logo_id );
						}
						?>
                            <a href="index.html">
                                <img class="logo" src="<?php echo $logo ?  $logo[0]: get_template_directory_uri() ."/images-kitchen/logo.png" ?>" alt="">
                            </a>
                        </div>
                        <!-- logo close -->
						
						<!-- small button begin -->
						<span id="menu-btn"></span>
						<!-- small button close -->
					</div>
					
					<div class="col-lg-4 text-right sm-hide">
						<div class="info-box s2">
							<i class="icon_house_alt"></i>
							<div class="info-box_text">
								<div class="info-box_title"><span class="id-color">Customer Service</span></div>
								<div class="info-box_subtite"><?php print get_option( 'contact_number' ); ?></div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>

            <div class="menu-group">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
							
							<!-- mainmenu begin -->
							<nav>
							    
								<!-- <ul id="mainmenu">
									<li><a href="index.html">Home<span></span></a>
										<ul class="mega">
											<li>
												<div class="container-fluid">
													<div class="menu-content">
														<div class="row">
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="08_index-architect.html">New: Architect</a></li>
																	<li><a href="index-onepage-stacked.html">New: Onepage Stacked</a></li>
																	<li><a href="07_index-photography.html">New: Photography</a></li>
																	<li><a href="06_index-architecture.html">Architecture</a></li>	
																	<li><a href="05_index-consulting.html">Consulting</a></li>	
																	<li><a href="03_index-apartment.html">Apartment</a></li>	
																	<li><a href="04_index-kitchen.html">Kitchen</a></li>
																	<li><a href="02_index-webstudio.html">Web Studio</a></li>
																	<li><a href="index.html">Original</a></li>
																	<li><a href="index-modern.html">Modern</a></li>
																	<li><a href="index-studio.html">Studio</a></li>
																	<li><a href="index-coworking.html">Coworking</a></li>
																	<li><a href="index-before-after.html">Before After</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="index-landing-product.html">Product Landing</a></li>
																	<li><a href="index-arts.html">Arts</a></li>
																	<li><a href="index-light.html">Original Light</a></li>
																	<li><a href="index-elegant.html">Elegant</a></li>
																	<li><a href="index-header-bottom.html">Bottom Navigation</a></li>
																	<li><a href="index-header-bottom-light.html">Bottom Navigation Light</a></li>
																	<li><a href="index-sidebar.html">Side Navigation</a></li>
																	<li><a href="sidebar-light-index.html">Side Navigation Light</a></li>
																	<li><a href="index-landing-page.html">Onepage Landing</a></li>
																	<li><a href="index-landing-page-light.html">Onepage Landing Light</a></li>
																	<li><a href="index-minimal.html">Minimal</a></li>			
																	<li><a href="index-corporate.html">Corporate</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>																	
																	<li><a href="01_index-minisite.html">Minisite</a></li>
																	<li><a href="index-onepage.html">Onepage</a></li>
																	<li><a href="index-onepage-light.html">Onepage Light</a></li>
																	<li><a href="index-masonry-med-4-cols.html">Masonry</a></li>
																	<li><a href="index-masonry-light-med-4-cols.html">Masonry Light</a></li>
																	<li><a href="index-profession.html">Profession</a></li>
																	<li><a href="index-profession-light.html">Profession Light</a></li>
																	<li><a href="index-portfolio-minimal.html">Portfolio Minimal</a></li>
																	<li><a href="index-snowy.html">Snowy</a></li>
																	<li><a href="index-coming-soon.html">Coming Soon Page</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="index-rtl.html">Home (RTL)</a></li>
																	<li><a href="index-hero-slider.html">Hero Slider</a></li>
																	<li><a href="index-hero-particle.html">Hero Particle</a></li>
																	<li><a href="index-hero-parallax.html">Hero Parallax</a></li>
																	<li><a href="index-hero-video.html">Hero Video Background</a></li>
																	<li><a href="index-hero-youtube.html">Hero Youtube Background</a></li>
																	<li><a href="index-hero-looping-image.html">Hero Looping Image</a></li>
																</ul>
															</div>
															
															
														</div>
													</div>
												</div>
											</li>                                        
										</ul>
									</li>
									<li><a href="#">Pages</a>
										<ul class="mega">
											<li>
												<div class="container-fluid">
													<div class="menu-content">
														<div class="row">
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Pages</li>
																	<li><a href="pricing-table-3-cols.html">Pricing 3 Cols</a></li>
																	<li><a href="pricing-table-4-cols.html">Pricing 4 Cols</a></li>
																	<li><a href="faq.html">FAQ</a></li>
																	<li><a href="about.html">About Us</a></li>
																	<li><a href="about-rtl.html">About Us (RTL)</a></li>
																	<li><a href="pricing-table-3-cols-light.html">Pricing 3 Cols Light</a></li>
																	<li><a href="pricing-table-4-cols-light.html">Pricing 4 Cols Light</a></li>
																	<li><a href="faq-light.html">FAQ Light</a></li>
																	<li><a href="about-light.html">About Us Light</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Headers</li>
																	<li><a href="header-custom-style-1.html">Extended Header 1</a></li>
																	<li><a href="header-custom-style-2.html">Extended Header 2</a></li>
																	<li><a href="header-custom-style-3.html">Extended Header 3</a></li>
																	<li><a href="header-custom-style-1-light.html">Extended Header Light 1</a></li>
																	<li><a href="header-custom-style-2-light.html">Extended Header Light 2</a></li>
																	<li><a href="header-custom-style-3-light.html">Extended Header Light 3</a></li>
																	<li><a href="index.html">Header Default</a></li>
																	<li><a href="index-header-bottom.html">Header Bottom</a></li>
																	<li><a href="index-sidebar.html">Header Side</a></li>
																	<li><a href="index-arts.html">Header Autoshow</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Elements</li>
																	<li><a href="icons-fontawesome.html">768 FontAwesome Icons</a></li>
																	<li><a href="icons-elegant.html">358 Elegant Icons</a></li>
																	<li><a href="icons-etline.html">100 Etline Icons</a></li>
																	<li><a href="accordion.html">Accordion</a></li>
																	<li><a href="alerts.html">Alerts</a></li>
																	<li><a href="before-after.html">Before After</a></li>
																	<li><a href="buttons.html">Buttons</a></li>
																	<li><a href="carousel.html">Carousel</a></li>
																	<li><a href="countdown.html">Countdown</a></li>
																	<li><a href="counters.html">Counters</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Elements</li>
																	<li><a href="form-style.html">Form Style</a></li>
																	<li><a href="icon-box.html">Icon Box</a></li>
																	<li><a href="modal.html">Modal</a></li>
																	<li><a href="skill-bar.html">Skill Bar</a></li>
																	<li><a href="steps.html">Steps</a></li>
																	<li><a href="tabs.html">Tabs</a></li>
																	<li><a href="team.html">Team</a></li>
																	<li><a href="timeline.html">Timeline</a></li>
																</ul>
															</div>
															
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</li>                                        
										</ul>
									</li>
									<li><a href="project-wide-4-cols.html">Projects</a>
										<ul>
											<li><a href="project-wide-4-cols.html">Wide Style</a>
												<ul>
													<li><a href="project-wide-2-cols.html">2 Cols Wide</a></li>
													<li><a href="project-wide-3-cols.html">3 Cols Wide</a></li>
													<li><a href="project-wide-4-cols.html">4 Cols Wide</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Contained Style</a>
												<ul>
													<li><a href="project-contained-2-cols.html">2 Cols Contained</a></li>
													<li><a href="project-contained-3-cols.html">3 Cols Contained</a></li>
													<li><a href="project-contained-4-cols.html">4 Cols Contained</a></li>
												</ul>
											</li>
											<li><a href="project-carousel-3-cols.html">Carousel Style</a>
												<ul>
													<li><a href="project-carousel-2-cols.html">2 Cols Carousel</a></li>
													<li><a href="project-carousel-3-cols.html">3 Cols Carousel</a></li>
													<li><a href="project-carousel-4-cols.html">4 Cols Carousel</a></li>
												</ul>
											</li>
											<li><a href="project-inverted-3-cols.html">Inverted Style</a>
												<ul>
													<li><a href="project-inverted-2-cols.html">2 Cols Inverted</a></li>
													<li><a href="project-inverted-3-cols.html">3 Cols Inverted</a></li>
													<li><a href="project-inverted-4-cols.html">4 Cols Inverted</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Masonry Gallery</a>
												<ul>
													<li><a href="project-masonry-4-cols.html">3 Cols Masonry</a></li>
													<li><a href="project-masonry-3-cols.html">4 Cols Masonry</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Simple Gallery</a>
												<ul>
													<li><a href="gallery-2-cols.html">2 Cols</a></li>
													<li><a href="gallery-3-cols.html">3 Cols</a></li>
													<li><a href="gallery-4-cols.html">4 Cols</a></li>
												</ul>
											</li>
											<li><a href="#">Misc</a>
												<ul>
													<li><a href="project-before-after.html">Before After</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="services.html">Services</a>
										<ul>
											<li><a href="service-1.html">Residential Design</a></li>
											<li><a href="service-2.html">Hospitaly Design</a></li>
											<li><a href="service-3.html">Office Design</a></li>
											<li><a href="service-4.html">Commercial Design</a></li>
											<li><a href="services.html">All Services</a></li>
											<li><a href="services-style-2.html">New All Services</a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog</a>
										<ul>
											<li><a href="blog.html">Right Sidebar</a></li>
											<li><a href="blog-light.html">Right Sidebar Light</a></li>										
											<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-left-sidebar-light.html">Left Sidebar Light</a></li>
											<li><a href="blog-single.html">Single</a></li>
											<li><a href="blog-single-light.html">Single Light</a></li>
										</ul>
									</li>
									<li><a href="shop.html">Shop</a>
										<ul>
											<li><a href="shop.html">Shop Dark</a></li>
											<li><a href="shop-light.html">Shop Light</a></li>
											<li><a href="product-single.html">Product Single</a></li>
											<li><a href="product-single-light.html">Product Single Light</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul> -->
							</nav>
							
							<!-- mainmenu close -->
							
						</div>
						
					</div>
				</div>
			</div>
			
			
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="slider-revolution">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src=<?php echo get_template_directory_uri() ."/images-kitchen/slider/wide1.jpg"?>>
                            
							<div class="tp-caption big-white sft" data-x="center" data-y="250" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="800" data-start="400" data-easing="easeInOutExpo"
							<div class="tp-caption big-white sft" data-x="center" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="800" data-start="400" data-easing="easeInOutExpo"
                                data-endspeed="450" >
                                Archi Kitchen
                            </div>

                            <div class="tp-caption tp-title tp-60 text-light text-center font-weight-bold customin customout start" data-x="center" data-y="290" data-width="600" data-height="none" data-whitespace="wrap"  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                                Luxury Kitchen Design<br>In Your Home
                            </div>

                            <div class="tp-caption sfb" data-x="center" data-y="440" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="400" data-start="800" data-easing="easeInOutExpo">
                                <a href="#section-intro" class="btn-custom font-weight-bold text-white scroll-to">Our Portfolio
                                </a>
                            </div>
                        </li>
						
						<li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src=<?php echo get_template_directory_uri() ."/images-kitchen/slider/wide2.jpg" ?> >
                            
							<div class="tp-caption big-white sft" data-x="center" data-y="250" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="800" data-start="400" data-easing="easeInOutExpo"
							<div class="tp-caption big-white sft" data-x="center" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="800" data-start="400" data-easing="easeInOutExpo"
                                data-endspeed="450" >
                                Archi Kitchen
                            </div>

                            <div class="tp-caption tp-title tp-60 text-light text-center font-weight-bold customin customout start" data-x="center" data-y="290" data-width="600" data-height="none" data-whitespace="wrap"  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                               A Kitchen to Suit<br>Your Lifestyle
                            </div>

                            <div class="tp-caption sfb" data-x="center" data-y="500" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="400" data-start="800" data-easing="easeInOutExpo">
                                <a href="#section-intro" class="btn-custom font-weight-bold text-white scroll-to">Our Portfolio
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->
			
			<!-- section begin -->
            <section id="call-to-action" class="bg-color call-to-action text-light padding40" aria-label="cta">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <h3 class="size-2 no-margin">Are you looking for best kitchen designer? </h3>
                        </div>

                        <div class="col-lg-4 col-md-5 text-right">
                            <a href="contact.html" class="btn-black wow fadeInUp">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- logo carousel section close -->
			
			<!-- section begin -->
            <section id="section-intro">
                <div class="container">
                    <div class="row align-items-center">
						<div class="col-lg-6">
                            <img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/1.png" ?> alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                        </div>
						
                        <div class="col-lg-6">
								<div class="padding20">
									
									<h2>We are team based on Los Angeles. Our expertise on Kitchen Design.</h2>

								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

								<a href="#" class="btn-custom font-weight-bold text-white">Contact Sales</a>
								
								</div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			
			<section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom" data-bgcolor="#232628">
				<div class="container-fluid">
					<div class="row align-items-center no-gutters">
						<div class="col-md-3 text-center">
							<div class="spacer-single"></div>
							<h3 class="no-bottom">Recent Works</h3>
							<div class="spacer-single"></div>
						</div>
						
						<div class="col-md-9">
							<div class="owl-custom-nav">
								<a class="btn-next"></a>
								<a class="btn-prev"></a>
							</div>
						
							<div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="images-kitchen/portfolio/1.jpg">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Alaska</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/1.jpg" ?> alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="images-kitchen/portfolio/2.jpg">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Montana</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/2.jpg" ?> alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/3.jpg"?>>
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Oklahoma</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/3.jpg" ?> alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/4.jpg"?>>
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Virginia</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/4.jpg"?> alt="" />
									</a>                        
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/5.jpg"?>>
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Washington</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/5.jpg" ?> alt="" />
									</a>                        
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/6.jpg"?>>
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name">Minnesota</span>
											</span>
										</span>
										<img src=<?php echo get_template_directory_uri() ."/images-kitchen/portfolio/6.jpg" ?> alt="" />
									</a>                        
								</div>
							</div>
							<!-- close gallery item -->
							
						</div>
							
						</div>
					</div>
				</div>
			</section>
			

            <!-- section begin -->
            <section id="section-highlight" data-bgcolor="#1e2022">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Why Choose Us?</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0s">
                            <div class="box-number">
                               <i class="bg-color text-light icon_ribbon_alt"></i>
                                <div class="text">
                                    <h3><span>Certified Designer</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".25s">
                            <div class="box-number">
                                <i class="bg-color text-light icon_star_alt"></i>
                                <div class="text">
                                    <h3><span>Top Rated Company</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-number">
                                <i class="bg-color text-light icon_comment_alt"></i>
                                <div class="text">
                                    <h3><span>Free Consultation</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-single"></div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".75s">
                            <div class="box-number">
                                <i class="bg-color text-light icon_tag_alt"></i>
                                <div class="text">
                                    <h3><span>Affordable Price</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1s">
                            <div class="box-number">
                                <i class="bg-color text-light icon_shield"></i>
                                <div class="text">
                                    <h3><span>Guaranteed Works</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1.25s">
                            <div class="box-number">
                                <i class="bg-color text-light icon_headphones"></i>
                                <div class="text">
                                    <h3><span>24/7 Support</span></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                </div>
                            </div>
                        </div>
						

                    </div>
                </div>
            </section>
            <!-- section close -->
			
			
			<section id="section-why-choose-us-2">

                <div class="container">
                    <div class="row">
							<div class="col-md-6 offset-md-3 text-light text-center wow fadeInUp">
								<h1>Kitchen Type</h1>
								<div class="separator"><span><i class="fa fa-square"></i></span></div>
								<div class="spacer-single"></div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay="0s">
								<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r1.jpg" ?> class="img-responsive" alt="">
								
                                <div class="text padding30" data-bgcolor="#111111">									
                                    <h3>U-Shaped Kitchen</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
							</div>

							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay=".3s">
									<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r2.jpg" ?> class="img-responsive" alt="">
									<div class="text padding30" data-bgcolor="#111111">									
										<h3>L-Shaped Kitchen</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
									</div>
									
									
							</div>

							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay=".6s">
									<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r3.jpg" ?> class="img-responsive" alt="">
									
									<div class="text padding30" data-bgcolor="#111111">									
										<h3>Island Kitchen</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
									</div>
							</div>
							
							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay="0s">
									<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r4.jpg" ?> class="img-responsive" alt="">
									<div class="text padding30" data-bgcolor="#111111">									
										<h3>Parallel Kitchen</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
									</div>
							</div>

							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay=".3s">
									<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r5.jpg"?> class="img-responsive" alt="">
									<div class="text padding30" data-bgcolor="#111111">									
										<h3>Straight Kitchen</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
									</div>
							</div>
							
							<div class="col-lg-4 mb30 wow fadeInUp" data-wow-delay=".6s">
									<img src=<?php echo get_template_directory_uri() ."/images-kitchen/misc/r6.jpg" ?> class="img-responsive" alt="">
									<div class="text padding30" data-bgcolor="#111111">									
										<h3>Modular Kitchen</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
									</div>
							</div>
							
						</div>
                        
                    </div>
					
            </section>
			
			<section class="bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-6 offset-md-3 text-light text-center wow fadeInUp">
								<h1>Before &amp; After</h1>
								<div class="spacer-single"></div>
							</div>
							
						<div class="col-md-12 text-middle wow fadeInUp" data-wow-delay=".2s">
							<div class="twentytwenty-container img-rounded shadow">
							  <img src=<?php echo get_template_directory_uri() ."/images-kitchen/before-after/1b.jpg" ?> alt="" class="img-responsive" />							  
							  <img src=<?php echo get_template_directory_uri() ."/images-kitchen/before-after/1a.jpg" ?> alt="" class="img-responsive" />
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- section begin -->
            <section id="section-testimonial-kitchen" data-bgimage="url(<?php echo get_template_directory_uri() .'/images-kitchen/background/bg-1.jpg' ?>) fixed">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 offset-md-2">
                            
							<div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
								<blockquote class="testimonial-big">
									<span class="title">Big attention to details!</span>
									I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.

									<span class="name">John, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Modern and great design!</span>
									Just wow! I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.

									<span class="name">Sandra, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Better than we think!</span>
									I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.

									<span class="name">Michael, Customer</span>
								</blockquote>
							</div>
							
                        </div>

                    </div>
					
					<div class="row">

                        <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <h3 class="timer" data-to="2350" data-speed="2500">0</h3>
                                <span>Hours of Works</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3 class="timer" data-to="128" data-speed="2500">0</h3>
                                <span>Projects Complete</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="750" data-speed="2500">0</h3>
                                <span>Slice of Pizza</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <h3 class="timer" data-to="520" data-speed="2500">0</h3>
                                <span>Cups of Coffee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Have Question?</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        </div>

                        <div class="col-md-8 offset-md-2 wow fadeInUp">
                            <form name="contactForm" id='contact_form' method="post" action='https://www.designesia.com/themes/archi-main/email.php'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Question"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <p id='submit'>
                                            <input type='submit' id='send_message' value='Submit Question' class="btn btn-line">
                                        </p>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->

          </div>


            <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src=<?php echo get_template_directory_uri() ."/images-kitchen/logo.png"?> class="logo-small" alt=""><br> We are team based on Los Angeles. Our
                            expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_recent_post">
                                <h3>Latest News</h3>
                                <ul>
                                    <li><a href="blog-single.html">5 Things That Take a Room from Good to Great</a></li>
                                    <li><a href="blog-single.html">Functional and Stylish Wall-to-Wall Shelves</a></li>
                                    <li><a href="blog-single.html">9 Unique and Unusual Ways to Display Your TV</a></li>
                                    <li><a href="blog-single.html">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                                    <li><a href="blog-single.html">How to Make a Huge Impact With Multiples</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3>Contact Us</h3>
                            <div class="widget widget-address">
                                <address>
                                    <span>100 S Main St, Los Angeles, CA</span>
                                    <span><strong>Phone:</strong>(208) 333 9296</span>
                                    <span><strong>Fax:</strong>(208) 333 9298</span>
                                    <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                                    <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                &copy; Copyright 2020 - Archi Interior Design Template by <span>Designesia</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>
    </div>

    <div id="purchase-now">
    	<a href="https://themeforest.net/item/archi-interior-design-website-template/10940889"><span>$</span>20</a>
    	<div class="pn-hover">Buy Now</div>
    </div>

    <!-- Javascript Files
	================================================== -->
	<?php wp_footer(); ?>
	<!-- <script src="js/jquery.min.js"></script>
	
    <script src="js/jpreLoader.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
    <script src="js/jquery.isotope.min.js"></script>
	<script src="js/easing.js"></script>
	
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
	<script src="js/jquery.countTo.js"></script>
	
    <script src="js/classie.js"></script>
	<script src="js/video.resize.js"></script>
	
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
	<script src="js/enquire.min.js"></script>	
    <script src="js/jquery.plugin.js"></script>
	<script src="js/jquery.countdown.js"></script>	
    <script src="js/countdown-custom.js"></script>
    <script src="js/designesia.js"></script>	
	<script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>	 -->
	

    <!-- RS5.0 Core JS Files -->
    <!-- <script src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script> -->

    <!-- RS5.0 Extensions Files -->
    <!-- <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="http://interior.test/wp-content/themes/kitchen/revolution/js/extensions/revolution.extension.parallax.min.js"></script> -->

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>

	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>

</body>


</html>