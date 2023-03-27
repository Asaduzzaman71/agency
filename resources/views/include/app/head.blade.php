<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SOFT PRO IT" />
	<link rel="icon" type="image/x-icon" href="{{ asset('app/images/logo-ddp-main.png')}}">

	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('app/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('app/css/components/ion.rangeslider.css')}}" type="text/css')}}" />

	
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Hosting Demo Specific Stylesheet -->
	
	<link rel="stylesheet" href="{{ asset('app/demos/hosting/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/demos/hosting/hosting.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('app/css/custom.css')}}" type="text/css" />
	<!-- / -->

	
	<title>DDP - Delivery Do Perfect</title>
	<script src="{{ asset('js/vue.global.js') }}"></script>
	<script src="{{ asset('js/axios.min.js') }}"></script>
	<script>
		var CSRF_TOKEN = {{ csrf_token() }}
	</script>
	@yield('stylesheet')
</head>