@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}">
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">UI elements /</span> Modals
</h4>

<!-- Bootstrap modals -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap modals</h5>
  <div class="card-body">
    <div class="row gy-3">
      <!-- Default Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Default</small>
        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">Name</label>
                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBasic" class="form-label">Email</label>
                      <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobBasic" class="form-label">DOB</label>
                      <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Vertically Centered Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Vertically centered</small>
        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Name</label>
                      <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Email</label>
                      <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">DOB</label>
                      <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide from Top Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Slide from Top</small>
        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal modal-top fade" id="modalTop" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameSlideTop" class="form-label">Name</label>
                      <input type="text" id="nameSlideTop" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailSlideTop" class="form-label">Email</label>
                      <input type="text" id="emailSlideTop" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobSlideTop" class="form-label">DOB</label>
                      <input type="text" id="dobSlideTop" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="m-0">
  <div class="card-body">
    <div class="row gy-3">
      <!-- Modal with YouTube Video -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">YouTube Video</small>
        <div class="mt-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#youTubeModal" data-theVideo="https://www.youtube.com/embed/EngW7tLk6R8">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="youTubeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <iframe height="350" src="https://www.youtube.com/embed/EngW7tLk6R8"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Toggle Between Modals -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Toggle Between Modals</small>
        <div class="mt-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">
            Launch modal
          </button>

          <!-- Modal 1-->
          <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalToggleLabel">Modal 1</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Show a second modal and hide this one with the button below.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 2-->
          <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalToggleLabel2">Modal 2</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fullscreen Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Fullscreen</small>
        <div class="mt-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalFullTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="m-0">
  <div class="card-body">
    <div class="row gy-3">
      <!-- Modal Sizes -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Sizes</small>
        <!-- Small Modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameSmall" class="form-label">Name</label>
                    <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label class="form-label" for="emailSmall">Email</label>
                    <input type="text" class="form-control" id="emailSmall" placeholder="xxxx@xxx.xx">
                  </div>
                  <div class="col mb-0">
                    <label for="dobSmall" class="form-label">DOB</label>
                    <input id="dobSmall" type="text" class="form-control" placeholder="DD / MM / YY">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Large Modal -->
        <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameLarge" class="form-label">Name</label>
                    <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label for="emailLarge" class="form-label">Email</label>
                    <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx">
                  </div>
                  <div class="col mb-0">
                    <label for="dobLarge" class="form-label">DOB</label>
                    <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Extra Large Modal -->
        <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameExLarge" class="form-label">Name</label>
                    <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label for="emailExLarge" class="form-label">Email</label>
                    <input type="text" id="emailExLarge" class="form-control" placeholder="xxxx@xxx.xx">
                  </div>
                  <div class="col mb-0">
                    <label for="dobExLarge" class="form-label">DOB</label>
                    <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="demo-inline-spacing">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
            Small
          </button>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Large
          </button>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
            Extra Large
          </button>
        </div>
      </div>

      <!-- Modal Scroll long content -->
      <div class="col-lg-4 col-md-3">
        <small class="text-light fw-semibold">Scrolling long content</small>
        <!-- Modal -->
        <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLongTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                  laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="demo-inline-spacing">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLong">
            Option 1
          </button>

          <!-- Button ModalScrollable -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
            Option 2
          </button>
        </div>
      </div>

      <!-- Modal Backdrop -->
      <div class="col-lg-4 col-md-3">
        <small class="text-light fw-semibold">Backdrop</small>
        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="backDropModalTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Name</label>
                      <input type="text" id="nameBackdrop" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBackdrop" class="form-label">Email</label>
                      <input type="text" id="emailBackdrop" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobBackdrop" class="form-label">DOB</label>
                      <input type="text" id="dobBackdrop" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap modals -->

