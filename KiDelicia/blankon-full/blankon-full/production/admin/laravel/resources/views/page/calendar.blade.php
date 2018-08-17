@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-calendar"></i> Calendar <span>create your schedules</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Calendar</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="callout callout-info mb-20">
            Full view calendar with year, month, week and day views based on templates with Twitter Bootstrap.
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="calendar-toolbar">
                    <div class="row">
                        <div class="col-md-4 col-sm-2 col-xs-2">
                            <!-- Start offcanvas btn menu calendar: This menu will take position at the top of calendar (mobile only). -->
                            <div class="btn-group hidden-lg hidden-md">
                                <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#" data-calendar-nav="prev">Prev</a>
                                    </li>
                                    <li>
                                        <a href="#" data-calendar-nav="today">Today</a>
                                    </li>
                                    <li>
                                        <a href="#" data-calendar-nav="next">Next</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden-sm hidden-xs">
                                <button class="btn btn-theme btn-sm rounded" data-calendar-nav="prev"><i class="fa fa-angle-left"></i> Prev</button>
                                <button class="btn btn-theme btn-sm rounded" data-calendar-nav="today">Today</button>
                                <button class="btn btn-theme btn-sm rounded" data-calendar-nav="next">Next <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-8 col-xs-8">
                            <div class="page-header no-border no-margin no-padding"><h4 class="no-border no-margin no-padding text-center text-capitalize">&nbsp;</h4></div>
                        </div>
                        <div class="col-md-5 col-sm-2 col-xs-2">
                            <!-- Start offcanvas btn menu calendar: This menu will take position at the top of calendar (mobile only). -->
                            <div class="btn-group calendar-menu-mobile pull-right hidden-lg hidden-md">
                                <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#" data-calendar-view="year">Prev</a>
                                    </li>
                                    <li>
                                        <a href="#" data-calendar-view="month">Month</a>
                                    </li>
                                    <li>
                                        <a href="#" data-calendar-view="week">Week</a>
                                    </li>
                                    <li>
                                        <a href="#" data-calendar-view="day">Day</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right hidden-sm hidden-xs">
                                <button class="btn btn-theme btn-sm rounded" data-calendar-view="year">Year</button>
                                <button class="btn btn-theme btn-sm active rounded" data-calendar-view="month">Month</button>
                                <button class="btn btn-theme btn-sm rounded" data-calendar-view="week">Week</button>
                                <button class="btn btn-theme btn-sm rounded" data-calendar-view="day">Day</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="calendar" class="rounded mb-20"></div>
            </div>
            <div class="col-md-3 col-sm-4">

                <div class="block">
                    <select id="language" class="form-control chosen-select rounded">
                        <option value="">Select Language (default: en-US)</option>
                        <option value="nl-NL">Dutch</option>
                        <option value="fr-FR">French</option>
                        <option value="de-DE">German</option>
                        <option value="el-GR">Greek</option>
                        <option value="it-IT">Italian</option>
                        <option value="pl-PL">Polish</option>
                        <option value="pt-BR">Portuguese (Brazil)</option>
                        <option value="es-MX">Spanish (Mexico)</option>
                        <option value="es-ES">Spanish (Spain)</option>
                        <option value="ru-RU">Russian</option>
                        <option value="sv-SE">Swedish</option>
                        <option value="ko-KR">Korean</option>
                        <option value="id-ID">Indonesian</option>
                    </select>
                </div><!-- /.block -->
                <div class="block">
                    <div class="ckbox ckbox-theme">
                        <input type="checkbox" value="#events-modal" id="events-in-modal" />
                        <label for="events-in-modal" class="rounded">Open events in modal</label>
                    </div>
                </div><!-- /.block -->
                <h4>Events</h4>
                <ul id="eventlist" class="nav nav-pills nav-stacked niceScroll"></ul>

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
