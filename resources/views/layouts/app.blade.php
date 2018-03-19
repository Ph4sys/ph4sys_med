<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('lib/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lib/admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset('lib/admin-lte/dist/css/skins/skin-blue.min.css') }}">
    <!--link rel="stylesheet" href="{{ asset('lib/admin-lte/dist/css/skins/_all-skins.min.css') }}"-->
    
    <!--link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css"-->
    
    <!--link rel="stylesheet" href="{{ asset('lib/select2/dist/css/select2.min.css') }}"-->
    
    <!--link rel="stylesheet" href="{{ asset('lib/admin-lte/dist/css/alt/AdminLTE-select2.min.css') }}"-->

    <link rel="stylesheet" href="{{ asset('lib/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" media='print' href="{{ asset('lib/fullcalendar/fullcalendar.print.min.css')}}">
    <!-- Calendar-->
    <!--link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css"-->
    <link rel="stylesheet" href="{{ asset('lib/fullcalendar/fullcalendar.min.css')}}">
    

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    
    <!-- daypilot libraries -->
    <!--script src="/js/daypilot/daypilot-all.min.js" type="text/javascript"></script

    <script src="{{ asset('js/daypilot/daypilot-all.min.js')}}"></script>-->
    
    <!--link type="text/css" rel="stylesheet" href="/media/layout.css" /-->
    <link rel="stylesheet" href="{{ asset('lib/media/layout.css')}}">

    <!-- App CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     
</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
    
    <div class="wrapper">
      <header class="main-header">
        @include('layouts._admin._nav')
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">


          <!-- Main content -->
          <section class="content">
            <main>
              @if(Session::has('mensagem'))
                <div class="container">
                  <div class="row">
                    <div class=" card {{ Session::get('mensagem')['class'] }}">
                      <button class="close" type="button" data-dismiss='alert' aria-hidden="true">x</button>
                      <div align="center">
                        {{ Session::get('mensagem')['msg'] }}
                      </div>
                    </div>
                  </div>
                </div>
              @endif
              
              @yield('content')
            </main>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        @include('layouts._admin._footer')
      </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3.2.1 -->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('lib/jquery/dist/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('lib/jquery/dist/mask.js')}}"></script>
    <script src="{{ asset('lib/jquery/dist/jquery.maskMoney.js')}}"></script>

<!-- Calendar -->
    <!--script src="../bower_components/jquery-ui/jquery-ui.min.js"></script-->
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js')}}"></script>

    <!--script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script-->
    <script src="{{ asset('lib/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!--script src="../bower_components/fastclick/lib/fastclick.js"></script-->
    <script src="{{ asset('lib/fastclick/lib/fastclick.js')}}"></script>


    <!--script src="../bower_components/moment/moment.js"></script-->
    <script src="{{ asset('lib/moment/moment.js')}}"></script>

    <!--script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script-->
    <script src="{{ asset('lib/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('js/functions.js')}}"></script>
    <!--script src="{{ asset('js/demo.js')}}"></script-->
    
    <!-- Calendario -->
    <script src="{{ asset('js/mycalendar.js')}}"></script> 

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lib/admin-lte/dist/js/adminlte.min.js')}}"></script>
    <!-- Select2  -->
    <script src="{{ asset('lib/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('lib/fullcalendar/locale/pt-br.js')}}"></script>

    @yield('post-script')
    
</body>
</html>
