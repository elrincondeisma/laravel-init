@extends('layouts/layoutMaster')

@section('title', 'Alerts - UI elements')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">UI elements /</span> Alerts
</h4>
<div class="row mb-4">
  <!-- Basic Alerts -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Basic Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary" role="alert">
          This is a primary alert — check it out!
        </div>

        <div class="alert alert-secondary" role="alert">
          This is a secondary alert — check it out!
        </div>

        <div class="alert alert-success" role="alert">
          This is a success alert — check it out!
        </div>

        <div class="alert alert-danger" role="alert">
          This is a danger alert — check it out!
        </div>

        <div class="alert alert-warning" role="alert">
          This is a warning alert — check it out!
        </div>

        <div class="alert alert-info" role="alert">
          This is an info alert — check it out!
        </div>

        <div class="alert alert-dark mb-0" role="alert">
          This is a dark alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Basic Alerts -->
  <!-- Dismissible Alerts -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Dismissible Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-command me-2"></i>
          This is a primary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-secondary alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-envelope me-2"></i>
          This is a secondary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-desktop me-2"></i>
          This is a success dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-store me-2"></i>
          This is a danger dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-warning alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-wallet me-2"></i>
          This is a warning dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-info alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-detail me-2"></i>
          This is an info dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-dark alert-dismissible d-flex align-items-center mb-0" role="alert">
          <i class="bx bx-xs bx-save me-2"></i>
          This is a dark dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Dismissible Alerts -->
</div>
<div class="row mb-4">
  <!-- Alerts with Heading -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Alerts With Header</h5>
      <div class="card-body">
        <div class="alert alert-primary" role="alert">
          <h6 class="alert-heading mb-1">Primary!</h6>
          <span>This is a primary alert — check it out!</span>
        </div>

        <div class="alert alert-secondary" role="alert">
          <h6 class="alert-heading mb-1">Secondary!</h6>
          <span>This is a secondary alert — check it out!</span>
        </div>

        <div class="alert alert-success" role="alert">
          <h6 class="alert-heading mb-1">Success!</h6>
          <span>This is a success alert — check it out!</span>
        </div>

        <div class="alert alert-danger" role="alert">
          <h6 class="alert-heading mb-1">Danger!</h6>
          This is a danger alert — check it out!
        </div>

        <div class="alert alert-warning" role="alert">
          <h6 class="alert-heading mb-1">Warning!</h6>
          <span>This is a warning alert — check it out!</span>
        </div>

        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading mb-1">Info!</h6>
          <span>This is an info alert — check it out!</span>
        </div>

        <div class="alert alert-dark mb-0" role="alert">
          <h6 class="alert-heading mb-1">Dark!</h6>
          <span>This is a dark alert — check it out!</span>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with Heading -->

  <!-- Alerts with Icons -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Icon Alerts With Header</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-command align-top me-2"></i>Primary!</h6>
          <span>This is a primary dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-secondary alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-envelope align-top me-2"></i>Secondary!</h6>
          <span>This is a secondary dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-success alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Success!</h6>
          <span>This is a secondary dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-store align-top me-2"></i>Danger!</h6>
          <span>This is a danger dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-warning alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-wallet align-top me-2"></i>Warning!</h6>
          <span>This is a warning dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-info alert-dismissible" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-detail align-top me-2"></i>Info!</h6>
          <span>This is an info dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
          <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-save align-top me-2"></i>Dark!</h6>
          <span>This is a dark dismissible alert — check it out!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with Icons -->
</div>
<div class="row">
  <!-- Solid Alerts -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Solid Alerts</h5>
      <div class="card-body">
        <div class="alert alert-solid-primary" role="alert">
          This is a primary solid alert — check it out!
        </div>

        <div class="alert alert-solid-secondary" role="alert">
          This is a secondary solid alert — check it out!
        </div>

        <div class="alert alert-solid-success" role="alert">
          This is a success solid alert — check it out!
        </div>

        <div class="alert alert-solid-danger" role="alert">
          This is a danger solid alert — check it out!
        </div>

        <div class="alert alert-solid-warning" role="alert">
          This is a warning solid alert — check it out!
        </div>

        <div class="alert alert-solid-info" role="alert">
          This is an info solid alert — check it out!
        </div>

        <div class="alert alert-solid-dark mb-0" role="alert">
          This is a dark solid alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Solid Alerts -->
  <!-- Alerts with Icons -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Solid Alerts with Icons</h5>
      <div class="card-body">
        <div class="alert alert-solid-primary alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-command me-2"></i>
          This is a primary solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-secondary alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-envelope me-2"></i>
          This is a secondary solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-success alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-desktop me-2"></i>
          This is a success solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-danger alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-store me-2"></i>
          This is a danger solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-warning alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-wallet me-2"></i>
          This is a warning solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-info alert-dismissible d-flex align-items-center" role="alert">
          <i class="bx bx-xs bx-detail me-2"></i>
          This is an info solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-solid-dark alert-dismissible d-flex align-items-center mb-0" role="alert">
          <i class="bx bx-xs bx-save me-2"></i>
          This is a dark solid alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with Icons -->
</div>
@endsection
