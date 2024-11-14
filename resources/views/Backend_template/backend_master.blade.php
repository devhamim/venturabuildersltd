@include('Backend_template.body.head')

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


           @include('Backend_template.body.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('Backend_template.sitebare.leftsitebare')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('maincontent')
                <!-- End Page-content -->

              @include('Backend_template.body.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('Backend_template.sitebare.rightsitebare')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('Backend_template.body.js')
