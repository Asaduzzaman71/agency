<section id="slider" class="slider-element bg-angle include-header">

			<!-- Slider Background Map -->
			<img class="img-map parallax position-absolute" src="{{asset('app/demos/hosting/images/svg/map-light.svg')}}" alt="Image" data-0="opacity: 0.05;margin-top:0px" data-800="opacity: 0.5;margin-top:150px">

			<!-- Slider Background Cloud -->
			<div class="cloud-wrap">
				<div class="c1"><div class="cloud"></div></div>
				<div class="c2"><div class="cloud"></div></div>
				<div class="c3"><div class="cloud"></div></div>
				<div class="c4"><div class="cloud"></div></div>
				<div class="c5"><div class="cloud"></div></div>
			</div>

			<!-- Slider Titiles -->
			<div class="vertical-middle container dark">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-6">
						<div class="slider-title">
							<h1 class="hero-title display-3 fw-bold  font-body">@lang('lang.menu.banner_title')</h1>
							<p>@lang('lang.menu.desc')</p>
						</div>
						<div class="subscribe-widget" data-loader="button">
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="/order" method="get" class="mb-0 fadeInUp animated">
								@csrf
								<div class="input-group mx-auto">
									<input type="text" id="truck_id" name="tracking_id" class="form-control form-control-lg not-dark" placeholder="@lang('lang.menu.placeholder_of_truckorder')" style="border: 0; box-shadow: none; overflow: hidden;">
									<a href="/order" id="truck_my_order" class="button fw-normal" style="border-radius: 3px;">@lang('lang.menu.track_order')</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6 d-none d-md-block">
						<img src="{{asset('app/images/slider/banner2.png')}}" alt="Image" style="position: absolute;bottom: -300px;">
					</div>
				</div>
			</div>

		</section><!-- #slider end -->