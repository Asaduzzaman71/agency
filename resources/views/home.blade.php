@extends('layouts.app')
@section('content')
   	<section id="content">
			<div class="content-wrap py-0">

				<div class="container clearfix">

					<!-- Slider negetive Box
					============================================= -->
					<div class="row justify-content-center slider-box-wrap clearfix">
						<div class="col-10">
							<div class="slider-bottom-box">
								<div class="row align-items-center clearfix">
									<div class="col-lg-4 mb-3 mb-lg-0">
										<h2 class="mb-3 h1 fw-light">@lang('lang.features.title')</h2>
										<p class="fw-normal text-muted mb-0">@lang('lang.features.desc')</p>
									</div>
									<div class="col-lg-4 col-sm-6">
										<ul class="iconlist m-0">
											<li><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.one')</li>
											<li class="pt-3"><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.two')</li>
											<li class="pt-3"><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.three')</li>
										</ul>
									</div>
									<div class="col-lg-4 col-sm-6">
										<ul class="iconlist m-0">
											<li class="pt-3 pt-lg-0"><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.four')</li>
											<li class="pt-3"><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.five')</li>
											<li class="pt-3"><img src="{{asset('app/demos/hosting/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">@lang('lang.features.six')</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				<!-- Loaction Section
				============================================= -->
				<div class="section m-0 bg-transparent">
					<div class="container clearfix">
						<div class="heading-block center mt-0 mx-auto border-bottom-0 clearfix" style="max-width: 700px">
							<h2>@lang('lang.around_map.title_before_map')</h2>
							<p>@lang('lang.around_map.desc_before_map')</p>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="heading-block mt-md-3 mt-0">
									<div class="before-heading color">@lang('lang.around_map.our_network')</div>
									<h3 class=" nott ls0">@lang('lang.around_map.after_our_network') </h3>
								</div>
								<div class="row">
									<div class="col-6">
										<ul class="iconlist ms-0">
											<li><img src="{{asset('app/demos/hosting/images/flags/uk.png')}}" alt="Image"><a href="#">United Kingdom</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/us.png')}}" alt="Image"><a href="#">USA</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/br.png')}}" alt="Image"><a href="#">Brazil</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/sa.png')}}" alt="Image"><a href="#">South Africa</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/in.png')}}" alt="Image"><a href="#">India</a></li>
										</ul>
									</div>
									<div class="col-6">
										<ul class="iconlist ms-0">
											<li><img src="{{asset('app/demos/hosting/images/flags/si.png')}}" alt="Image"><a href="#">Singapore</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/ja.png')}}" alt="Image"><a href="#">Japan</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/au.png')}}" alt="Image"><a href="#">Australia</a></li>
											<li><img src="{{asset('app/demos/hosting/images/flags/ca.png')}}" alt="Image"><a href="#">Canada</a></li>
											<li><a href="#">See More..</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div id="hotspot-img" class="hotspot-img mt-2 responsive-hotspot-wrap">
							<img src="{{asset('app/demos/hosting/images/svg/map.png')}}" class="img-responsive" alt="Image">

							<!-- Circle #1 -->
							<div class="hot-spot" data-x="1970" data-y="830">
								<div class="circle"></div>
								<div class="tooltip"><p>singapore</p></div>
							</div>
							<!-- Circle #2 -->
							<div class="hot-spot" data-x="330" data-y="522">
								<div class="circle"></div>
								<div class="tooltip"><p>San Fransisco</p></div>
							</div>
							<!-- Circle #3 -->
							<div class="hot-spot" data-x="2350" data-y="1110">
								<div class="circle"></div>
								<div class="tooltip"><p>Sydney</p></div>
							</div>
							<!-- Circle #4 -->
							<div class="hot-spot" data-x="1222" data-y="395">
								<div class="circle"></div>
								<div class="tooltip"><p>London</p></div>
							</div>
							<!-- Circle #5 -->
							<div class="hot-spot" data-x="1800" data-y="760">
								<div class="circle"></div>
								<div class="tooltip"><p>Bangalore</p></div>
							</div>
							<!-- Circle #6 -->
							<div class="hot-spot" data-x="2250" data-y="560">
								<div class="circle"></div>
								<div class="tooltip"><p>Tokyo</p></div>
							</div>
							<!-- Circle #7 -->
							<div class="hot-spot" data-x="1366" data-y="1134">
								<div class="circle"></div>
								<div class="tooltip"><p>Cape Town</p></div>
							</div>
							<!-- Circle #8 -->
							<div class="hot-spot" data-x="880" data-y="990">
								<div class="circle"></div>
								<div class="tooltip"><p>Brasilla</p></div>
							</div>
							<!-- Circle #8 -->
							<div class="hot-spot" data-x="710" data-y="395">
								<div class="circle"></div>
								<div class="tooltip"><p>Toronto</p></div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Addition Service Section
				============================================= -->
				<div class="container clearfix mt-4">

					<div class="heading-block center mt-2 mb-4 mx-auto border-bottom-0 clearfix" style="max-width: 700px">
						<div class="before-heading color">@lang('lang.companies.before_title_of_companies')</div>
						<h2>@lang('lang.companies.title_of_companies')</h2>
					</div>

					<div class="row ">
						@foreach ($companies as $company)
							<div class="col-6 col-sm-6 col-lg-2 mb-3 mb-lg-0">
							<a href="{{asset('storage/'. $company->url)}}" target="_blank">
								<img alt="100%x180" src="{{asset('storage/'. $company->image)}}" class="img-thumbnail w-100 d-block">
							</a>
							</div>
						@endforeach
					  </div>
				</div>
				<div class="clear"></div>

				<!-- Pricing Section
				============================================= -->
				<div class="section bg-angle mt-4" style="background: #F9F9F9 url('demos/hosting/images/pattern-dark.png') repeat center center; padding: 80px 0">
					<div class="container clearfix">
						<div class="heading-block center mt-0 mx-auto border-bottom-0 clearfix" style="max-width: 750px">
							<h2>@lang('lang.package_price.title')</h2>
							<p>@lang('lang.package_price.desc')</p>
						</div>

						<div class="row mb-2 align-items-stretch">

							<div class="col-lg-8 col-md-8">

								<div class="row align-items-stretch clearfix">
									<div class="col-md-12">
										<!-- vCPU Section -->
										<div class="row align-items-stretch">
											<div class="col-md-8 col-sm-8">
												<div class="card mb-4">
													<div class="card-body">
														<div class="d-flex justify-content-between">
															<h4 class="mb-4">@lang('lang.package_price.weight')</h4>
														</div>
														<!-- CPU Slider
														============================================= -->
														<input class="range-slider-cpu" />
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center mb-4">
												<div class="card-body">
													<!-- CPU Price Value
													============================================= -->
													<h2 class="cpu-price text-white mb-0 fw-bold"></h2>
													<p class="card-text mb-0" style="opacity: .8;">$10 <span class="fst-italic">per Kg</span></p>
												</div>
											</div>
										</div>

										<!-- RAM Section -->
										<div class="row align-items-stretch">
											<div class="col-md-8 col-sm-8">
												<div class="card mb-4">
													<div class="card-body">
														<div class="d-flex justify-content-between">
															<h4 class="mb-4">@lang('lang.package_price.width')</h4>
														</div>
														<!-- RAM Slider
														============================================= -->
														<input class="range-slider-ram" />
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center mb-4">
												<div class="card-body">
													<!-- RAM Proce Value
													============================================= -->
													<h2 class="ram-price text-white mb-0 fw-bold"></h2>
													<p class="card-text mb-0" style="opacity: .8;">$8 <span class="fst-italic">per Cm</span></p>
												</div>
											</div>
										</div>

										<!-- Storage Section -->
										<div class="row align-items-stretch">
											<div class="col-md-8 col-sm-8">
												<div class="card">
													<div class="card-body">
														<div class="d-flex justify-content-between">
															<h4 class="mb-4">@lang('lang.package_price.height')</h4>
														</div>
														<!-- Storage Slider
														============================================= -->
														<input class="range-slider-storage" />
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center">
												<div class="card-body">
													<!-- Storage Price Value
													============================================= -->
													<h2 class="storage-price text-white mb-0 fw-bold"></h2>
													<p class="card-text mb-0" style="opacity: .8;">$0.5 <span class="fst-italic">per Cm</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Price Area -->
							<div class="col-lg-4 col-md-4 mt-4 mt-md-0">
								<div class="card text-center">
									<div class="card-body py-4">
										<h3 class="card-title fw-normal">@lang('lang.package_price.your_plan')</h3>
										<!-- Price Value -->
										<div class="pricing-price fw-semibold py-2"></div>
										<p class="card-text pricing-sub">@lang('lang.package_price.package_price')</p>
									</div>
									<div class="line my-1"></div>
									<div class="card-body py-4">
										<ul class="iconlist ms-0" style="opacity: .8">
											<li>@lang('lang.package_price.line1')</li>
											<li>@lang('lang.package_price.line2')</li>
											<li>@lang('lang.package_price.line3')</li>
											<li>@lang('lang.package_price.line4')</li>
										</ul>
										<a href="#" class="button button-rounded button-large ls0 fw-normal m-0 nott">@lang('lang.package_price.order_now')</a>
									</div>
								</div>
							</div>

						</div>

						<div class="clear"></div>

						
					</div>
				</div>

				

				<!-- Testimonials Section
				============================================= -->
				<div class="section">
					<div class="container">

						<div class="heading-block center mt-2 mb-3 mx-auto border-bottom-0 clearfix" style="max-width: 700px">
							<div class="before-heading">@lang('lang.bottom_slider.title_small')</div>
							<h2>@lang('lang.bottom_slider.title_big')</h2>
						</div>

						<!-- Owl Carousel
						============================================= -->
						<div id="oc-testimonials" class="owl-carousel center testimonials-carousel testimonial-full carousel-widget mt-5" data-margin="0" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2" data-items-xl="3" data-center="true" data-loop="true" data-autoplay="4000" data-speed="500">

							<!-- Item 1 -->
							<div class="oc-item">
								<div class="testimonial p-4 border-0 shadow-none">
									<div class="testi-image">
										<a href="#"><img src="{{asset('app/demos/hosting/images/users/1.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<ul class="list-unstyled ms-0 mt-4 mb-2"><li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li></ul>
									<div class="testi-content">
										<p class="font-body fst-normal">@lang('lang.bottom_slider.msg1')</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="oc-item">
								<div class="testimonial p-4 border-0 shadow-none">
									<div class="testi-image">
										<a href="#"><img src="{{asset('app/demos/hosting/images/users/2.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<ul class="list-unstyled ms-0 mt-4 mb-2"><li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li></ul>
									<div class="testi-content">
										<p class="font-body fst-normal">@lang('lang.bottom_slider.msg2')</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="oc-item">
								<div class="testimonial p-4 border-0 shadow-none">
									<div class="testi-image">
										<a href="#"><img src="{{asset('app/demos/hosting/images/users/5.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<ul class="list-unstyled ms-0 mt-4 mb-2"><li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li></ul>
									<div class="testi-content">
										<p class="fst-normal font-body">@lang('lang.bottom_slider.msg3')</p>
										<div class="testi-meta">
											Mary Jane
											<span>Google Inc.</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="oc-item">
								<div class="testimonial p-4 border-0 shadow-none">
									<div class="testi-image">
										<a href="#"><img src="{{asset('app/demos/hosting/images/users/4.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<ul class="list-unstyled ms-0 mt-4 mb-2"><li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li></ul>
									<div class="testi-content">
										<p class="fst-normal font-body">@lang('lang.bottom_slider.msg4')</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Item 5 -->
							<div class="oc-item">
								<div class="testimonial p-4 border-0 shadow-none">
									<div class="testi-image">
										<a href="#"><img src="{{asset('app/demos/hosting/images/users/3.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<ul class="list-unstyled ms-0 mt-4 mb-2"><li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li></ul>
									<div class="testi-content">
										<p class="fst-normal font-body">@lang('lang.bottom_slider.msg5')</p>
										<div class="testi-meta">
											Jamie Morrison
											<span>Adobe Inc.</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Trusted Client Section
				============================================= -->
			

				<!-- Bottom Section
				============================================= -->
				
			</div>
			<div class="section bg-color dark m-0">
				<div class="container">
					<div class="row center justify-content-center">
						<div class="col-md-8">
							<h2 class="fw-bold text-white mb-3">@lang('lang.before_footer.title')</h2>
						</div>
						<div class="col-md-8">
							<a href="#" class="button center bg-white color button-light button-rounded button-large ms-0">@lang('lang.before_footer.contact_us_now')</a>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->
@endsection
