<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Modern | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{asset('admin/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
        <link href="{{asset('admin/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/> 
        <link href="{{asset('admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>  
        <link href="{{asset('admin/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>  
        <link href="{{asset('admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/> 
        
        <!-- Theme Styles -->
        <link href="{{asset('admin/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        <script src="{{asset('admin/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{asset('admin/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                                <p class="text-center m-t-md">Please login into your account.</p>


                                <form action="{{route('admin.login') }}" method="post">
                                {{ csrf_field() }}
                                
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" required name="password">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                
                                </form>
                                
                                <p class="text-center m-t-xs text-sm">2017 &copy; Modern </p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
    

        <!-- Javascripts -->
        <script src="{{asset('admin/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('admin/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('admin/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('admin/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('admin/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{asset('admin/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('admin/js/modern.min.js')}}"></script>
        
    </body>
</html>