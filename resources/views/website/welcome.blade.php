<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700&display=swap&subset=cyrillic" rel="stylesheet">
	<title>Art Universe</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="{{asset('assets/website/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/favicon.png')}}" rel="shortcut icon" type="image/x-icon">
	<link href="{{asset('assets/website/favicon.png')}}" rel="icon" type="image/x-icon">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="#3D0082" name="msapplication-TileColor">
	<meta content="#3D0082" name="theme-color">
</head>
<body>
	<div class="container" id="container">
		<svg class="shape-overlays" preserveaspectratio="none" viewbox="0 0 100 100">
            <defs>
                <lineargradient id="gradient1" x1="0%" x2="0%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#F7973B"></stop>
                    <stop offset="100%" stop-color="#FF00A9"></stop>
                </lineargradient>
                <lineargradient id="gradient2" x1="0%" x2="0%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#E200FF"></stop>
                    <stop offset="100%" stop-color="#00FFE2"></stop>
                </lineargradient>
                <lineargradient id="gradient3" x1="0%" x2="0%" y1="0%" y2="100%">
                    <stop offset="0%" stop-color="#110046"></stop>
                    <stop offset="100%" stop-color="#32004a"></stop>
                </lineargradient>
            </defs>
            <path class="shape-overlays__path" d=""></path>
            <path class="shape-overlays__path" d=""></path>
            <path class="shape-overlays__path" d=""></path>
		</svg>
		<div class="menu" id="global-menu__item">
			<div class="wrap">
				<div class="wrap_float">
					<div class="right">
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="showcase.html">Showcase</a>
							</li>
							<li>
								<a href="services.html">Services</a>
							</li>
							<li>
								<a href="about.html">About us</a>
							</li>
							<li class="dropdown_li">
								<a class="dropdown_a" href="blog.html">Blog</a>
								
							</li>
							<li>
								<a href="{{'/auth'}}">Login/Signup</a>
							</li>
							<li>
								<a href="{{'/logout'}}">Logout</a>
							</li>
						</ul>
					</div>
					<div class="left">
						<div class="title">
							Contacts
						</div>
						<div class="tel">
							<a href="#">+390 55 444 3 222</a>
						</div>
						<div class="email">
							<a href="mailto:digistrict@yandex.ru">digistrict@yandex.ru</a>
						</div>
						<div class="link js-modal-form">
							Let’s be in touch
						</div>
						<div class="mob-socials">
                           <a href="#" class="behance"></a>
                           <a href="#" class="instagram"></a>
                           <a href="#" class="twitter"></a>
                        </div>
					</div>
				</div>
			</div>
		</div>

