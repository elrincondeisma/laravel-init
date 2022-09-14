@extends('layouts/layoutMaster')

@section('title', 'Plyr - Extended UI')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/plyr/plyr.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/plyr/plyr.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/extended-ui-media-player.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Plyr
</h4>

<div class="row">
  <!-- Video Player -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Video</h5>
      <div class="card-body">
        <video class="w-100" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline controls>
          <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
  </div>
  <!-- /Video Player -->

  <!-- Audio Player -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Audio</h5>
      <div class="card-body">
        <audio class="w-100" id="plyr-audio-player" controls>
          <source src="{{asset('assets/audio/Water_Lily.mp3')}}" type="audio/mp3" />
        </audio>
      </div>
    </div>
  </div>
  <!-- /Audio Player -->
</div>
@endsection
