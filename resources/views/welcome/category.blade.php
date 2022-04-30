@extends('welcome.welcome')

@section('section')
  @include('welcome.layouts.navbar')
  <div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Heading-->
      <div class="text-center mb-17">
        <!--begin::Title-->
        <h3 class="fs-2hx text-dark mb-5" id="kelas" data-kt-scroll-offset="{default: 100, lg: 150}">
          <span class="text-dark-50">Kelas</span>
          <span class="text-dark-50 font-weight-bold">{{ $category->name }}</span>
        </h3>
        <!--end::Title-->
        <!--begin::Text-->
        <div class="fs-5 text-muted fw-bold">
          {{ $category->description }}
        </div>
        <!--end::Text-->
      </div>
      <!--end::Heading-->
      <div class="row">
        <div class="col-md-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/NBZ9Ro6UKV8" title="YouTube video player"
            frameborder="4" class="p-4"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/LkR-9Z1sle8" title="YouTube video player"
            frameborder="0" class="p-4"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!--end::Container-->
  </div>
  <!--end::How It Works Section-->
@endsection
