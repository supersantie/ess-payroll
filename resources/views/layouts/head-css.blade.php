 <!-- Global stylesheets -->
 <link href="{{URL::asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
 <link href="{{URL::asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{URL::asset('assets/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
 <!-- /global stylesheets -->
 @yield('css')

 <!-- Core JS files -->
 <script src="{{URL::asset('assets/demo/demo_configurator.js')}}"></script>
 <script src="{{URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
 <!-- /core JS files -->
@yield('center-scripts')
 <!-- Theme JS files -->
 <script src="{{URL::asset('assets/js/app.js')}}"></script>
 <!-- /theme JS files -->
@yield('scripts')