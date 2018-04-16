@extends('home')
@section('content')
<script type="text/javascript" src="{{URL::asset('assets/js-core/d3.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/xcharts/xcharts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/xcharts/xcharts-demo-1.js')}}"></script>

<!-- Sparklines charts -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/charts/sparklines/sparklines-demo.js')}}"></script>

<!-- Skycons -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/skycons/skycons.js')}}"></script>

<!-- Calendar -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/daterangepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/calendar/calendar-demo.js')}}"></script>

<div id="page-title">
    <h2>Dashboard</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>    
</div>

<div class="row">
    <div class="col-md-6">
        <div class="content-box">
            <h3 class="content-box-header content-box-header-alt bg-white">
                <span class="icon-separator">
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                </span>
                <span class="header-wrapper">
                    Recent transactions volume
                    <small>Example header title description</small>
                </span>
                <span class="header-buttons">
                    <a href="#" class="btn btn-sm btn-primary" title="">Export data</a>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="example4" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-green">
                    <div class="tile-header">
                        New Visitors
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                        <div class="tile-content">
                            <span>$</span>
                            378
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            +7,6% new users in the first quarter
                        </small>
                    </div>
                    <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-red">
                    <div class="tile-header">
                        Revenue
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-camera"></i>
                        <div class="tile-content">
                            <span>$</span>
                            5,937
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            +7,6% new users in the first quarter
                        </small>
                    </div>
                    <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-orange">
                    <div class="tile-header">
                        Subscriptions
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-tag"></i>
                        <div class="tile-content">
                            <span>$</span>
                            126,34
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            +7,6% new users in the first quarter
                        </small>
                    </div>
                    <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile-box tile-box-alt mrg20B bg-blue-alt">
                    <div class="tile-header">
                        Monthly earnings
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-camera"></i>
                        <div class="tile-content">
                            <span>$</span>
                            1,212
                        </div>
                        <small>
                            <i class="glyph-icon icon-caret-up"></i>
                            +2,6% new users in the first quarter
                        </small>
                    </div>
                    <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                        view details
                        <i class="glyph-icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>    

    </div>
</div>
@endsection