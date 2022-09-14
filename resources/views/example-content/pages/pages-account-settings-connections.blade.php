@extends('layouts/layoutMaster')

@section('title', 'Account settings - Pages')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Account Settings / </span> Connections
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-account')}}"><i class="bx bx-user me-1"></i> Account</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-security')}}"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-billing')}}"><i class="bx bx-detail me-1"></i> Billing & Plans</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul>
    <div class="row">
      <div class="col-md-6 col-12 mb-md-0 mb-4">
        <div class="card">
          <h5 class="card-header">Connected Accounts</h5>
          <div class="card-body">
            <p>Display content from your connected accounts on your site</p>
            <!-- Connections -->
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/google.png')}}" alt="google" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Google</h6>
                  <span>Calendar and contacts</span>
                </div>
                <div class="col-3 text-end">
                  <label class="switch me-0">
                    <input type="checkbox" class="switch-input" checked />
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="bx bx-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="bx bx-x"></i>
                      </span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/slack.png')}}" alt="slack" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Slack</h6>
                  <span>Communication</span>
                </div>
                <div class="col-3 text-end">
                  <label class="switch me-0">
                    <input type="checkbox" class="switch-input" />
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="bx bx-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="bx bx-x"></i>
                      </span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/github.png')}}" alt="github" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Github</h6>
                  <span>Manage your Git repositories</span>
                </div>
                <div class="col-3 text-end">
                  <label class="switch me-0">
                    <input type="checkbox" class="switch-input" checked />
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="bx bx-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="bx bx-x"></i>
                      </span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/mailchimp.png')}}" alt="mailchimp" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Mailchimp</h6>
                  <span>Email marketing service</span>
                </div>
                <div class="col-3 text-end">
                  <label class="switch me-0">
                    <input type="checkbox" class="switch-input" checked />
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="bx bx-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="bx bx-x"></i>
                      </span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/asana.png')}}" alt="asana" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Asana</h6>
                  <span>Communication</span>
                </div>
                <div class="col-3 text-end">
                  <label class="switch me-0">
                    <input type="checkbox" class="switch-input" />
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="bx bx-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="bx bx-x"></i>
                      </span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </div>
              </div>
            </div>
            <!-- /Connections -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="card">
          <h5 class="card-header">Social Accounts</h5>
          <div class="card-body">
            <p>Display content from social accounts on your site</p>
            <!-- Social Accounts -->
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/facebook.png')}}" alt="facebook" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Facebook</h6>
                  <span>Not Connected</span>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-label-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/twitter.png')}}" alt="twitter" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Twitter</h6>
                  <a href="{{config('variables.twitterUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/instagram.png')}}" alt="instagram" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">instagram</h6>
                  <a href="{{config('variables.instagramUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/dribbble.png')}}" alt="dribbble" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Dribbble</h6>
                  <span>Not Connected</span>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-label-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/behance.png')}}" alt="behance" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Behance</h6>
                  <span>Not Connected</span>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-label-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Social Accounts -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