<div class="hum_btn hamburger" id="menu-hamburger">
			<svg class="ham hamRotate ham7" viewbox="0 0 100 100">
			    <path class="line top" d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013"></path>
			    <path class="line middle" d="m 70,50 h -40"></path>
			    <path class="line bottom" d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40"></path>
            </svg>
		</div>
		<a class="head_btn" href="showcase.html">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
		</a>
		<div class="top_panel">
			<a class="logo" href="/"></a>
		</div>
		<div class="main_slider js_height" id="main_slider">
			<div class="explore-link js_anchor" data-href="#varieties">
				<span class="p">Scroll to explore</span>
				<div class="scroll-down">
					<span class="circle"><span class="scroll-arrow"></span></span>
				</div>
			</div>
			<div class="socials">
				<a class="instagram" href="#"></a>
				<a class="twitter" href="#"></a>
				<a class="behance" href="#"></a>
			</div>
			<div class="arrow next"></div>
			<div class="slider_wrap" id="main_slider_wrap">
				<div class="slide" style="background-image: url(https://i.pinimg.com/originals/f7/cf/03/f7cf032809b4292e165a5a9d66ddd860.jpg);">
					<div class="blur">
						<div class="blur_div"></div>
						<div class="bg_color" style="background-color: #290417"></div>
						<div class="content">
							<div class="content_wrap">
								<h3 class="slide_title">What you were<br>
								looking for</h3>
								<p class="slide_subtitle">Rebranding</p><a class="link" href="single.html"><span><span class="link-text">Discover now</span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url(https://wallpaperaccess.com/full/181632.jpg);">
					<div class="blur">
						<div class="blur_div"></div>
						<div class="bg_color" style="background-color: #FD7C00"></div>
						<div class="content">
							<div class="content_wrap">
								<h3 class="slide_title">More than just<br>
								a template</h3>
								<p class="slide_subtitle">Digital</p><a class="link" href="single.html"><span><span class="link-text">Discover now</span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url(https://wallpaperaccess.com/full/206345.jpg);">
					<div class="blur">
						<div class="blur_div"></div>
						<div class="bg_color" style="background-color: #71B1E4"></div>
						<div class="content">
							<div class="content_wrap">
								<h3 class="slide_title">Minimalism<br>
								attracts</h3>
								<p class="slide_subtitle">Pictures</p><a class="link" href="single.html"><span><span class="link-text">Discover now</span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url(https://images.wallpaperscraft.com/image/man_paint_sky_129261_1920x1080.jpg);">
					<div class="blur">
						<div class="blur_div"></div>
						<div class="bg_color" style="background-color: #24005A"></div>
						<div class="content">
							<div class="content_wrap">
								<h3 class="slide_title">Every minute<br>
								is amazing</h3>
								<p class="slide_subtitle">Rebranding</p><a class="link" href="single.html"><span><span class="link-text">Discover now</span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide video-slide" data-background="https://via.placeholder.com/1000x500">
					<div class="video">
						<video autoplay="" class="fullscreen-bg__video lazy-hidden" loop=""><source src="#" type="video/mp4"></video>
					</div>
					<div class="blur">
						<div class="blur_div"></div>
						<div class="bg_color" style="background-color: #000"></div>
						<div class="content">
							<div class="content_wrap">
								<h3 class="slide_title">Meduza | Blog<br>
								& Magazine</h3>
								<p class="slide_subtitle">Soon</p><a class="link" href="single.html"><span><span class="link-text">Discover now</span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="arrow prev"></div>
		</div>
		<section class="varieties" id="varieties">
			<div class="wrap">
				<div class="wrap_float">
					<h2 class="title">These are the premium<br>
					services we provide</h2>
					<div class="section_content">
						<div class="col">
							<h3 class="_title">Branding</h3>
							<ul class="_text">
								<li>Research and brand strategy</li>
								<li>Identification system</li>
								<li>Product design and packaging</li>
								<li>Advertising campaign</li>
							</ul><a class="link" href="showcase.html"><span><span class="link-text">Discover now</span></span></a>
						</div>
						<div class="col">
							<h3 class="_title">Digital</h3>
							<ul class="_text">
								<li>Research and brand strategy</li>
								<li>Identification system</li>
								<li>Product design and packaging</li>
								<li>Advertising campaign</li>
							</ul><a class="link" href="showcase.html"><span><span class="link-text">Discover now</span></span></a>
						</div>
						<div class="col">
							<h3 class="_title">Pictures</h3>
							<ul class="_text">
								<li>Research and brand strategy</li>
								<li>Identification system</li>
								<li>Product design and packaging</li>
								<li>Advertising campaign</li>
							</ul><a class="link" href="showcase.html"><span><span class="link-text">Discover now</span></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio">
			<div class="section_content">
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://p2d7x8x2.stackpathcdn.com/wordpress/wp-content/uploads/2017/03/Jan_Vermeer_van_Delft_-_The_Glass_of_Wine_-_Google_Art_Project-640x553-1.jpg)"></div>
                                <div class="info">
                                    <h3 class="item-title">What you were<br>
                                    looking for</h3>
                                    <p class="item-category">Rebranding</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://i.pinimg.com/originals/c3/4a/50/c34a5046f1f6ef0269819cfef73c19c2.jpg)"></div>
                                <div class="info">
                                    <h3 class="item-title">More than just<br>
                                    a template</h3>
                                    <p class="item-category">Digital</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://i.pinimg.com/originals/45/e9/68/45e968ca82381d31b1f0d781a9d7b890.jpg)"></div>
                                <div class="info">
                                    <h3 class="item-title">Minimalism<br>
                                    attracts</h3>
                                    <p class="item-category">Pictures</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(http://littlevillagemag.com/wp-content/uploads/2016/07/Screen-Shot-2016-07-05-at-11.55.23-AM-640x553.png)"></div>
                                <div class="info">
                                    <h3 class="item-title">Every minute<br>
                                    is amazing</h3>
                                    <p class="item-category">Video</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://www.artagencypartners.com/wp-content/uploads/2017/05/Christies-Guston-Painter-640x553.jpg)"></div>
                                <div class="info">
                                    <h3 class="item-title">Color energy</h3>
                                    <p class="item-category">Rebranding</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://carbonmade-media.accelerator.net/35992918;640x553.jpeg)"></div>
                                <div class="info">
                                    <h3 class="item-title">The future has<br>
                                    already come</h3>
                                    <p class="item-category">Pictures</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://lh3.googleusercontent.com/proxy/KmWSAyRqXx9dRONvZsK4uIIsO5MmMcnKBE6LdC7fgE_8pI1EJWgPsd4XV9b1tJYkiHCayevuIMQOpwiA4DYd8V-rHCR6lP4l-LoS3QK9eXdZvjhjciYCdJg-dmxVt0I8YwvK2R0w0g)"></div>
                                <div class="info">
                                    <h3 class="item-title">The digital world<br>
                                    is beautiful</h3>
                                    <p class="item-category">Rebranding</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://www.abandonedspaces.com/wp-content/uploads/2020/10/french-122-year-old-villa-laurens18-640x553.jpg)"></div>
                                <div class="info">
                                    <h3 class="item-title">Give vent to<br>
                                    your feelings</h3>
                                    <p class="item-category">Digital</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
				<a class="item" href="single.html">
                    <div class="sq_parent">
                        <div class="sq_wrap">
                            <div class="sq_content">
                                <div class="img" style="background-image: url(https://images.pexels.com/photos/1293125/pexels-photo-1293125.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)"></div>
                                <div class="info">
                                    <h3 class="item-title">Riot of<br>
                                    emotions</h3>
                                    <p class="item-category">Rebranding</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</a>
			</div>
		</section>
		<div class="info-block">
			<div class="wrap">
				<div class="wrap_float">
					<p><b>Look at our projects.</b> You will not remain indifferent after watching. Randomised words which don’t look. If passage words you are going to use a passage words which don’t look of you need to be sure.</p>
					<a class="link" href="showcase.html"><span><span class="link-text">Discover now</span></span></a>
				</div>
			</div>
		</div>
		<section class="awards">
			<div class="wrap">
				<div class="wrap_float">
					<h2 class="title">Awards</h2>
					<div class="section_content">
						<div class="item">
							<div class="item-logo"><img alt="" src="https://via.placeholder.com/240x40"></div>
							<div class="item-info">
								<div class="num">
									5
								</div>
								<div class="text">
									Rating digital design studios (TAGLINE)
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item-logo"><img alt="" src="https://via.placeholder.com/240x40"></div>
							<div class="item-info">
								<div class="num">
									2
								</div>
								<div class="text">
									Rating digital design studios (TAGLINE)
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item-logo"><img alt="" src="https://via.placeholder.com/240x40"></div>
							<div class="item-info">
								<div class="num">
									12
								</div>
								<div class="text">
									Rating digital design studios (TAGLINE)
								</div>
							</div>
						</div>
					</div>
					<a class="link" href="about.html"><span><span class="link-text">Full list of awards</span></span></a>
				</div>
			</div>
		</section>
		<section class="contacts-form">
			<div class="wrap">
				<div class="wrap_float">
					<h2 class="title">Tell us about your project,<br>
					please be descriptive.</h2>
					<div class="section_content">
						<div class="form">
							<div class="fields">
								<div class="input_wrap">
									<input class="input placeholder js_input" placeholder="Full Name" type="text">
								</div>
								<div class="input_wrap">
									<input class="input placeholder js_input" placeholder="Email" type="text">
								</div>
								<div class="input_wrap">
									<input class="input placeholder js_input" placeholder="Phone" type="text">
								</div>
								<div class="input_wrap">
									<textarea class="textarea placeholder js_input" placeholder="Your Message"></textarea>
								</div>
							</div>
							<button class="submit btn"><span></span> <span class="text">Click for test</span></button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<footer class="footer">
		<div class="wrap">
			<div class="wrap_float">
				<div class="footer_top">
					<h2 class="title">Have an idea or project?<br>
					Let’s talk</h2>
					<a class="link js-modal-form"><span><span class="link-text">Let’s be in touch</span></span></a>
				</div>
				<div class="footer_bottom">
					<div class="left">
						<div class="contact">
							<a href="#">+380 55 444 3 222</a>
							<a href="mailto:digistrict@yandex.ru">digistrict@yandex.ru</a>
						</div>
						<div class="copyr">
							© 2018 Untold - All rights reserved
						</div>
					</div>
					<div class="right">
						Site created by <a href="#">Digistrict</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="modal_form" id="modal_form">
		<div class="wrap">
			<div class="wrap_float">
				<h2 class="title" data-success="We have received your request, thank you!" style="max-width: 525px;">Tell us about your project, please be descriptive.</h2>
				<div class="form_wrap">
					<div class="form">
						<div class="input_wrap">
							<input class="input placeholder js_input" placeholder="Full Name" type="text">
						</div>
						<div class="input_wrap">
							<input class="input placeholder js_input" placeholder="Email" type="text">
						</div>
						<div class="input_wrap">
							<input class="input placeholder js_input" placeholder="Phone" type="text">
						</div>
						<div class="input_wrap">
							<textarea class="textarea placeholder js_input" placeholder="Your Message"></textarea>
						</div>
						<button class="submit btn js-submit"><span></span> <span class="text">SEND</span></button>
					</div>
				</div>
				<div class="success">
					<button class="submit"><span></span><span class="text">SEND</span></button>
				</div>
			</div>
		</div>
		<div class="close active">
			<svg class="ham hamRotate ham7" viewbox="0 0 100 100">
			    <path class="line top" d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013"></path>
			    <path class="line middle" d="m 70,50 h -40"></path>
			    <path class="line bottom" d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40"></path>
            </svg>
		</div>
	</div>
	<script defer src="{{asset('assets/website/js/jquery.min.js')}}"></script>
	<script defer src="{{asset('assets/website/js/slick.min.js')}}"></script> 
	<script defer src="{{asset('assets/website/js/device.min.js')}}"></script>
	<script defer src="{{asset('assets/website/js/easings.js')}}"></script> 
	<script defer src="{{asset('assets/website/js/jquery.placeholder.label.js')}}"></script> 
	<script defer src="{{asset('assets/website/js/scripts.min.js')}}"></script> 
	<script defer src="{{asset('assets/website/js/webkit-scripts.js')}}"></script>
</body>
</html>
	