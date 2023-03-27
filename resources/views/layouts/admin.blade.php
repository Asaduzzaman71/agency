<!DOCTYPE html>
<html lang="en">
 @include('include.admin.head')

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div id="app">
            <!-- Topbar Start -->
            @include('include.admin.topbar')
            <!-- end Topbar -->
            
            <!-- Start Content-->
            <div class="container-fluid">
    
                <!-- Begin page -->
                <div class="wrapper">
    
                    <!-- ========== Left Sidebar Start ========== -->
                    @include('include.admin.sidebar')
                    <!-- Left Sidebar End -->
    
                    <div class="content-page">
                        @yield('content')
                        <!-- End Content -->
    
                        <!-- Footer Start -->
                        @include('include.admin.footer')
                        <!-- end Footer -->
    
                    </div> <!-- content-page -->
    
                </div> <!-- end wrapper-->
            </div>
            <!-- END Container -->
        </div>
        <!-- Demo -->
        @if (Request::is('admin/orders/*'))
        <script src="{{ asset('admin/js/vue-app/order-vue.js') }}"></script>
        @else
        <script src="{{ asset('admin/js/vue-app/header-vue.js') }}"></script>
        @endif
  
           <!-- bundle -->
        <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
        <script src="{{ asset('admin/js/app.min.js') }}"></script>

        <!-- Typehead -->
        <script src="{{ asset('admin/js/vendor/handlebars.min.js') }}"></script>
        <script src="{{ asset('admin/js/vendor/typeahead.bundle.min.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('admin/js/pages/demo.typehead.js') }}"></script>       
    </body>
</html>
