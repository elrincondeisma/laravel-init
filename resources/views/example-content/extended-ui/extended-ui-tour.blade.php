@extends('layouts/layoutMaster')

@section('title', 'Shepherd tour - Extended UI')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/shepherd/shepherd.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/shepherd/shepherd.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/extended-ui-tour.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Shepherd tour
</h4>

<div class="row">
  <div class="col-12">
    <div class="card tour-card">
      <h5 class="card-header">Tour</h5>
      <div class="card-body">
        <button class="btn btn-primary" id="shepherd-example">
          Start tour
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
