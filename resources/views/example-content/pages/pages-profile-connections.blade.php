@extends('layouts/layoutMaster')

@section('title', 'User Profile - Connections')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-profile.css')}}" />
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">User Profile /</span> Connections
</h4>

<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">
        <img src="{{asset('assets/img/pages/profile-banner.png')}}" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item fw-semibold">
                  <i class='bx bx-pen'></i> UX Designer
                </li>
                <li class="list-inline-item fw-semibold">
                  <i class='bx bx-map'></i> Vatican City
                </li>
                <li class="list-inline-item fw-semibold">
                  <i class='bx bx-calendar-alt'></i> Joined April 2021</li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
              <i class='bx bx-user-check'></i> Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-user')}}"><i class='bx bx-user'></i> Profile</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-teams')}}"><i class='bx bx-group'></i> Teams</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-projects')}}"><i class='bx bx-grid-alt'></i> Projects</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-link-alt'></i> Connections</a></li>
    </ul>
  </div>
</div>
<!--/ Navbar pills -->

<!-- Connection Cards -->
<div class="row g-4">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Mark Gilbert</h5>
        <span>UI Designer</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-secondary">Figma</span></a>
          <a href="javascript:;"><span class="badge bg-label-warning">Sketch</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">18</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">834</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">129</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>Connected</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Eugenia Parsons</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-info">React</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">112</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">23.1k</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">1.28k</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Francis Byrd</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-info">React</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">32</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">1.25k</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">890</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/18.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Leon Lucas</h5>
        <span>UI/UX Designer</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-secondary">Figma</span></a>
          <a href="javascript:;" class="me-1"><span class="badge bg-label-warning">Sketch</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary">Photoshop</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">86</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">12.4k</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">890</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Jayden Rogers</h5>
        <span>Full Stack Developer</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-info">React</span></a>
          <a href="javascript:;" class="me-1"><span class="badge bg-label-danger">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">244</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">23.8k</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">2.14k</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>Connected</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto mb-3">
          <img src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h5 class="mb-1 card-title">Jeanette Powell</h5>
        <span>SEO</span>
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-success">Writing</span></a>
          <a href="javascript:;"><span class="badge bg-label-secondary">Analysis</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around my-4 py-2">
          <div>
            <h4 class="mb-1">32</h4>
            <span>Projects</span>
          </div>
          <div>
            <h4 class="mb-1">1.28k</h4>
            <span>Tasks</span>
          </div>
          <div>
            <h4 class="mb-1">1.27k</h4>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-3"><i class="bx bx-user-plus me-1"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="bx bx-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Connection Cards -->
@endsection
