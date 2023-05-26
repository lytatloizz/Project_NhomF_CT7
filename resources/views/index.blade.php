<?php
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
$name = ModelsUser::find(Auth::id())->user_name; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/info-user.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TIMEPICKER -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head>

<body>
    <div id="wrapper">
        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('assets/img/logo.png')}}" />
                    </a>
                </div>
                <span class="logout-spn">
                    <a href="{{route('signout')}}" style="color:#fff;">LOGOUT</a>
                </span>
            </div>
        </div>
        <!-- /. SIDE BAR  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="/dashbroad"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('profile.dashbroad')}}"><i class="fa fa-user "></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{route('change.password')}}"><i class="fa fa-key "></i>Change Password</a>
                    </li>
                    <li>
                        <a href="/timetable"><i class="fa fa-table "></i>Timetable</a>
                    </li>
                    @if(rule_number() != 1)
                    <li>
                        <a href="/add-subject"><i class="fa fa-edit "></i>Add new subject</a>
                    </li>
                    @endif
                    <li>
                        <a href="/subjects-regitsted"><i class="fa fa-qrcode "></i>Check subjects regitsted</a>
                    </li>
                    @if(rule_number() != 2)
                    <li>
                        <a href="/register-subject"><i class="fa fa-plus "></i>Regitster new subjects</a>
                    </li>
                    @endif
                    @if(rule_number() == 0)
                    <li>
                        <a href="/users"><i class="fa fa-users"></i>List Student</a>
                    </li>
                    <li>
                        <a href="/register"><i class="fa fa-user "></i>Add new Student </a>
                    </li>
                    <li>
                        <a href="/classrooms"><i class="fa fa-info-circle "></i>List Classroom</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('all.notification')}}"><i class="fa fa-info-circle "></i>Notification</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. CONTENTS  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>WELCOME TO MANAGE SYSTEM</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                            <strong>Welcome {{$name}} ! </strong> Let check you infomation.
                        </div>
                    </div>
                </div>
                <!-- /. INFORMATION  -->
                @yield('content')
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-lg-12 ">
                        <br />
                        <div class="alert alert-danger">
                            <strong>You see something wrong ? </strong> Notification to Admin <a href="#">At Here</a>.
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <!-- /. PAGE WRAPPER  -->
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com
                | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                | Edit by: <a href="https://www.facebook.com/profile.php?id=100030007710928" style="color:#fff;" target="_blank">Hiroe
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- TIMEPICKER -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="{{asset('assets/js/timepicker.js')}}"></script>
</body>

</html>