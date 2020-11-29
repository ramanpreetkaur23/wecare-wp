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
							<?php     
							    wp_nav_menu( array( 
									'theme_location' => 'main_nav', 
									'container' => 'ul', 
									'walker'=> new P_menu_walker(), 
									'items_wrap' => '<ul id="mainmenu" class="dotted-seperator">%3$s</ul>'
								) )
							?> 
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
									I am impressed with the services they provide. Their team is great. They really took the time to understand
                                    my style and helped me express myself in my home. The team's attention to details are phenomenal. They did 
                                    an amazing job blending my old and new furniture and decor. I'd definitely recommend them.

									<span class="name">Ashutosh, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Modern and great design!</span>
                                    I absolutely loved working with wecare. They made the entire renovation an amazing experience.
                                    Their designs are great and very modern. I would definitely recommend them to anyone.
									<span class="name">Ashish, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Better than we think!</span>
									wecare services are absolutely amazing, which is why we engaged them for multiple projects! 
                                    Always client centric, solution oriented, programatic in their approach. If you want a team that will
                                    continously exceed your expectations while managing your project from start to finish, look no further just hire them.
									<span class="name">Santosh, Customer</span>
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
                        <div  class="col-md-4">
                            <!-- custom logo -->
                            <?php
                            if(function_exists('the_custom_logo')){

                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src( $custom_logo_id );
                            }
                            ?>
                                <a href="index.html">
                                    <img class="logo-small" src="<?php echo $logo ?  $logo[0]: get_template_directory_uri() ."/images-kitchen/logo.png" ?>" alt="">
                                </a><br>
                            <!-- logo close -->
                            Our vision is to ensure the longevity of our company through repeat and referral business achieved by
                            customer satisfaction in all areas including timeliness, attention to detail and service-minded attitude. 
                        </div>

                        <div class="col-md-3">
                        </div>

                        <div class="col-md-5">
                            <h3>Contact Us</h3>
                            <div class="widget widget-address">
                                <address>
                                    <span><?php print get_option( 'address' ); ?></span>
                                    <span><strong>Phone:</strong><a href="tel:+<?php print get_option( 'contact_number' ); ?>"><?php print get_option( 'contact_number' ); ?></a></span>
                                    <span><strong>Email:</strong><a href="mailto:<?php print get_option( 'email_handler' ); ?>"><?php print get_option( 'email_handler' ); ?></a></span>
                                    <span><strong>Web:</strong><a href="#">xyz.com</a></span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                &copy; Copyright 2020-Design by <a href="mailto:ramanpreetkaur931@gmail.com">Ramanpreet Kaur</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
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


    <!-- Javascript Files
	================================================== -->
	<?php wp_footer(); ?>

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