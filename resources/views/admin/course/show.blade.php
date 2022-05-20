@extends('dashboard.layouts.main')

@section('container')
  <div class="card mb-5 mb-xl-8">
    <div class="card-header">
      <h3 class="card-title align-items-start flex-column">
        <span class="card-label fw-bolder fs-3 mb-1">Detail Kategori</span>
      </h3>
      <div class="card-toolbar">

        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
          <a type="button" class="btn btn-sm btn-primary w-150px"
            href="/dashboard/category/{{ $category->id }}/edit">Edit
            Category</a>
        </div>
      </div>
    </div>
    <div class="card-body py-3">
      <div class="d-flex align-items-sm-center mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-60px symbol-2by3 me-4">
          {{-- <div class="symbol-label" style="background-image: url('storage/category/{{ $category->thumbnail }}')">
          </div> --}}
          <img src="{{ asset('storage/' . $category->thumbnail) }}" alt="">
        </div>
        <!--end::Symbol-->
        <!--begin::Title-->
        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
          <div class="flex-grow-1 me-2">
            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">{{ $category->name }}</a>
            <span class="text-muted fw-bold d-block pt-1">{{ $category->description }}</span>
          </div>
          <span
            class="badge {{ $courses->count() > 0 ? 'badge-light-success' : 'badge-light-danger' }} fs-8 fw-bolder my-2">{{ $courses->count() > 0 ? $courses->count() : 'Belum Ada' }}
            Kelas</span>
        </div>
        <!--end::Title-->
      </div>
      <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-3 p-3">
        <div class="d-flex flex-stack">
          <div>
            <div class="fs-12 text-gray-700">Daftar Kelas {{ $category->name }}</div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table id="example" class="table table-bordered dt-responsive nowrap" style="width:100%">
          <thead>
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0 ">
              <th class="w-100px text-center ">Actions</th>
              <th class="w-100px text-center">Name</th>
              <th class="w-100px text-center">Description</th>
              <th class="w-100px text-center">Type</th>
            </tr>
          </thead>
          <tbody>
            @if ($courses->count() > 0)
              @foreach ($courses as $course)
                <tr>
                  <td class="text-center">
                    <a href="" class="btn btn-sm btn-primary">View</a>
                  </td>
                  <td class="text-center">{{ $course->name }}</td>
                  <td class="text-center">{{ $course->description }}</td>
                  <td class="text-center">{{ $course->type->name }}</td>
                </tr>
              @endforeach
            @else
              <tr>
                <td class="text-center" colspan="4">
                  <span class="fw-bold text-danger">Tidak ada data</span>
                </td>
            @endif
          </tbody>
        </table>

      </div>
      <br>
      <div class="text-center">
        <a class="btn btn-sm btn-primary" href="/dashboard/category">Go Back</a>
      </div>
      <br>
      <!--end::Table container-->
    </div>
    <!--begin::Body-->
  </div>
@endsection
