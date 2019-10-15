@extends('layout.main') 
@section('page-title', 'Cashback') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>
@endsection

@section('content')
<h1>Cashback</h1>
@endsection