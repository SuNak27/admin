@extends('dashboard.layouts.main')

@section('container')
  @if (session()->has('success'))
    <div class="alert mb-5 alert-success" role="alert">
      {{ session()->get('success') }}
    </div>
  @endif
  <div class="card mb-5 mb-xl-8">
    <div class="card-header">
      <h3 class="card-title align-items-start flex-column">
        <span class="card-label fw-bolder fs-3 mb-1">Data Kelas</span>
      </h3>
      <div class="card-toolbar">

        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
          <a type="button" class="btn btn-sm btn-primary w-150px" href="/dashboard/course/create">Add New Course</a>
        </div>
      </div>
    </div>
    <div class="card-body py-3">
      <div class="table-responsive">
        <table id="example" class="table table-bordered dt-responsive nowrap" style="width:100%">
          <thead>
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0 ">
              <th class="w-100px text-center">Actions</th>
              <th class="w-100px text-center">Name</th>
              <th class="w-100px text-center">Type</th>
              <th class="w-100px text-center">Course Type</th>
              <th class="w-100px text-center">Category</th>
              <th class="w-100px text-center">Description</th>
              <th class="w-100px text-center">Total Classes</th>
            </tr>
          </thead>
          <tbody>
            @if ($courses->count() > 0)
              @foreach ($courses as $course)
                <tr>
                  <td class="text-center">
                    <a data-toggle="tooltip" data-placement="top" title="View"
                      href="/dashboard/course/{{ $course->id }}"
                      class="btn btn-icon btn-bg-light btn-active-text-primary btn-sm me-1"><span class="bi bi-file-text "
                        aria-hidden="true"></span></a>
                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                      href="/dashboard/course/{{ $course->id }}/edit"
                      class="btn btn-icon btn-bg-light btn-active-text-primary btn-sm me-1"><span class="bi bi-pencil "
                        aria-hidden="true"></span></a>
                    <form action="/dashboard/course/{{ $course->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button data-toggle="tooltip" onclick="return confirm('Are you sure?')" data-placement="top"
                        title="Delete" class="btn btn-icon btn-bg-light btn-active-text-primary btn-sm me-1"><span
                          class="bi bi-trash" aria-hidden="true"></span></button>
                    </form>
                  </td>
                  <td class="text-center">{{ $course->name }}</td>
                  <td class="text-center">{{ $course->type->name }}</td>
                  <td class="text-center">{{ $course->course_type }}</td>
                  <td class="text-center">{{ $course->category->name }}</td>
                  <td class="text-center">{{ $course->description }}</td>
                  <td class="text-center">{{ $course->class_room->count() }}</td>
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
      <!--end::Table container-->
    </div>
    <!--begin::Body-->
  </div>
@endsection
