   <head>
        <meta charset="utf-8" />
        <title>DDP | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('admin/images/ddp/favicon.ico')}}" />

        <!-- App css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('admin/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

        <script src="{{ asset('js/vue.global.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>

         <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
         <script src="{{ asset('admin/js/app.min.js') }}"></script>
        <script src="{{ asset('admin/js/vendor/handlebars.min.js') }}"></script>
        <script src="{{ asset('admin/js/vendor/typeahead.bundle.min.js') }}"></script>
        
        @yield('stylesheet')

    </head>