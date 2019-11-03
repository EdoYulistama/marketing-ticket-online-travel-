@extends('layout.main') 
@section('page-title', 'Users Population') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

<!--start plugin chart-->
    {{-- <link rel="stylesheet" href="../../../global/vendor/chartist/chartist.css"> --}}
    <link rel="stylesheet" href="../../../global/vendor/aspieprogress/asPieProgress.css">
    <link rel="stylesheet" href="../../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="../../assets/examples/css/dashboard/ecommerce.css">
    <link rel="stylesheet" href="../../../global/vendor/morris/morris.css">
<!--end plugin chart-->



<!--start font-->
    <link rel="stylesheet" href="../../../global/fonts/font-awesome/font-awesome.css">
<!--end font-->

@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

<!--start plugin chart-->
    {{-- <script src="../../../global/vendor/chartist/chartist.min.js"></script> --}}
    <script src="../../../global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
    <script src="../../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
    <script src="../../../global/vendor/raphael/raphael.min.js"></script>
    <script src="../../../global/vendor/morris/morris.min.js"></script>
<!--end plugin chart-->

@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>

<!--start page chart-->
    <script src="../../../global/js/Plugin/aspieprogress.js"></script>
    {{-- <script src="../../assets/examples/js/dashboard/ecommerce.js"></script> --}}
    <script src="../../assets/examples/js/charts/morris.js"></script>
<!--end page chart-->



<script>
// Example Morris Area
  // -------------------
  let arrData=[
                // {
                //   suspend: {{$data['suspend']}}, 
                //   nonactive: {{$data['nonactive']}}, 
                //   active: {{$data['active']}}, 
                //   all: {{$data['all']}},
                //   y: "2019"
                
                // },
                {
                  y: '2002 Feb',
                  all: 2,
                  active: 5,
                  nonactive: 4,
                  suspend: 1
                
                },
                {
                  y: '2003 Mar',
                  all: 4,
                  active: 7,
                  nonactive: 1,
                  suspend: 2
                
                },
                {
                  y: '2004 Apr',
                  all: 1,
                  active: 2,
                  nonactive: 4,
                  suspend: 5
                
                },
                {
                  y: '2005 Apr',
                  all: 1,
                  active: 19,
                  nonactive: 7,
                  suspend: 5
                
                },
                {
                  y: '2006 Apr',
                  all: 1,
                  active: 11,
                  nonactive: 4,
                  suspend: 3
                
                },
                {
                  y: '2007 Apr',
                  all: 1,
                  active: 12,
                  nonactive: 10,
                  suspend: 1
                },
                {
                  y: '2008 Mei',
                  all: 5,
                  active: 17,
                  nonactive: 0,
                  suspend: 1
                }
                
              ];
  let morrisArea = Morris.Area({
   
      element: 'exampleMorrisArea',
      data: arrData,
      xkey: 'y',
      ykeys: ['all', 'active','nonactive', 'suspend'],
      labels: ['All', 'Active', 'Nonactive', 'Suspend'],
      behaveLikeLine: true,
      ymax: 20,
      resize: true,
      pointSize: 5,
      smooth: true,
      gridTextColor: '#474e54',
      gridLineColor: '#FF007F',
      goalLineColors: '#e3e6ea',
      gridTextFamily: Config.get('fontFamily'),
      gridTextWeight: '20',
      numLines: 5,
      gridtextSize: 20,
      lineWidth: 4,
      fillOpacity: 0.1,
      lineColors: [
                    Config.colors("primary", 600), 
                    Config.colors("green", 600),
                    Config.colors("yellow", 600),
                    Config.colors("red", 600)
                  ]
    });
  
</script>

@endsection

@section('content')
    
<div class="row">
        <!-- start card -->
           <div class="col-xl-3 col-md-6 info-panel">
                <div class="card card-shadow">
                    <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-primary">
                        <i class="icon wb-shopping-cart"></i>
                    </button>
                    <span class="ml-15 font-weight-400">USER REGISTER</span>
                    <div class="content-text text-center mb-0">
                        <span class="font-size-40 font-weight-100">{{$data['all']}}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
                <div class="card card-shadow">
                    <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-success">
                        <i class="icon fa-dollar"></i>
                    </button>
                    <span class="ml-15 font-weight-400">USER ACTIVE</span>
                    <div class="content-text text-center mb-0">
                    <span class="font-size-40 font-weight-100">{{$data['active']}}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
                <div class="card card-shadow">
                    <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-warning">
                        <i class="icon wb-eye"></i>
                    </button>
                    <span class="ml-15 font-weight-400">USER NONACTIVE</span>
                    <div class="content-text text-center mb-0">
                        <span class="font-size-40 font-weight-100">{{$data['nonactive']}}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
                <div class="card card-shadow">
                    <div class="card-block bg-white p-20">
                    <button type="button" class="btn btn-floating btn-sm btn-danger">
                        <i class="icon wb-user"></i>
                    </button>
                    <span class="ml-15 font-weight-400">USER SUSPEND</span>
                    <div class="content-text text-center mb-0">
                        <span class="font-size-40 font-weight-100">{{$data['suspend']}}</span>
                        <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End card -->

            <!-- start grafik -->
            <div class="col-12" id="ecommerceChartView">
                <div class="card card-shadow">
                  <div class="card-header card-header-transparent py-20">
                    <div class="btn-group dropdown">
                      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">JENIS USERS</a>
                      <div class="dropdown-menu animate" role="menu">
                        <a class="dropdown-item" href="#" role="menuitem">MEMBER</a>
                        <a class="dropdown-item" href="#" role="menuitem">GUEST</a>
                      </div>
                    </div>
                    <ul class="nav nav-pills nav-pills-rounded chart-action">
                      <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Year</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Custome</a></li>
                    </ul>
                  </div>
                  <div class="widget-content tab-content bg-white p-20">
                      <!-- Example Area -->
                        <div id="exampleMorrisArea"></div> 
                      <!-- End Example Area -->
                  </div>
                </div>
              </div>
              <!-- End grafik -->
</div>

@endsection