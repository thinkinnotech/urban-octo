<?php
/**
 * Created by PhpStorm.
 * User: dj
 * Date: 2/23/2017
 * Time: 11:11 AM
 */
?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
       {{-- <div class="user-panel">
          --}}{{--  <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>--}}{{--
        </div>--}}

        <!-- search form (Optional) -->
      {{--  <form action="#" method="get" class="sidebar-form">
           --}}{{-- <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>--}}{{--
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>City</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/city-add"><i class="fa fa-circle"></i> Add City </a></li>
                    <li><a href="/admin/city"><i class="fa fa-circle"></i> Manage City </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Location</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/location-add"><i class="fa fa-circle"></i> Add Location </a></li>
                    <li><a href="/admin/location"><i class="fa fa-circle"></i> Manage Location </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Education/Course</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/education-add"><i class="fa fa-circle"></i> Add Education/Course </a></li>
                    <li><a href="/admin/education"><i class="fa fa-circle"></i> Manage Education/Course </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Roles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/roles-add"><i class="fa fa-circle"></i> Add Roles </a></li>
                    <li><a href="/admin/roles"><i class="fa fa-circle"></i> Manage Roles </a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Skills</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/skill-add"><i class="fa fa-circle"></i> Add Skill </a></li>
                    <li><a href="/admin/skill"><i class="fa fa-circle"></i> Manage Skills </a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Languages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/language-add"><i class="fa fa-circle"></i> Add Language </a></li>
                    <li><a href="/admin/language"><i class="fa fa-circle"></i> Manage Languages </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Designations</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/designation-add"><i class="fa fa-circle"></i> Add Designation </a></li>
                    <li><a href="/admin/designation"><i class="fa fa-circle"></i> Manage Designation </a></li>
                </ul>
            </li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

