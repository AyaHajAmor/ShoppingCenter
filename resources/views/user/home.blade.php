@extends('user.layouts.index')
@section('content')
<!-- Content
		============================================= -->
		
			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".pf-icons">Icons</a></li>
						<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
						<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
						<li><a href="#" data-filter=".pf-media">Media</a></li>
						<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

					</ul><!-- #portfolio-filter end -->

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/1.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image" title="IMage"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Open Imagination</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
								<span><a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
								</a>
								<div class="portfolio-overlay">
									<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-media">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/5.jpg" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Console Activity</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-illustrations">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/6.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/6-1.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/6-2.jpg" alt="Shake It"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/6-3.jpg" alt="Shake It"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/7.jpg" alt="Backpack Contents">
								</a>
								<div class="portfolio-overlay">
									<a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations pf-icons">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/9.jpg" alt="Bridge Side"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/9-1.jpg" alt="Bridge Side"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/9-2.jpg" alt="Bridge Side"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Bridge Side</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-media pf-uielements">
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/10.jpg" alt="Study Table">
								</a>
								<div class="portfolio-overlay">
									<a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Study Table</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{ url('/') }}/design/user/images/portfolio/4/11.jpg" alt="Workspace Stuff">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations pf-graphics">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/12.jpg" alt="Fixed Aperture"></a></div>
											<div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ url('/') }}/design/user/images/portfolio/4/12-1.jpg" alt="Fixed Aperture"></a></div>
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="images/portfolio/full/12.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									<a href="images/portfolio/full/12-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
									<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
							</div>
						</article>

					</div><!-- #portfolio end -->

				</div>

            </div>
@endsection