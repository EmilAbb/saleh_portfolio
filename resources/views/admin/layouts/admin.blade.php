<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saleh: Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <!-- Theme style -->
    @stack('css')
    <meta name="csrf" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('_assets/css/adminlte.min.css')}}">
    <style>
        .table-bordered th{
            font-size: 12px;
        }
        .clock-div{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #toggle{
            display: block;
            float: right;
            position: absolute;
            right: 10px;
            top: 10px;
            width: 60px;
            height: 30px;
            border-radius: 50px;
            cursor: pointer;
            background-color: #21e6ff;
        }
        #indicator {
            width: 20px;
            border-radius: 100%;
            height: 20px;
            margin: 5px 0px;
            background-color: white;
            position: absolute;
            float: right;
            left: 5px;
        }
        #clock{
            border: 10px solid #69e9f9;
            background-image: url(https://manyatapawagi.surge.sh/dial.jpg);
            background-size: cover;
            background-position: top right;
            width: 540px;
            height: 540px;
            background-color: #ffffffbd;
            border-radius: 100%;
            box-shadow: 5px 5px 10px #2d6066,-5px -5px 10px #b3ffff;
            position: relative;
        }
        #pin {
            z-index: 2;
            content: '';
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background: #00e2ff;
            box-shadow:  5px 5px 12px #bec6cf, -5px -5px 12px #ffffff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #hour{
            width: 7px;
            height: 20%;
            background: red;
            position: absolute;
            left: calc(50% - 3.5px);
            bottom: calc(50% + 3.5px);
            transform: translateX(-50%) ;
            transform-origin: bottom;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #min{
            width: 5px;
            height: 30%;
            background: grey;
            position: absolute;
            left: calc(50% - 2.5px);
            bottom: calc(50% + 2.5px);
            transform: translateX(-50%);
            transform-origin: bottom;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #sec{
            width: 3px;
            height: 35%;
            background: black;
            position: absolute;
            left: calc(50% - 1.5px);
            bottom: calc(50% + 1.5px);
            transform: translateX(-50%);
            transform-origin: bottom;
            transition: 1s all linear;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        body.blue{
            background-color: #b9f7ff;
        }
        #toggle.blue{
            background-color: #69e9f9;
        }
        #indicator.blue{
            left: 5px;
        }
        #clock.blue{
            border: 10px solid #343a40;
            box-shadow: 5px 5px 10px #343a40,-5px -5px 10px #343a40;
        }

        body.pink{
            background-color: #ffd1ee;
        }
        body.pink #toggle{
            background-color: #ffa3dd;
        }
        body.pink #indicator.pink{
            left: 35px;
        }
        body.pink #clock.pink{
            border: 10px solid #e91e63;
            box-shadow: 5px 5px 10px #d8658c, -5px -5px 10px #ffbed4;
        }
        body.pink #pin{
            background-color: #e91e63;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini" >
<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar" >


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    @include('admin.includes.menu')


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2022 By  <a href="https://www.instagram.com/emilabbasov__/"> Emil Abbasov</a>.</strong>
        All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('_assets/js/adminlte.js')}}"></script>


<script src="{{asset('_assets/js/custom.js')}}"></script>
@stack('js')
</body>
</html>
