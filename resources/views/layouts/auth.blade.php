<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('admin/images/ddp/favicon.ico')}}" />
    <title>DDP | @yield('title')</title>

    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    @yield('stylesheet')
    <style>
        .auth-fluid-form-box{
            /* background: linear-gradient(171deg, rgb(0 28 58) 0%, rgb(0 60 94) 35%, rgb(21 83 96) 100%); */
            background: linear-gradient(0deg, rgb(0 28 58) 0%, rgb(21 83 96) 100%, rgb(0 60 94) 35%);
        }
        .auth-fluid-form-box *{
            color: #333;
        }
        .auth-fluid-form-box label,
        .auth-fluid-form-box h4
        {
            color: rgb(229, 229, 229);
        }
        .auth-fluid-form-box input::placeholder{
            color: rgb(138, 138, 138);
        }
        .auth-fluid-form-box button[type=submit],
        .auth-fluid-form-box button[type=submit] i
        {
            color: rgb(255, 255, 255);
        }
        .auth-fluid-form-box .footer.footer-alt b{
            color: rgb(183, 183, 183);
        }
    </style>
</head>
<body>
@yield('content')
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>
