@extends('layouts/layoutMaster')

@section('title', 'Article - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-help-center.css')}}" />
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Help Center /</span> Article
</h4>

<div class="row">
  <!-- Categories -->
  <div class="col-xl-3 col-lg-4 col-md-4 mb-lg-0 mb-4">
    <h5>eCommerce</h5>
    <div class="nav-align-left">
      <ul class="nav nav-tabs nav-pills border-0 w-100 gap-1">
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Setup</button>
        </li>
        <li class="nav-item">
          <button class="nav-link active" data-bs-target="javascript:void(0);">Items & Categories</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Payments & Checkout</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Fulfillment</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Manage Orders</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Coupons & Other Gifts</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Store Emails</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Taxes</button>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Categories -->

  <!-- Article -->
  <div class="col-xl-9 col-lg-8 col-md-8">
    <div class="card overflow-hidden">
      <div class="card-body">
        <a class="btn btn-label-primary mb-4" href="{{url('pages/help-center-categories')}}">
          <i class="bx bx-chevron-left bx-sm scaleX-n1-rtl"></i>
          <span>Back</span>
        </a>
        <h4 class="d-flex align-items-center mt-2 mb-4">
          <span class="badge bg-label-secondary p-2 rounded me-3">
            <i class="bx bx-dollar bx-sm"></i>
          </span>
          Pricing Wizard
        </h4>
        <p>
          In a professional context it often happens that private or corporate clients corder a publication to be made
          and presented with the actual content still not being ready. Think of a news blog that's filled with content
          hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a
          random text copied from a
          newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements.
        </p>
        <p>
          Most of its text is made up from sections 1.10.32–3 of Cicero's De finibus bonorum et malorum (On the
          Boundaries of Goods and Evils; finibus may also be translated as purposes). Neque porro quisquam est qui
          dolorem ipsum quia
          dolor sit amet, consectetur, adipisci velit is the first known version ("Neither is there anyone who loves
          grief itself since it
          is grief and thus wants to obtain it"). It was found by Richard McClintock, a philologist, director of
          publications at Hampden-Sydney College in Virginia; he
          searched for citings of consectetur in classical Latin literature, a term of remarkably low frequency in that
          literary corpus.
        </p>
        <p>
          Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration
          against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu
          etiam furor iste
          tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of
          yours mock us?)
        </p>
        <div class="d-flex justify-content-between flex-wrap gap-3 my-4">
          <div class="article-info">
            <h6 class="mb-1">Did you find this article helpful?</h6>
            <p class="card-text">55 People found this helpful</p>
          </div>
          <h6>Still need help? <a href="javascript:void(0);">Contact us?</a></h6>
        </div>
        <div class="article-votes">
          <a href="javascript:void(0);" class="badge bg-label-primary me-2 p-2"><i class="bx bx-like"></i></a>
          <a href="javascript:void(0);" class="badge bg-label-primary p-2"><i class="bx bx-dislike"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Article -->
</div>
@endsection
