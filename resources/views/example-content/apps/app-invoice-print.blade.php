@extends('layouts/layoutMaster')

@section('title', 'Invoice (Print version) - Pages')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-invoice-print.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-invoice-print.js')}}"></script>
@endsection

@section('content')
<div class="invoice-print p-5">

  <div class="d-flex justify-content-between flex-row">
    <div class="mb-4">
      <div class="d-flex svg-illustration mb-3 gap-2">
        @include('_partials.macros')
        <span class="app-brand-text h3 mb-0 fw-bold">
          {{ config('variables.templateName') }}
        </span>
      </div>
      <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
      <p class="mb-1">San Diego County, CA 91905, USA</p>
      <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
    </div>
    <div>
      <h4>Invoice #3492</h4>
      <div class="mb-2">
        <span>Date Issues:</span>
        <span class="fw-semibold">April 25, 2021</span>
      </div>
      <div>
        <span>Date Due:</span>
        <span class="fw-semibold">May 25, 2021</span>
      </div>
    </div>
  </div>

  <hr />

  <div class="row d-flex justify-content-between mb-4">
    <div class="col-sm-6 w-50">
      <h6>Invoice To:</h6>
      <p class="mb-1">Thomas shelby</p>
      <p class="mb-1">Shelby Company Limited</p>
      <p class="mb-1">Small Heath, B10 0HF, UK</p>
      <p class="mb-1">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 w-50">
      <h6>Bill To:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pe-3">Total Due:</td>
            <td>$12,110.55</td>
          </tr>
          <tr>
            <td class="pe-3">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pe-3">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pe-3">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pe-3">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table border-top m-0">
      <thead>
        <tr>
          <th>Item</th>
          <th>Description</th>
          <th>Cost</th>
          <th>Qty</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vuexy Admin Template</td>
          <td>HTML Admin Template</td>
          <td>$32</td>
          <td>1</td>
          <td>$32.00</td>
        </tr>
        <tr>
          <td>Frest Admin Template</td>
          <td>Angular Admin Template</td>
          <td>$22</td>
          <td>1</td>
          <td>$22.00</td>
        </tr>
        <tr>
          <td>Apex Admin Template</td>
          <td>HTML Admin Template</td>
          <td>$17</td>
          <td>2</td>
          <td>$34.00</td>
        </tr>
        <tr>
          <td>Robust Admin Template</td>
          <td>React Admin Template</td>
          <td>$66</td>
          <td>1</td>
          <td>$66.00</td>
        </tr>
        <tr>
          <td colspan="3" class="align-top px-4 py-3">
            <p class="mb-2">
              <span class="me-1 fw-bold">Salesperson:</span>
              <span>Alfie Solomons</span>
            </p>
            <span>Thanks for your business</span>
          </td>
          <td class="text-end px-4 py-3">
            <p class="mb-2">Subtotal:</p>
            <p class="mb-2">Discount:</p>
            <p class="mb-2">Tax:</p>
            <p class="mb-0">Total:</p>
          </td>
          <td class="px-4 py-3">
            <p class="fw-semibold mb-2">$154.25</p>
            <p class="fw-semibold mb-2">$00.00</p>
            <p class="fw-semibold mb-2">$50.00</p>
            <p class="fw-semibold mb-0">$204.25</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row">
    <div class="col-12">
      <span class="fw-semibold">Note:</span>
      <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future
        freelance projects. Thank You!</span>
    </div>
  </div>
</div>
@endsection
