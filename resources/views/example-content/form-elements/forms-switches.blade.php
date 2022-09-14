@extends('layouts/layoutMaster')

@section('title', 'Switches - Forms')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Forms /</span> Switches</h4>

<div class="row">
  <!-- Default switches -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Default switches</h5>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Default</div>
            <label class="switch">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Default</span>
            </label>
          </div>
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Square</div>
            <label class="switch switch-square">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Square</span>
            </label>
          </div>
        </div>
        <div class="row gy-3 mt-3">
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Default with icon</div>
            <label class="switch">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">With icon</span>
            </label>
          </div>
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Square with icon</div>
            <label class="switch switch-square">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"><i class="bx bx-check"></i></span>
                <span class="switch-off"><i class="bx bx-x"></i></span>
              </span>
              <span class="switch-label">With icon</span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Default switches -->

  <!-- Variations -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Default Variations</h5>
      <div class="row row-bordered g-0">
        <div class="col-xl-12 p-4">
          <div class="text-light small fw-semibold">Default</div>
          <div class="demo-inline-spacing">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Primary</span>
            </label>

            <label class="switch switch-secondary">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Secondary</span>
            </label>

            <label class="switch switch-success">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Success</span>
            </label>

            <label class="switch switch-danger">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Danger</span>
            </label>

            <label class="switch switch-warning">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Warning</span>
            </label>

            <label class="switch switch-info">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Info</span>
            </label>

            <label class="switch switch-dark">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label">Dark</span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Variations -->

  <!-- Size -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Size</h5>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-sm-6">
            <div class="text-light small fw-semibold">Default</div>
            <div class="demo-vertical-spacing">
              <label class="switch switch-sm">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Small</span>
              </label>

              <br />

              <label class="switch">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Default</span>
              </label>

              <br />

              <label class="switch switch-lg">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Large</span>
              </label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-light small fw-semibold">Square</div>
            <div class="demo-vertical-spacing">
              <label class="switch switch-square switch-sm">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Small</span>
              </label>

              <br />

              <label class="switch switch-square">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Default</span>
              </label>

              <br />

              <label class="switch switch-square switch-lg">
                <input type="checkbox" class="switch-input" />
                <span class="switch-toggle-slider">
                  <span class="switch-on">
                    <i class="bx bx-check"></i>
                  </span>
                  <span class="switch-off">
                    <i class="bx bx-x"></i>
                  </span>
                </span>
                <span class="switch-label">Large</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Size -->

  <!-- States -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">States</h5>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-sm-6">
            <div class="text-light small fw-semibold">Disabled</div>
            <div class="demo-vertical-spacing">
              <label class="switch">
                <input type="checkbox" class="switch-input" disabled />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Default - OFF</span>
              </label>
              <br />
              <label class="switch">
                <input type="checkbox" class="switch-input" checked disabled />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Default - ON</span>
              </label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-light small fw-semibold">Validation states</div>
            <div class="demo-vertical-spacing">
              <label class="switch">
                <input type="checkbox" class="switch-input is-valid" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Valid</span>
              </label>
              <div class="has-error">
                <label class="switch">
                  <input type="checkbox" class="switch-input is-invalid" checked />
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">Invalid</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ States -->

  <!-- Stacked Radio -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Stacked Radio</h5>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Default</div>
            <div class="switches-stacked">
              <label class="switch">
                <input type="radio" class="switch-input" name="switches-stacked-radio" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 1</span>
              </label>

              <label class="switch">
                <input type="radio" class="switch-input" name="switches-stacked-radio" />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 2</span>
              </label>

              <label class="switch">
                <input type="radio" class="switch-input" name="switches-stacked-radio" />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 3</span>
              </label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-light small fw-semibold mb-3">Square</div>
            <div class="switches-stacked">
              <label class="switch switch-square">
                <input type="radio" class="switch-input" name="switches-square-stacked-radio" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 1</span>
              </label>

              <label class="switch switch-square">
                <input type="radio" class="switch-input" name="switches-square-stacked-radio" />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 2</span>
              </label>

              <label class="switch switch-square">
                <input type="radio" class="switch-input" name="switches-square-stacked-radio" />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Option 3</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Stacked Radio -->
</div>
@endsection
