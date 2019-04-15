<?php
use App\Company;
use App\Project;
use App\Comment;
?>

@extends('layouts.dashboard')
@section('pageTitle', 'Dashboard')
@section('home')

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{route('home')}}" class="logo"><span>Project<span> Manager</span></span><i class="mdi mdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <!-- Page title -->
                    <ul class="nav navbar-nav list-inline navbar-left">
                        <li class="list-inline-item">
                            <button class="button-menu-mobile open-left">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <h4 class="page-title">@yield('pageTitle')</h4>
                        </li>
                    </ul>

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="mdi mdi-account-outline noti-icon"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>

                            <li class="hide-phone">
                                <form class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                        </ul>
                    </nav>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{url('/upload/avatar.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                        <div class="user-status online"><i class="mdi mdi-adjust"></i></div>
                    </div>
                    <h4><a href="/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a> </h4>
                </div>
                <!-- End User -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{('/companies')}}" class="waves-effect"><i class="mdi mdi-atlassian"></i> <span> Company </span> </a>
                        </li>

                        <li>
                            <a href="{{('/projects')}}" class="waves-effect"><i class="mdi mdi-briefcase-outline"></i> <span> Project </span> </a>
                        </li>
                        <li>
                            <a href="{{('/tasks')}}" class="waves-effect"><i class=" mdi mdi-format-list-checkbox "></i> <span> Tasks </span> </a>
                        </li>




                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
        @yield('content')
        <!-- content -->

            <footer class="footer text-right">
                2019 © Abu Saleh Sheikh
            </footer>

        </div>

        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="mdi mdi-close-circle-outline"></i>
            </a>
            <h4 class="">User</h4>
            <div class="notification-list nicescroll">
                <ul class="list-group list-no-border user-list text-center">
                    <li class="user-box">
                        <div class="" style="position: relative;height: 150px;width: 150px;margin: 0px auto;">
                            <img src="{{url('/upload/avatar.jpg')}}" alt="user-img" title="{{ Auth::user()->name}}" class="rounded-circle img-thumbnail img-responsive">

                        </div>
                        <h3><a href="#">{{ Auth::user()->name }}</a> </h3>
                        <ul class="list-inline">

                        </ul>
                    </li>
                    <li class="list-group-item" style="padding: .75rem 4.25rem;">
                        <a href="#" class="user-list-item" >
                            <div class="icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                            </div>
                            <div class="user-desc">
                                <a href="{{'/profile'}}" class="name">Settings</a>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item" style="padding: .75rem 4.25rem;">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="user-list-item">
                            <div class="icon bg-danger pull-right">
                                <i class="mdi mdi-power "></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">Logout</span>
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>



                </ul>
            </div>
        </div>

    </div>
    <!-- END wrapper -->
@endsection