<!-- Animation -->
<div class="card mb-4">
  <h5 class="card-header">Animation</h5>
  <div class="card-body">
    <!-- Modal Animation with options -->
    <small class="text-light fw-semibold">Animation Options</small>
    <div class="d-flex mt-3">
      <select class="form-select animation-dropdown me-2 w-25" id="animation-dropdown">
        <optgroup label="Attention Seekers">
          <option value="animate__fade">fade</option>
          <option value="animate__bounce">bounce</option>
          <option value="animate__flash">flash</option>
          <option value="animate__pulse">pulse</option>
          <option value="animate__rubberBand">rubberBand</option>
          <option value="animate__shakeX">shake</option>
          <option value="animate__swing">swing</option>
          <option value="animate__tada">tada</option>
          <option value="animate__wobble">wobble</option>
          <option value="animate__jello">jello</option>
          <option value="animate__heartBeat">heartBeat</option>
        </optgroup>

        <optgroup label="Bouncing Entrances">
          <option value="animate__bounceIn">bounceIn</option>
          <option value="animate__bounceInDown">bounceInDown</option>
          <option value="animate__bounceInLeft">bounceInLeft</option>
          <option value="animate__bounceInRight">bounceInRight</option>
          <option value="animate__bounceInUp">bounceInUp</option>
        </optgroup>

        <optgroup label="Fading Entrances">
          <option value="animate__fadeIn" selected>fadeIn</option>
          <option value="animate__fadeInDown">fadeInDown</option>
          <option value="animate__fadeInDownBig">fadeInDownBig</option>
          <option value="animate__fadeInLeft">fadeInLeft</option>
          <option value="animate__fadeInLeftBig">fadeInLeftBig</option>
          <option value="animate__fadeInRight">fadeInRight</option>
          <option value="animate__fadeInRightBig">fadeInRightBig</option>
          <option value="animate__fadeInUp">fadeInUp</option>
          <option value="animate__fadeInUpBig">fadeInUpBig</option>
        </optgroup>

        <optgroup label="Flippers">
          <option value="animate__flip">flip</option>
          <option value="animate__flipInX">flipInX</option>
          <option value="animate__flipInY">flipInY</option>
        </optgroup>

        <optgroup label="Lightspeed">
          <option value="animate__lightSpeedInRight">lightSpeedIn</option>
        </optgroup>

        <optgroup label="Rotating Entrances">
          <option value="animate__rotateIn">rotateIn</option>
          <option value="animate__rotateInDownLeft">rotateInDownLeft</option>
          <option value="animate__rotateInDownRight">rotateInDownRight</option>
          <option value="animate__rotateInUpLeft">rotateInUpLeft</option>
          <option value="animate__rotateInUpRight">rotateInUpRight</option>
        </optgroup>

        <optgroup label="Sliding Entrances">
          <option value="animate__slideInUp">slideInUp</option>
          <option value="animate__slideInDown">slideInDown</option>
          <option value="animate__slideInLeft">slideInLeft</option>
          <option value="animate__slideInRight">slideInRight</option>
        </optgroup>

        <optgroup label="Zoom Entrances">
          <option value="animate__zoomIn">zoomIn</option>
          <option value="animate__zoomInDown">zoomInDown</option>
          <option value="animate__zoomInLeft">zoomInLeft</option>
          <option value="animate__zoomInRight">zoomInRight</option>
          <option value="animate__zoomInUp">zoomInUp</option>
        </optgroup>

        <optgroup label="Specials">
          <option value="animate__jackInTheBox">jackInTheBox</option>
          <option value="animate__rollIn">rollIn</option>
        </optgroup>
      </select>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#animationModal">
        Launch modal
      </button>

      <!-- Modal -->
      <div class="modal fade animate__animated fadeIn" id="animationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel5">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameAnimation" class="form-label">Name</label>
                  <input type="text" id="nameAnimation" class="form-control" placeholder="Enter Name">
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailAnimation" class="form-label">Email</label>
                  <input type="text" id="emailAnimation" class="form-control" placeholder="xxxx@xxx.xx">
                </div>
                <div class="col mb-0">
                  <label for="dobAnimation" class="form-label">DOB</label>
                  <input type="text" id="dobAnimation" class="form-control" placeholder="DD / MM / YY">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Animation -->

