@extends('layouts/layoutMaster')

@section('title', 'File upload - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Forms /</span> File upload
</h4>

<div class="row">
  <!-- Basic  -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
          <div class="dz-message needsclick">
            Drop files here or click to upload
            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Basic  -->
  <!-- Multi  -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Multiple</h5>
      <div class="card-body">
        <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
          <div class="dz-message needsclick">
            Drop files here or click to upload
            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Multi  -->
</div>
@endsection
