@extends('dashboard.layouts.main')

@section('container')
  <div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-3">{{ $class->name }}</span>
          </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
          <h1>Test</h1>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
  </div>
@endsection