<!-- Extended Modals -->
<div class="card">
  <h5 class="card-header">Extended Modals</h5>
  <div class="card-body">
    <div class="row gy-3">
      <!-- Onboarding modals -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Onboarding Modals</small>
        <!-- slider modal -->
        <div class="modal-onboarding modal fade animate__animated" id="onboardingSlideModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
              <div class="modal-header">
                <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div id="modalCarouselControls" class="carousel slide pb-4 mb-2" data-bs-interval="false">
                <ol class="carousel-indicators">
                  <li data-bs-target="#modalCarouselControls" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#modalCarouselControls" data-bs-slide-to="1"></li>
                  <li data-bs-target="#modalCarouselControls" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="onboarding-media">
                      <div class="mx-2">
                        <img src="{{asset('assets/img/illustrations/girl-with-laptop-'.$configData['style'].'.png')}}" alt="girl-with-laptop-light" width="335" class="img-fluid" data-app-light-img="illustrations/girl-with-laptop-light.png" data-app-dark-img="illustrations/girl-with-laptop-dark.png">
                      </div>
                    </div>
                    <div class="onboarding-content">
                      <h4 class="onboarding-title text-body">Example Request Information</h4>
                      <!-- <div class="onboarding-info">In this example you can see a form where you can request some
                      additional information from the customer when they land on the app page.</div> -->
                      <form>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="nameEx" class="form-label">Your Full Name</label>
                              <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="roleEx" class="form-label">Your Role</label>
                              <select class="form-select" tabindex="0" id="roleEx">
                                <option>Web Developer</option>
                                <option>Business Owner</option>
                                <option>Other</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="onboarding-media">
                      <div class="mx-2">
                        <img src="{{asset('assets/img/illustrations/boy-with-laptop-'.$configData['style'].'.png')}}" alt="boy-with-laptop-light" width="300" class="img-fluid" data-app-light-img="illustrations/boy-with-laptop-light.png" data-app-dark-img="illustrations/boy-with-laptop-dark.png">
                      </div>
                    </div>
                    <div class="onboarding-content">
                      <h4 class="onboarding-title text-body">Example Request Information</h4>
                      <div class="onboarding-info">In this example you can see a form where you can request some
                        additional information from the customer when they land on the app page.</div>
                      <form>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="nameEx1" class="form-label">Your Full Name</label>
                              <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx1">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="roleEx1" class="form-label">Your Role</label>
                              <select class="form-select" tabindex="0" id="roleEx1">
                                <option>Web Developer</option>
                                <option>Business Owner</option>
                                <option>Other</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="onboarding-media">
                      <div class="mx-2">
                        <img src="{{asset('assets/img/illustrations/girl-verify-password-'.$configData['style'].'.png')}}" alt="girl-verify-password-light" width="300" class="img-fluid" data-app-light-img="illustrations/girl-verify-password-light.png" data-app-dark-img="illustrations/girl-verify-password-dark.png">
                      </div>
                    </div>
                    <div class="onboarding-content">
                      <h4 class="onboarding-title text-body">Example Request Information</h4>
                      <div class="onboarding-info">In this example you can see a form where you can request some
                        additional information from the customer when they land on the app page.</div>
                      <form>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="nameEx2" class="form-label">Your Full Name</label>
                              <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx2">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="roleEx2" class="form-label">Your Role</label>
                              <select class="form-select" tabindex="0" id="roleEx2">
                                <option>Web Developer</option>
                                <option>Business Owner</option>
                                <option>Other</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#modalCarouselControls" role="button" data-bs-slide="prev">
                  <i class="bx bx-chevrons-left lh-1"></i><span>Previous</span>
                </a>
                <a class="carousel-control-next" href="#modalCarouselControls" role="button" data-bs-slide="next">
                  <span>Next</span><i class="bx bx-chevrons-right lh-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ slider modal -->

        <!-- Form with Image Modal -->
        <div class="modal-onboarding modal fade animate__animated" id="onboardImageModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
              <div class="modal-header">
                <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body p-0">
                <div class="onboarding-media">
                  <div class="mx-2">
                    <img src="{{asset('assets/img/illustrations/girl-unlock-password-'.$configData['style'].'.png')}}" alt="girl-unlock-password-light" width="335" class="img-fluid" data-app-light-img="illustrations/girl-unlock-password-light.png" data-app-dark-img="illustrations/girl-unlock-password-dark.png">
                  </div>
                </div>
                <div class="onboarding-content mb-0">
                  <h4 class="onboarding-title text-body">Example Request Information</h4>
                  <div class="onboarding-info">In this example you can see a form where you can request some additional
                    information from the customer when they land on the app page.</div>
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label for="nameEx3" class="form-label">Your Full Name</label>
                          <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx3">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label for="roleEx3" class="form-label">Your Role</label>
                          <select class="form-select" tabindex="0" id="roleEx3">
                            <option>Web Developer</option>
                            <option>Business Owner</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!--/ Form with Image Modal -->
        <div class="demo-inline-spacing">
          <!-- slider modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onboardingSlideModal">Multistep
            Slider modal</button>
          <!--/ slider modal -->

          <!-- Form with Image Modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onboardImageModal">
            Modal with form
          </button>
          <!--/ Form with Image Modal -->
        </div>
      </div>
      <!-- Horizontal Onboarding modals -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Horizontal Onboarding Modals</small>
        <!-- horizontal slider modal -->
        <div class="modal-onboarding modal fade animate__animated" id="onboardingHorizontalSlideModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content text-center">
              <div class="modal-header">
                <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div id="modalHorizontalCarouselControls" class="carousel slide pb-4 mb-2" data-bs-interval="false">
                <ol class="carousel-indicators">
                  <li data-bs-target="#modalHorizontalCarouselControls" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#modalHorizontalCarouselControls" data-bs-slide-to="1"></li>
                  <li data-bs-target="#modalHorizontalCarouselControls" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="onboarding-horizontal">
                      <div class="onboarding-media">
                        <img src="{{asset('assets/img/illustrations/boy-with-rocket-'.$configData['style'].'.png')}}" alt="boy-with-rocket-light" width="273" class="img-fluid" data-app-light-img="illustrations/boy-with-rocket-light.png" data-app-dark-img="illustrations/boy-with-rocket-dark.png">
                      </div>
                      <div class="onboarding-content">
                        <h4 class="onboarding-title text-body">Example Request Information</h4>
                        <div class="onboarding-info">In this example you can see a form where you can request some
                          additional information from the customer when they land on the app page.</div>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="nameEx4" class="form-label">Your Full Name</label>
                                <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx4">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="roleEx4" class="form-label">Your Role</label>
                                <select class="form-select" tabindex="0" id="roleEx4">
                                  <option>Web Developer</option>
                                  <option>Business Owner</option>
                                  <option>Other</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="onboarding-horizontal">
                      <div class="onboarding-media">
                        <img src="{{asset('assets/img/illustrations/girl-doing-yoga-'.$configData['style'].'.png')}}" alt="boy-with-rocket-light" width="273" class="img-fluid" data-app-light-img="illustrations/girl-doing-yoga-light.png" data-app-dark-img="illustrations/girl-doing-yoga-dark.png">
                      </div>
                      <div class="onboarding-content">
                        <h4 class="onboarding-title text-body">Example Request Information</h4>
                        <div class="onboarding-info">In this example you can see a form where you can request some
                          additional information from the customer when they land on the app page.</div>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="nameEx5" class="form-label">Your Full Name</label>
                                <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx5">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="roleEx5" class="form-label">Your Role</label>
                                <select class="form-select" tabindex="0" id="roleEx5">
                                  <option>Web Developer</option>
                                  <option>Business Owner</option>
                                  <option>Other</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="onboarding-horizontal">
                      <div class="onboarding-media">
                        <img src="{{asset('assets/img/illustrations/boy-with-laptop-'.$configData['style'].'.png')}}" alt="boy-with-laptop-light" width="273" class="img-fluid" data-app-light-img="illustrations/boy-with-laptop-light.png" data-app-dark-img="illustrations/boy-with-laptop-dark.png">
                      </div>
                      <div class="onboarding-content">
                        <h4 class="onboarding-title text-body">Example Request Information</h4>
                        <div class="onboarding-info">In this example you can see a form where you can request some
                          additional information from the customer when they land on the app page.</div>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="nameEx6" class="form-label">Your Full Name</label>
                                <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx6">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="mb-3">
                                <label for="roleEx6" class="form-label">Your Role</label>
                                <select class="form-select" tabindex="0" id="roleEx6">
                                  <option>Web Developer</option>
                                  <option>Business Owner</option>
                                  <option>Other</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#modalHorizontalCarouselControls" role="button" data-bs-slide="prev">
                  <i class="bx bx-chevrons-left lh-1"></i><span>Previous</span>
                </a>
                <a class="carousel-control-next" href="#modalHorizontalCarouselControls" role="button" data-bs-slide="next">
                  <span>Next</span><i class="bx bx-chevrons-right lh-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ horizontal slider modal -->

        <!-- Form with Image horizontal Modal -->
        <div class="modal-onboarding modal fade animate__animated" id="onboardHorizontalImageModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content text-center">
              <div class="modal-header">
                <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body onboarding-horizontal p-0">
                <div class="onboarding-media">
                  <img src="{{asset('assets/img/illustrations/boy-verify-email-'.$configData['style'].'.png')}}" alt="boy-verify-email-light" width="273" class="img-fluid" data-app-light-img="illustrations/boy-verify-email-light.png" data-app-dark-img="illustrations/boy-verify-email-dark.png">
                </div>
                <div class="onboarding-content mb-0">
                  <h4 class="onboarding-title text-body">Example Request Information</h4>
                  <div class="onboarding-info">In this example you can see a form where you can request some additional
                    information from the customer when they land on the app page.</div>
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label for="nameEx7" class="form-label">Your Full Name</label>
                          <input class="form-control" placeholder="Enter your full name..." type="text" value="" tabindex="0" id="nameEx7">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <label for="roleEx7" class="form-label">Your Role</label>
                          <select class="form-select" tabindex="0" id="roleEx7">
                            <option>Web Developer</option>
                            <option>Business Owner</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!--/ Form with Image horizontal Modal -->
        <div class="demo-inline-spacing">
          <!-- horizontal slider modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onboardingHorizontalSlideModal">Multistep Slider modal</button>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onboardHorizontalImageModal">
            Modal with form
          </button>
        </div>
      </div>

      <!-- Transparent Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Transparent Modal</small>
        <div class="mt-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modals-transparent">Show</button>

          <!-- Modal template -->
          <div class="modal modal-transparent fade" id="modals-transparent" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <a href="javascript:void(0);" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></a>
                  <p class="text-white text-large fw-light mb-3">Subscribe to get latest updates</p>
                  <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control bg-white border-0" placeholder="Your email" aria-describedby="subscribe">
                    <button class="btn btn-primary" type="button" id="subscribe">Subscribe</button>
                  </div>
                  <div class="text-start text-white opacity-50">We won't share your email address</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Extended Modals -->
@endsection
