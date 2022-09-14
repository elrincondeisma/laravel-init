@extends('layouts/layoutMaster')

@section('title', 'Tooltips and popovers - UI elements')

@section('page-script')
<script src="{{asset('assets/js/ui-popover.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">UI elements /</span> Tooltips & popovers
</h4>

<!-- Tooltips -->
<div class="card mb-4">
  <h5 class="card-header">Tooltips</h5>
  <div class="card-body">
    <div class="text-light small fw-semibold">Directions</div>
    <div class="row demo-vertical-spacing">
      <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Tooltip on right</span>">
          Right
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-bell bx-xs' ></i> <span>Tooltip on top</span>">
          Top
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" title="<i class='bx bx-heart bx-xs' ></i> <span>Tooltip on bottom</span>">
          Bottom
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="left" data-bs-html="true" title="<i class='bx bx-dollar bx-xs' ></i> <span>Tooltip on left</span>">
          Left
        </button>
      </div>
    </div>
  </div>
  <hr class="m-0" />
  <div class="card-body">
    <div class="text-light small fw-semibold">Solid</div>

    <div class="demo-inline-spacing">
      <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="primary" title="Primary tooltip">
        Primary
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="secondary" title="Secondary tooltip">
        Secondary
      </button>
      <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="success" title="Success tooltip">
        Success
      </button>
      <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="danger" title="Danger tooltip">
        Danger
      </button>
      <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="warning" title="Warning tooltip">
        Warning
      </button>
      <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="info" title="Info tooltip">
        Info
      </button>
      <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-color="dark" title="Dark tooltip">
        Dark
      </button>
    </div>
  </div>
</div>
<!--/ Tooltips -->

<!-- Popovers -->
<div class="card">
  <h5 class="card-header">Popovers</h5>
  <div class="card-body">
    <div class="text-light small fw-semibold">Directions</div>
    <div class="row demo-vertical-spacing">
      <div class="col">
        <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="right" data-bs-html="true" data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-label-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>" title="Popover Title">
          Popover on right
        </button>

      </div>
      <div class="col">
        <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="top" data-bs-html="true" data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-label-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>" title="Popover Title">
          Popover on top
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-label-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>" title="Popover Title">
          Popover on bottom
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="left" data-bs-html="true" data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-label-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>" title="Popover Title">
          Popover on left
        </button>
      </div>
    </div>
  </div>
  <hr class="m-0" />
  <div class="card-body">
    <div class="text-light small fw-semibold">Solid</div>

    <div class="demo-inline-spacing">
      <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="right" data-color="primary" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Primary
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="right" data-color="secondary" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Secondary
      </button>
      <button type="button" class="btn btn-success" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="top" data-color="success" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Success
      </button>
      <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="top" data-color="danger" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Danger
      </button>
      <button type="button" class="btn btn-warning" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="left" data-color="warning" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Warning
      </button>
      <button type="button" class="btn btn-info" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="bottom" data-color="info" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Info
      </button>
      <button type="button" class="btn btn-dark" data-bs-toggle="popover" data-bs-offset="0,14" data-bs-placement="top" data-color="dark" data-bs-content="This is a very beautiful popover, show some love." title="Popover Title">
        Dark
      </button>
    </div>
  </div>
</div>
<!--/ Popovers -->
@endsection
