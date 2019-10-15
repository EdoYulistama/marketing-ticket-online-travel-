@extends('layout.main') 
@section('page-title', 'SMS') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
<!--start form-->
    <link rel="stylesheet" href="../../../global/vendor/formvalidation/formValidation.css">
    <link rel="stylesheet" href="../../assets/examples/css/forms/validation.css">
<!--end form-->
@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
<!--start form-->
    <script src="../../../global/vendor/formvalidation/formValidation.min.js"></script>
    <script src="../../../global/vendor/formvalidation/framework/bootstrap4.min.js"></script>
<!--end form-->
@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>
<!--start form-->
    <script src="../../assets/examples/js/forms/validation.js"></script>
<!--end form-->
@endsection

@section('content')
<div class="row">
        <div class="col-lg-6">
          <!-- Panel Standard Mode -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">SMS</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" id="exampleStandardForm" autocomplete="off">
                <div class="form-group row">
                  <label class="col-md-3 form-control-label">Nomor HP</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="standard_fullName" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 form-control-label">Body</label>
                  <div class="col-md-9">
                    <textarea class="form-control" name="standard_content" rows="5"></textarea>
                  </div>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary" id="validateButton2">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Standard Mode -->
        </div>
</div>
@endsection