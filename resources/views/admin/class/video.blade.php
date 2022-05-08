@extends('dashboard.layouts.main')

@section('container')
  <div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-8">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Detail Video</span>
          </h3>
          <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
            <a href="#" class="btn btn-success btn-sm">Tambah</a>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3">
          <iframe width="100%" class="min-h-400px" src="{{ $video->url }}" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <div class="col-xl-4">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Test</span>
            <div class="text-muted fs-7 fw-bold">Test</div>
          </h3>
          <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
            <a href="#" class="btn btn-success btn-sm">Tambah</a>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3">

        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
  </div>
@endsection
