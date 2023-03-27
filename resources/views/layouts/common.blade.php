<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('include.app.head')

<body class="stretched">
<div id="app">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="dark bg-color">
			<div class="container">

				<div class="row justify-content-center justify-content-lg-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="javascript:void()"><i class="color-2 icon-line-globe"></i> 
									@if (Request::segment(1) == 'bl')
									Bangla
									@elseif (Request::segment(1) == 'ar')
									Arabic
									@elseif (Request::segment(1) == 'cn')
									Chinese
									@else
									English
									@endif

									<i class="icon-angle-down"></i></a>
									<ul class="top-links-sub-menu bg-color">
										<li class="top-links-item"><a href="{{ url('/en') }}">English</a></li>
										<li class="top-links-item"><a href="{{ url('/cn') }}">Chinese</a></li>
										<li class="top-links-item"><a href="{{ url('/ar') }}">Arabic</a></li>
										<li class="top-links-item"><a href="{{ url('/bl') }}">Bengali</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links text-center">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#"><i class="color-2 icon-line-map-pin"></i> @lang('lang.top_header.address')</a></li>
								<li class="top-links-item"><a href="#"><i class="color-2 icon-line-mail"></i> info@ddp.com</a></li>
								<li class="top-links-item"><a href="#"><i class="color-2 icon-line-phone-call"></i> @lang('lang.top_header.mobile')</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>
				</div>

			</div>
		</div>

		<!-- Header
		============================================= -->
        @include('include.app.header')

		<!-- Slider
		============================================= -->
		 {{-- @include('include.app.slider') --}}

		<!-- Content
		============================================= -->
		@yield('content')
		
		<!-- Footer
		============================================= -->
		@include('include.app.footer')
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	@include('include.app.javascript')
</div>
</body>
</html>