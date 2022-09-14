@extends('layouts/layoutMaster')

@section('title', 'Footer - UI elements')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">UI elements /</span> Footer
</h4>

<!-- Basic footer -->
<section id="basic-footer">
  <h5 class="pb-1 mt-5 mb-4">Basic Footer</h5>

  <footer class="footer bg-light">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>
</section>
<!--/ Basic footer -->
<hr class="container-m-nx border-light my-5" />

<!-- Footer with components -->
<section id="component-footer">
  <h5 class="pb-1 mb-4">Footer with Elements</h5>

  <footer class="footer bg-light">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <div class="form-check form-control-sm footer-link me-3">
          <input class="form-check-input" type="checkbox" value="" id="customCheck2" checked />
          <label class="form-check-label" for="customCheck2">
            Show
          </label>
        </div>
        <div class="dropdown dropup footer-link me-3">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Currency
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-dollar'></i> USD</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-euro'></i> Euro</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-pound'></i> Pound</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-bitcoin'></i> Bitcoin</a>
          </div>
        </div>
        <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger"><i class='bx bx-log-out-circle'></i> Logout</a>
      </div>
    </div>
  </footer>
</section>
<!--/ Footer with components -->
<hr class="container-m-nx border-light my-5" />

<!-- Color Schema -->
<section id="color-footer">
  <h5 class="pb-1 mb-4">Color Schema</h5>

  <footer class="footer bg-primary mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-secondary mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-success mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-danger mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-warning mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-info mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-light mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-dark mb-4">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

  <footer class="footer bg-footer-theme">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>
</section>
<!--/ Color Schema -->
<hr class="container-m-nx border-light my-5" />

<!-- footer Theme -->
<section id="theme-footer">
  <h5 class="pb-1 mb-4">Footer Theme</h5>

  <footer class="footer bg-footer-theme">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-semibold">{{config('variables.templateName')}}</a> ©
      </div>
      <div>
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>
</section>
<!--/ footer Theme -->
<hr class="container-m-nx border-light my-5" />

<!-- Advanced footer -->
<section id="adv-footer">
  <h5 class="pb-1 mb-4">Advanced Footer</h5>

  <footer class="footer bg-light">
    <div class="container-fluid container-p-x pt-5 pb-4">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
          <h4 class="mb-3"><a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text">{{config('variables.templateName')}} </a></h4>
          <span>Get ready for better world</span>
          <div class="social-icon my-3">
            <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-facebook me-2"><i class='bx bxl-facebook'></i></a>
            <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-twitter me-2"><i class='bx bxl-twitter'></i></a>
            <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-linkedin me-2"><i class='bx bxl-linkedin'></i></a>
            <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-github"><i class='bx bxl-github'></i></a>
          </div>
          <p class="pt-4">
            <script>
            document.write(new Date().getFullYear())
            </script> © {{config('variables.creatorName')}}
          </p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4 mb-md-0">
          <h5>Company</h5>
          <ul class="list-unstyled">
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">About</a></li>
            <li>
              <a href="javascript:void(0)" class="footer-link d-block pb-2">Career <span class="badge bg-label-primary text-capitalize">We're hiring</span></a>
            </li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Blog</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Customers</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Hire us</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">FAQs</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
          <h5>Products</h5>
          <ul class="list-unstyled">
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Admin Template</a></li>
            <li>
              <a href="javascript:void(0)" class="footer-link d-block pb-2">UI Kit</a>
            </li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Styleguide</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">API</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Documentation</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Changelog</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <h5>Features</h5>
          <ul class="list-unstyled">
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Affiliate Program</a></li>
            <li>
              <a href="javascript:void(0)" class="footer-link d-block pb-2">Integration</a>
            </li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Support</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Special Offers</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Page Builder</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Plans & Pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</section>
<!--/ Advanced footer -->
@endsection
