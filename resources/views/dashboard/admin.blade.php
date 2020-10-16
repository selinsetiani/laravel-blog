@extends('layouts.dashboard')


@section('sidebar')

@section('content')

        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Publish Post</h5>
                                <h2><span class="counter">{{$publishedCount}}</span></h2>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Draft Post</h5>
                                <h2><span class="counter">{{$draftCount}}</span></h2>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Total Post</h5>
                                <h2><span class="counter">{{$allpost}}</span></h2>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Statistic Post</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp graph-rp-dl">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #006DF0;"></i>Publish</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Draft</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Total</h5>
                                </li>
                            </ul>
                            <div id="morris-bar-chart" style="height: 356px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Total Categories</h3>
                            <ul class="list-inline two-part-sp">
                                
                                <li class="text-right"><span class="counter text-success"><span class="counter">{{$category}}</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h3 class="box-title">Total Users</h3>
                            <ul class="list-inline two-part-sp">
                               
                                <li class="text-right graph-two-ctn"> <span class="counter text-purple"><span class="counter">{{$user}}</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                   
                </div>
            </div>
        </div>
@endsection

<script>
function requestData(days, chart){
    $.ajax({
        type: "GET",
        url: "{{url('/chart')}}", 
        data: { days: days }
    })
    .done(function( data ) {
        // When the response to the AJAX request comes back render the chart with new data
        console.log("Received data", data)        
        chart.setData(JSON.parse(data));
    })
    .fail(function() {
        // If there is no communication between the server, show an error
        alert( "error occured" );
    });
}
</script>