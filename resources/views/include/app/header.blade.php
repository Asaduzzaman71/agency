<header id="header" class="sticky-on-scrollup">
			<div id="header-wrap" class="">
				<div class="container">
					<div class="header-row justify-content-between top-search-parent">

						
						<div id="logo" class="mx-0 me-lg-5 order-2 order-lg-1">
							<a href="{{url('/')}}" class="standard-logo" data-dark-logo="app/images/logo-ddp-main.png"><img src="{{asset('app/images/logo-ddp-main.png')}}" alt="Logo" style="height: 100px;"></a>
							<a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{asset('app/images/logo-ddp-main.png')}}" alt="Logo" style="height: 100px;"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger" class="order-1">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<div class="header-misc order-3">
							<a href="#" class="btn text-larger btn-dark bg-color px-4 py-2 rounded-pill"><i class="icon-line-message-circle color-2"></i><span class="d-none d-md-inline ms-2">@lang('lang.menu.get_support')</span></a>
						</div>

						
						<nav class="primary-menu me-lg-auto with-arrows order-12 order-lg-2">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="#" style="padding-top: 39px; padding-bottom: 39px;"><div>@lang('lang.menu.home')</div></a></li>
								<li class="menu-item sub-menu"><a class="menu-link" href="#" style="padding-top: 39px; padding-bottom: 39px;"><div>@lang('lang.menu.services.title')<i class="icon-angle-down"></i></div></a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item" style=""><a class="menu-link" href="#"><div><i class="icon-line-dollar-sign"></i>@lang('lang.menu.services.items.menu1')</div></a></li>
										<li class="menu-item" style=""><a class="menu-link" href="#"><div><i class="icon-line-paper"></i>@lang('lang.menu.services.items.menu2')</div></a></li>
										<li class="menu-item" style=""><a class="menu-link" href="#"><div><i class="icon-line-users"></i>@lang('lang.menu.services.items.menu3')</div></a></li>
										<li class="menu-item" style=""><a class="menu-link" href="#"><div><i class="icon-line-flag"></i>@lang('lang.menu.services.items.menu4')</div></a></li>
										<li class="menu-item" style=""><a class="menu-link" href="#"><div><i class="icon-line-globe"></i>@lang('lang.menu.services.items.menu5')</div></a></li>
										
									</ul>
								<button class="sub-menu-trigger icon-chevron-right"></button></li>
								<li class="menu-item"><a class="menu-link" href="#" style="padding-top: 39px; padding-bottom: 39px;"><div>@lang('lang.menu.about')</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" style="padding-top: 39px; padding-bottom: 39px;"><div>@lang('lang.menu.pricing')</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" style="padding-top: 39px; padding-bottom: 39px;"><div>@lang('lang.menu.contact')</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone" style="height: 100px;"></div>
		</header><!-- #header end -->