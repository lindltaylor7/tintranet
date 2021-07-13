<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>@yield('title')</title>
        <meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
        <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="hencework"/>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <!-- Data table CSS -->
        <link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
     
   
        <link href="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css"/>
            
        <!-- vector map CSS -->
		<link href="{{asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Custom CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        @yield('content')
        <!-- JavaScript -->
	
        <!-- jQuery -->
        <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <!-- Data table JavaScript -->
        <script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        
        <!-- Progressbar Animation JavaScript -->
        <script src="{{asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
        
        <!-- Fancy Dropdown JS -->
        <script src="{{asset('js/dropdown-bootstrap-extended.js')}}"></script>
        
        <!-- Sparkline JavaScript -->
        <script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
        
        <!-- Switchery JavaScript -->
        <script src="{{asset('vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
        
        <!-- EChartJS JavaScript -->
        <script src="{{asset('vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
        <script src="{{asset('vendors/echarts-liquidfill.min.js')}}"></script>
        
        <!-- Toast JavaScript -->
        <script src="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{asset('js/init.js')}}"></script>
        <script src="{{asset('js/dashboard-data.js')}}"></script>
    </body>

</html>