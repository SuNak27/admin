@extends('dashboard.layouts.main')

@section('container')
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
      <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Selamat datang, {{ auth()->user()->name }}</h1>
      <p class="text-muted fw-blod">Silahkan menunggu konfirmasi admin</p>
    </div>
    <!--end::Container-->
  </div>
  <!--end::Post-->
@endsection
