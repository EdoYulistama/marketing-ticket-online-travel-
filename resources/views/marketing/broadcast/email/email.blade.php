@extends('layout.main') 
@section('page-title', 'SMS') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
<!--start form-->
    <link rel="stylesheet" href="../../../global/vendor/formvalidation/formValidation.css">
    <link rel="stylesheet" href="../../assets/examples/css/forms/validation.css">
<!--end form-->

<!--start body-->
    <link rel="stylesheet" href="../../../global/vendor/summernote/summernote.css">
<!--end body-->
@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
<!--start form-->
    <script src="../../../global/vendor/formvalidation/formValidation.min.js"></script>
    <script src="../../../global/vendor/formvalidation/framework/bootstrap4.min.js"></script>
<!--end form-->
<!--start body-->
    <script src="../../../global/vendor/summernote/summernote.min.js"></script>
<!--end body-->
@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>
<!--start form-->
    <script src="../../assets/examples/js/forms/validation.js"></script>
<!--end form-->

<!--start body-->
    <script src="../../../global/js/Plugin/summernote.js"></script>
    <script src="../../assets/examples/js/forms/editor-summernote.js"></script>
<!--end body-->
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
          <!-- Panel Standard Mode -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Email</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" id="exampleStandardForm" autocomplete="off">
                <div class="form-group row">
                  <label class="col-md-3 form-control-label">Email</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="standard_fullName" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 form-control-label">Subject</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="standard_fullName" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 form-control-label">Body</label>
                  <div class="col-md-9">
                        <div data-plugin="summernote" data-plugin-options='{"toolbar":[["style", ["bold", "italic", "underline", "clear"]],["color", ["color"]],["para", ["ul", "ol", "paragraph"]]]}'>
                                <h3>Heading is here</h3>
                                <p>Lorem ipsum dolor sit amet,
                                  <strong><b>consectetur adipisicing elit</b></strong>consectetur adipisicing
                                  elit, sed do eiusmod tempor incididunt ut labore et dolore
                                  magna aliqua. Ut enim ad minim veniam, quis nostrud <u>Exercitation</u>                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul>
                                  <li>list text here</li>
                                  <li>list text here</li>
                                  <li>list text here</li>
                                </ul>
                              </div>
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