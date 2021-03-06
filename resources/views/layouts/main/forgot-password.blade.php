<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.main.head')
    </head>
    <body class="landing-page landing-page1">
        <!-- START OF NAVIGATION SECTION -->
        @include('.layouts.main.navigation')
        <!-- END OF NAVIGATION SECTION -->
        <div class="wrapper">
            <!-- START OF LANDING PAGE SECTION -->
            @include('layouts.main.landing-page-forgot-password')
            <!-- END OF LANDING PAGE SECTION -->
            <!-- START OF DESCRIPTION SECTION -->
            @include('layouts.main.description-section-login')
            <!-- END OF DESCRIPTION SECTION SECTION -->
            <!-- START OF FOOTER SECTION -->
            @include('layouts.main.footer')
            <!-- END OF FOOTER SECTION -->
        </div>
    </div>
</body>
<!-- START OF SCRIPTS SECTION -->
@include('layouts.main.scripts')
<!-- END OF SCRIPTS SECTION -->
</html>