@extends('home')
@section('content')
<div id="page-title">
    <h2>Slider Banner Home</h2>
    <p>Example MonarchUI portfolio gallery page</p>    
</div>

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/frontend-elements/portfolio-navigation.css')}}">

<!-- Mixitup -->

<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/mixitup.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/images-loaded.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/isotope.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/widgets/mixitup/portfolio-demo.js')}}"></script>

<div class="clearfix">
    <ul id="portfolio-grid" class="reset-ul row">
        <li class="col-lg-4 col-sm-6 col-md-4" data-cat="1">
            <div class="thumbnail-box">
                <a class="thumb-link" href="#" title=""></a>
                <div class="thumb-content">
                    <div class="center-vertical">
                        <div class="center-content">
                            <h3 class="thumb-heading animated bounceIn">
                                Railroad bridge
                                <small>12 March 2015</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="thumb-overlay bg-primary"></div>
                <img src="{{URL::asset('assets/image-resources/stock-images/img-1.jpg')}}" alt="">
            </div>
        </li>
        <li class="col-lg-4 col-sm-6 col-md-4" data-cat="1">
            <div class="thumbnail-box">
                <a class="thumb-link" href="#" title=""></a>
                <div class="thumb-content">
                    <div class="center-vertical">
                        <div class="center-content">
                            <h3 class="thumb-heading animated rollIn">
                                Beautiful garden
                                <small>12 March 2015</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="thumb-overlay bg-black"></div>
                <img src="{{URL::asset('assets/image-resources/stock-images/img-2.jpg')}}" alt="">
            </div>
        </li>
        <li class="col-lg-4 col-sm-6 col-md-4" data-cat="1">
            <div class="thumbnail-box">
                <a class="thumb-link" href="#" title=""></a>
                <div class="thumb-content">
                    <div class="center-vertical">
                        <div class="center-content">
                            <h3 class="thumb-heading animated fadeInDown">
                                Sunrays flowers
                                <small>12 March 2015</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="thumb-overlay bg-primary"></div>
                <img src="{{URL::asset('assets/image-resources/stock-images/img-3.jpg')}}" alt="">
            </div>
        </li>
        <li class="col-lg-4 col-sm-6 col-md-4" data-cat="1">
            <div class="thumbnail-box">
                <a class="thumb-link" href="#" title=""></a>
                <div class="thumb-content">
                    <div class="center-vertical">
                        <div class="center-content">
                            <h3 class="thumb-heading animated flipInX">
                                Seeing a DJs work
                                <small>12 March 2015</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="thumb-overlay bg-blue"></div>
                <img src="{{URL::asset('assets/image-resources/stock-images/img-4.jpg')}}" alt="">
            </div>
        </li>        
    </ul>
</div>
@endsection