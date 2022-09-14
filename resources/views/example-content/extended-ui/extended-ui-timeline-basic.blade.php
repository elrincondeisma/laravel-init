@extends('layouts/layoutMaster')

@section('title', 'Basic Timeline - Extended UI')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Extended UI /</span> Basic Timeline
</h4>

<div class="row gy-4">
  <!-- Timeline Left-->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <ul class="timeline mt-3">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header border-bottom mb-3">
                <h6 class="mb-0">Get on the flight</h6>
                <small class="text-muted">3rd October</small>
              </div>
              <div class="d-flex justify-content-between flex-wrap mb-2">
                <div>
                  <span>Charles de Gaulle Airport, Paris</span>
                  <i class="bx bx-right-arrow-alt scaleX-n1-rtl mx-3"></i>
                  <span>Heathrow Airport, London</span>
                </div>
                <div>
                  <span class="text-muted">6:30 AM</span>
                </div>
              </div>
              <a href="javascript:void(0)">
                <i class="bx bx-link"></i>
                bookingCard.pdf
              </a>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-sm-0 mb-3">
                <h6 class="mb-0">Design Review</h6>
                <small class="text-muted">4th October</small>
              </div>
              <p>
                Weekly review of freshly prepared design for our new
                application.
              </p>
              <div class="d-flex justify-content-between">
                <h6>New Application</h6>
                <div class="d-flex">
                  <div class="avatar avatar-xs me-2">
                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="avatar avatar-xs">
                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-danger"></span>
            <div class="timeline-event">
              <div class="d-flex flex-sm-row flex-column">
                <img src="{{asset('assets/img/elements/16.jpg')}}" class="rounded mb-sm-0 mb-3 me-3" alt="Shoe img" height="62" width="62" />
                <div>
                  <div class="timeline-header flex-wrap mb-2">
                    <h6 class="mb-0">Sold Puma POPX Blue Color</h6>
                    <small class="text-muted">5th October</small>
                  </div>
                  <p>
                    PUMA presents the latest shoes from its collection. Light &
                    comfortable made with highly durable material.
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column text-sm-center">
                <div class="customer mb-sm-0 mb-2">
                  <p class="mb-0">Customer</p>
                  <span class="text-muted">Micheal Scott</span>
                </div>
                <div class="price mb-sm-0 mb-2">
                  <p class="mb-0">Price</p>
                  <span class="text-muted">$375.00</span>
                </div>
                <div class="price">
                  <p class="mb-0">Quantity</p>
                  <span class="text-muted">1</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Interview Schedule</h6>
                <small class="text-muted">6th October</small>
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Possimus quos, voluptates voluptas rem veniam expedita.
              </p>
              <hr />
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap">
                  <div class="avatar me-3">
                    <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0">Rebecca Godman</p>
                    <span class="text-muted">Javascript Developer</span>
                  </div>
                </div>
                <div class="d-flex flex-wrap align-items-center cursor-pointer">
                  <i class="bx bx-message me-2"></i>
                  <i class="bx bx-phone-call"></i>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-warning"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">2 Notifications</h6>
                <small class="text-muted">7th October</small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 my-3 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" />
                      </li>
                    </ul>
                    <span>Commented on your post.</span>
                  </div>
                  <button class="btn btn-primary btn-sm my-sm-0 my-3">
                    View
                  </button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap pb-0 px-0">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/avatars/4.png')}}" class="rounded-circle me-3" alt="avatar" height="24" width="24" />
                    <div class="user-info">
                      <p class="my-0">Dwight repaid you</p>
                      <span class="text-muted">30 minutes ago</span>
                    </div>
                  </div>
                  <h5 class="mb-0">$20</h5>
                </li>
              </ul>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Timeline Left-->

  <!-- Timeline Advanced-->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Advanced</h5>
      <div class="card-body">
        <ul class="timeline timeline-dashed mt-4">
          <li class="timeline-item timeline-item-primary mb-4">
            <span class="timeline-indicator timeline-indicator-primary">
              <i class="bx bx-paper-plane"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header border-bottom mb-3">
                <h6 class="mb-0">Get on the flight</h6>
                <small class="text-muted">3rd October</small>
              </div>
              <div class="d-flex justify-content-between flex-wrap mb-2">
                <div>
                  <span>Charles de Gaulle Airport, Paris</span>
                  <i class="bx bx-right-arrow-alt scaleX-n1-rtl mx-3"></i>
                  <span>Heathrow Airport, London</span>
                </div>
                <div>
                  <span>6:30 AM</span>
                </div>
              </div>
              <a href="javascript:void(0)">
                <i class="bx bx-link"></i>
                bookingCard.pdf
              </a>
            </div>
          </li>
          <li class="timeline-item timeline-item-success mb-4">
            <span class="timeline-indicator timeline-indicator-success">
              <i class="bx bx-paint"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header mb-sm-0 mb-3">
                <h6 class="mb-0">Design Review</h6>
                <small class="text-muted">4th October</small>
              </div>
              <p>
                Weekly review of freshly prepared design for our new
                application.
              </p>
              <div class="d-flex justify-content-between">
                <h6>New Application</h6>
                <div class="d-flex">
                  <div class="avatar avatar-xs me-2">
                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div class="avatar avatar-xs">
                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-danger mb-4">
            <span class="timeline-indicator timeline-indicator-danger">
              <i class="bx bx-shopping-bag"></i>
            </span>
            <div class="timeline-event">
              <div class="d-flex flex-sm-row flex-column">
                <img src="{{asset('assets/img/elements/16.jpg')}}" class="rounded mb-sm-0 mb-3 me-3" alt="Shoe img" height="62" width="62" />
                <div>
                  <div class="timeline-header flex-wrap mb-2">
                    <h6 class="mb-0">Sold Puma POPX Blue Color</h6>
                    <small class="text-muted">5th October</small>
                  </div>
                  <p>
                    PUMA presents the latest shoes from its collection. Light &
                    comfortable made with highly durable material.
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column text-center">
                <div class="mb-sm-0 mb-2">
                  <p class="mb-0">Customer</p>
                  <span class="text-muted">Micheal Scott</span>
                </div>
                <div class="mb-sm-0 mb-2">
                  <p class="mb-0">Price</p>
                  <span class="text-muted">$375.00</span>
                </div>
                <div>
                  <p class="mb-0">Quantity</p>
                  <span class="text-muted">1</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-info mb-4">
            <span class="timeline-indicator timeline-indicator-info">
              <i class="bx bx-user-circle"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Interview Schedule</h6>
                <small class="text-muted">6th October</small>
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Possimus quos, voluptates voluptas rem veniam expedita.
              </p>
              <hr />
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap">
                  <div class="avatar me-3">
                    <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0">Rebecca Godman</p>
                    <span class="text-muted">Javascript Developer</span>
                  </div>
                </div>
                <div class="d-flex flex-wrap align-items-centers cursor-pointer">
                  <i class="bx bx-message me-2"></i>
                  <i class="bx bx-phone-call"></i>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-dark mb-4">
            <span class="timeline-indicator timeline-indicator-dark">
              <i class="bx bx-bell"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">2 Notifications</h6>
                <small class="text-muted">7th October</small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 my-3 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                        <img class="rounded-circle" src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" />
                      </li>
                    </ul>
                    <span>Commented on your post.</span>
                  </div>
                  <button class="btn btn-primary btn-sm my-sm-0 my-3">
                    View
                  </button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap pb-0 px-0">
                  <div class="d-flex flex-sm-row flex-column align-items-center">
                    <img src="{{asset('assets/img/avatars/4.png')}}" class="rounded-circle me-3" alt="avatar" height="24" width="24" />
                    <div class="user-info">
                      <p class="my-0">Dwight repaid you</p>
                      <span class="text-muted">30 minutes ago</span>
                    </div>
                  </div>
                  <h5 class="mb-0">$20</h5>
                </li>
              </ul>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Timeline Advanced-->
</div>
@endsection
