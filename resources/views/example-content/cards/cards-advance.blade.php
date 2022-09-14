@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Advance- UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-advance.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Advance
</h4>

<div class="row">
  <!-- Gamification Card -->
  <div class="col-md-6 col-lg-4 mb-4 order-0">
    <div class="card h-100">
      <div class="card-header">
        <h3 class="card-title mb-2">Congratulations John!</h3>
        <span class="text-nowrap">Best seller of the month</span>
      </div>
      <div class="card-body">
        <div class="row align-items-end">
          <div class="col-6">
            <h1 class="display-6 text-primary mb-2 pt-3 pb-1">$89k</h1>
            <small class="d-block mb-3">You have done 57.6% <br>more sales today.</small>

            <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
          </div>
          <div class="col-6">
            <img src="{{asset('assets/img/illustrations/prize-'.$configData['style'].'.png')}}" width="140" height="150" class="rounded-start" alt="View Sales" data-app-light-img="illustrations/prize-light.png" data-app-dark-img="illustrations/prize-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

  <!-- Latest Update -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4 order-0">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mb-0">Latest Update</h5>
        <div class="dropdown">
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            2021
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">2020</a>
            <a class="dropdown-item" href="javascript:void(0);">2021</a>
            <a class="dropdown-item" href="javascript:void(0);">2022</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-3">
        <ul class="p-0 m-0">
          <li class="d-flex mb-3">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <p class="mb-0 lh-1">Total Products</p>
                <small class="text-muted">2k New Products</small>
              </div>
              <div class="item-progress">10k</div>
            </div>
          </li>
          <li class="d-flex mb-3">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-pie-chart-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <p class="mb-0 lh-1">Total Sales</p>
                <small class="text-muted">39k New Sales</small>
              </div>
              <div class="item-progress">26M</div>
            </div>
          </li>
          <li class="d-flex mb-3">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-credit-card'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <p class="mb-0 lh-1">Total Revenue</p>
                <small class="text-muted">43k New Revenue</small>
              </div>
              <div class="item-progress">15M</div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <p class="mb-0 lh-1">Total Cost</p>
                <small class="text-muted">Total Expenses</small>
              </div>
              <div class="item-progress">2B</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Latest Update -->

  <!-- History -->
  <div class="col-md-6 col-lg-4 col-xl-4 mb-4 order-0">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">History</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="historyList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="historyList">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless mb-2">
          <tbody>
            <tr>
              <td class="pt-0">
                <div class="d-flex justify-content-start align-items-center">
                  <img src="{{asset('assets/img/icons/payments/visa-'.$configData['style'].'.png')}}" alt="visa" width="44" class="me-2" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
                  <div class="d-flex flex-column">
                    <p class="mb-0 lh-1">*8490</p><small class="text-muted text-nowrap">Credit Card</small>
                  </div>
                </div>
              </td>
              <td class="pt-0">
                <h6 class="mb-0">Sent</h6>
              </td>
              <td class="pt-0">
                <div class="text-danger">-$5,890</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <img src="{{asset('assets/img/icons/payments/paypal-'.$configData['style'].'.png')}}" alt="paypal" width="44" class="me-2" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png">
                  <div class="d-flex flex-column">
                    <p class="mb-0 lh-1">*6345</p><small class="text-muted text-nowrap">Paypal</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">Received</h6>
              </td>
              <td>
                <div class="text-success">+$960</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <img src="{{asset('assets/img/icons/payments/amazon-'.$configData['style'].'.png')}}" alt="amazon" width="44" class="me-2" data-app-light-img="icons/payments/amazon-light.png" data-app-dark-img="icons/payments/amazon-dark.png">
                  <div class="d-flex flex-column">
                    <p class="mb-0 lh-1">Amazon</p><small class="text-muted text-nowrap">Wallet</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">Sent</h6>
              </td>
              <td>
                <div class="text-danger">-$1,287</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <img src="{{asset('assets/img/icons/payments/master-'.$configData['style'].'.png')}}" alt="mastercard" width="44" class="me-2" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
                  <div class="d-flex flex-column">
                    <p class="mb-0 lh-1">*6792</p><small class="text-muted text-nowrap">Debit Card</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">Received</h6>
              </td>
              <td>
                <div class="text-success">+3,278</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ History -->

  <!-- Activity Timeline -->
  <div class="col-md-6 col-lg-5 mb-4 order-3 order-lg-0">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Activity Timeline</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Activity Timeline -->
        <ul class="timeline">
          <li class="timeline-item timeline-item-transparent ps-4">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event pb-2">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">Invoices have been paid to the company</p>
              <div class="d-flex">
                <a href="javascript:void(0)" class="d-flex align-items-center me-3">
                  <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="23" class="me-2">
                  <h6 class="mb-0">Invoices.pdf</h6>
                </a>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent ps-4">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event pb-2">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">Project meeting with john @10:15am</p>
              <div class="d-flex flex-wrap">
                <div class="avatar me-3">
                  <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                </div>
                <div>
                  <h6 class="mb-0">John Doe (Client)</h6>
                  <span>CEO of {{ config('variables.creatorName') }}</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent ps-4">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event pb-0">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">5 team members in a project</p>
              <div class="d-flex align-items-center avatar-group">
                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
                  <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
                  <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
                  <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
                  <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
                  <img src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar" class="rounded-circle">
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
        <!-- /Activity Timeline -->
      </div>
    </div>
  </div>
  <!--/ Activity Timeline -->

  <!-- Finance Summary -->
  <div class="col-md-12 col-lg-7 mb-4 order-2 order-lg-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center me-3">
          <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle me-3" width="54">
          <div class="card-title mb-0">
            <h5 class="mb-0">Financial Report for Kiara Cruiser</h5>
            <small class="text-muted">Awesome App for Project Management</small>
          </div>
        </div>
        <div class="dropdown btn-pinned">
          <button class="btn p-0" type="button" id="financoalReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="financoalReport">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex flex-wrap gap-4 mb-5 mt-4">
          <div class="d-flex flex-column me-2">
            <h6>Start Date</h6>
            <span class="badge bg-label-success">02 APR 22</span>
          </div>
          <div class="d-flex flex-column me-2">
            <h6>End Date</h6>
            <span class="badge bg-label-danger">06 MAY 22</span>
          </div>
          <div class="d-flex flex-column me-2">
            <h6>Members</h6>
            <ul class="list-unstyled me-2 d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Ellen Wagner" class="avatar avatar-xs pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar avatar-xs pull-up">
                <img class="rounded-circle" src="{{asset('assets/img/avatars/10.png')}}" alt="Avatar">
              </li>
            </ul>
          </div>
          <div class="d-flex flex-column me-2">
            <h6>Budget</h6>
            <span>$249k</span>
          </div>
          <div class="d-flex flex-column me-2">
            <h6>Expenses</h6>
            <span>$82k</span>
          </div>
        </div>
        <div class="d-flex flex-column flex-grow-1">
          <span class="text-nowrap d-block mb-1">Kiara Cruiser Progress</span>
          <div class="progress w-100 mb-3" style="height: 8px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <span>I distinguish three main text objectives. First, your objective could be merely to inform people. A second be to persuade people.</span>
      </div>
      <div class="card-footer border-top">
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><i class="bx bx-check"></i> 74 Tasks</li>
          <li class="list-inline-item"><i class="bx bx-chat"></i> 678 Comments</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Finance Summary -->

  <!-- Activity -->
  <div class="col-md-6 col-xl-4 col-xxl-3 mb-xxl-0 mb-4 order-1 order-lg-0">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Activity</h5>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-2">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
            </div>
            <div class="d-flex flex-column w-100">
              <div class="d-flex justify-content-between mb-1">
                <span>Total Sales</span>
                <span class="text-muted">$2,459</span>
              </div>
              <div class="progress" style="height:6px;">
                <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-2">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
            </div>
            <div class="d-flex flex-column w-100">
              <div class="d-flex justify-content-between mb-1">
                <span>Income</span>
                <span class="text-muted">$8,478</span>
              </div>
              <div class="progress" style="height:6px;">
                <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-2">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-trending-up'></i></span>
            </div>
            <div class="d-flex flex-column w-100">
              <div class="d-flex justify-content-between mb-1">
                <span>Budget</span>
                <span class="text-muted">$12,490</span>
              </div>
              <div class="progress" style="height:6px;">
                <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-2">
            <div class="avatar avatar-sm flex-shrink-0 me-3">
              <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-check'></i></span>
            </div>
            <div class="d-flex flex-column w-100">
              <div class="d-flex justify-content-between mb-1">
                <span>Tasks</span>
                <span class="text-muted">$184</span>
              </div>
              <div class="progress" style="height:6px;">
                <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Activity -->

  <!-- Sales -->
  <div class="col-md-6 col-xl-4 col-xxl-3 mb-4 mb-lg-0 order-2 order-lg-0">
    <div class="card">
      <div class="card-header d-flex align-items-start justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Sales</h5>
          <small class="card-subtitle text-muted">Calculated in last 7 days</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="salesReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesReport">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="salesChart"></div>
        <ul class="p-0 m-0 mt-1">
          <li class="d-flex mb-3">
            <span class="text-primary me-2"><i class='bx bx-up-arrow-alt bx-sm'></i></span>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 lh-1">Best Selling</h6>
                <small class="text-muted">Saturday</small>
              </div>
              <div class="item-progress">28.6k</div>
            </div>
          </li>
          <li class="d-flex">
            <span class="text-secondary me-2"><i class='bx bx-down-arrow-alt bx-sm'></i></span>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 lh-1">Lowest Selling</h6>
                <small class="text-muted">Thursday</small>
              </div>
              <div class="item-progress">7.9k</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Sales -->

  <!-- Top Referrals -->
  <div class="col-md-6 col-xl-4 col-xxl-3 mb-xxl-0 mb-4 order-2 order-lg-0">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Top Referrals</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless mb-1">
          <thead class="border-bottom">
            <tr>
              <th class="pt-0">Source</th>
              <th class="pt-0">users</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-laptop'></i></span>
                  </div>
                  <div class="">
                    <p class="mb-0 lh-1 text-nowrap">Internal Traffic</p>
                    <small class="text-muted text-nowrap">58%</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">28k</h6>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-link-alt'></i></span>
                  </div>
                  <div class="">
                    <p class="mb-0 lh-1 text-nowrap">Direct Traffic</p>
                    <small class="text-muted text-nowrap">26%</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">18k</h6>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-search-alt'></i></span>
                  </div>
                  <div class="">
                    <p class="mb-0 lh-1 text-nowrap">Search Traffic</p>
                    <small class="text-muted text-nowrap">10%</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">8K</h6>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-star'></i></span>
                  </div>
                  <div class="">
                    <p class="mb-0 lh-1 text-nowrap">Social Traffic</p>
                    <small class="text-muted text-nowrap">6%</small>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="mb-0">1k</h6>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Top Referrals -->

  <!-- All Users -->
  <div class="col-md-6 col-xl-4 col-xxl-3 order-3 order-lg-0">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-2">All Users</h5>
        <h1 class="display-6 fw-normal mb-0">8,634,820</h1>
      </div>
      <div class="card-body">
        <span>Current Activity</span>
        <div class="progress progress-stacked mb-3" style="height:8px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="mb-2 d-flex justify-content-between">
            <div class="d-flex align-items-center lh-1 me-3">
              <span class="badge badge-dot bg-success me-2"></span> USA
            </div>
            <div class="d-flex gap-3">
              <span>29.5k</span>
              <span class="fw-semibold">56%</span>
            </div>
          </li>
          <li class="mb-2 d-flex justify-content-between">
            <div class="d-flex align-items-center lh-1 me-3">
              <span class="badge badge-dot bg-danger me-2"></span> France
            </div>
            <div class="d-flex gap-3">
              <span>25.7k</span>
              <span class="fw-semibold">26%</span>
            </div>
          </li>
          <li class="mb-2 d-flex justify-content-between">
            <div class="d-flex align-items-center lh-1 me-3">
              <span class="badge badge-dot bg-info me-2"></span> Italy
            </div>
            <div class="d-flex gap-3">
              <span>11.5k</span>
              <span class="fw-semibold">34%</span>
            </div>
          </li>
          <li class="mb-2 d-flex justify-content-between">
            <div class="d-flex align-items-center lh-1 me-3">
              <span class="badge badge-dot bg-primary me-2"></span> China
            </div>
            <div class="d-flex gap-3">
              <span>48.5k</span>
              <span class="fw-semibold">45%</span>
            </div>
          </li>
          <li class="d-flex justify-content-between">
            <div class="d-flex align-items-center lh-1 me-3">
              <span class="badge badge-dot bg-warning me-2"></span> India
            </div>
            <div class="d-flex gap-3">
              <span>22.1k</span>
              <span class="fw-semibold">7%</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ All Users -->
</div>
@endsection
