@extends('layouts/layoutMaster')

@section('title', 'Carousel - UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/ui-carousel.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-carousel.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4>

<div class="row">
  <!-- Bootstrap carousel -->
  <div class="col-md">
    <h5 class="my-4">Bootstrap carousel</h5>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/elements/13.jpg')}}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>First slide</h3>
            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/2.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/18.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
  <!-- Bootstrap crossfade carousel -->
  <div class="col-md">
    <h5 class="my-4">Bootstrap crossfade carousel (dark)</h5>

    <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/elements/18.jpg')}}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>First slide</h3>
            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/13.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/2.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>

<hr class="container-m-nx border-light mt-5" />

<h5 class="my-4">Swiper</h5>
<div class="row">
  <!-- Default -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">Default</h6>
    <div class="swiper-container" id="swiper-default">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 5</div>
      </div>
    </div>
  </div>
  <!-- With arrows -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">With arrows</h6>
    <div class="swiper-container" id="swiper-with-arrows">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-button-next swiper-button-white custom-icon">
      </div>
      <div class="swiper-button-prev swiper-button-white custom-icon">
      </div>
    </div>
  </div>
  <!-- With pagination -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">With pagination</h6>
    <div class="swiper-container" id="swiper-with-pagination">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- With progress -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">With progress</h6>
    <div class="swiper-container" id="swiper-with-progress">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next swiper-button-white custom-icon">
      </div>
      <div class="swiper-button-prev swiper-button-white custom-icon">
      </div>
    </div>
  </div>

  <!-- With scrollbar -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">With scrollbar</h6>
    <div class="swiper-container" id="swiper-with-scrollbar">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-scrollbar"></div>
    </div>
  </div>

  <!-- Vertical -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">Vertical</h6>
    <div class="swiper-container" id="swiper-vertical">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/11.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/1.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/5.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/12.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Multiple slides -->
  <div class="col-12 mb-4">
    <h6 class="text-muted mt-3">Multiple slides</h6>
    <div class="swiper-container" id="swiper-multiple-slides">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/13.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/19.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/18.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/20.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- 3D coverflow effect -->
  <div class="col-12 mb-4">
    <h6 class="text-muted mt-3">3D coverflow effect</h6>
    <div class="swiper-container" id="swiper-3d-coverflow-effect">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/20.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/13.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/19.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/18.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- 3D cube effect -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">3D cube effect</h6>
    <div class="swiper-container" id="swiper-3d-cube-effect">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/18.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/20.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/13.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/19.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- 3D flip effect -->
  <div class="col-md-6 mb-4">
    <h6 class="text-muted mt-3">3D flip effect</h6>
    <div class="swiper-container" id="swiper-3d-flip-effect">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/19.jpg')}})">Slide 1</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/18.jpg')}})">Slide 2</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/20.jpg')}})">Slide 3</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/7.jpg')}})">Slide 4</div>
        <div class="swiper-slide" style="background-image:url({{asset('assets/img/elements/13.jpg')}})">Slide 5</div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next swiper-button-black custom-icon">
      </div>
      <div class="swiper-button-prev swiper-button-black custom-icon">
      </div>
    </div>
  </div>

  <!-- Gallery effect-->
  <div class="col-12">
    <h6 class="text-muted mt-3">Thumbs Gallery</h6>
    <div id="swiper-gallery">
      <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/5.jpg')}})">Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/7.jpg')}})">Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/10.jpg')}})">Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/16.jpg')}})">Slide 5</div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
      </div>
      <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/5.jpg')}})">Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/7.jpg')}})">Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/10.jpg')}})">Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/16.jpg')}})">Slide 5</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
