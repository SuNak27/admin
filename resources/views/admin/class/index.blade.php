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
            <span class="card-label fw-bolder fs-3 mb-3">Data Kelas</span>
            <a href="#" class="btn btn-sm btn-success w-150px mb-3" data-bs-toggle="modal"
              data-bs-target="#tambah_hari">Tambah
              Data</a>
          </h3>
          <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
            </div>
            <div class="d-flex align-items-center position-relative my-1">
              <span class="svg-icon svg-icon-1 position-absolute ms-4">
                <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen004.svg-->
                <span class="svg-icon svg-icon-muted svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                      fill="currentColor" />
                    <path opacity="0.3"
                      d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                      fill="currentColor" />
                  </svg></span>
                <!--end::Svg Icon-->
              </span>
              <input type="text" data-kt-filter="search"
                class="form-control form-control-sm form-control-solid w-250px ps-14" placeholder="Cari Data" />
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
          <!--begin::Table container-->
          <div class="table-responsive">
            <!--begin::Table-->
            <table id="classes" class="table table-row-bordered gy-5">
              <thead>
                <tr class="fw-bold fs-6 text-muted">
                  <th>No.</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th class="text-center">Total Video</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($classes as $class)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->name }}</td>
                    <td>{{ $class->category->name }}</td>
                    <td class="text-center">10</td>
                    <td class="text-center d-flex justify-content-center">
                      <a href="/classlist/{{ $class->id }}" class="badge badge-primary">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen005.svg-->
                        <span class="svg-icon svg-icon-light"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                              d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                              fill="currentColor" />
                            <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                          </svg></span>
                        <!--end::Svg Icon-->
                      </a>
                      <a href="" class="badge badge-warning">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <path
                              d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                              fill="currentColor" />
                            <path opacity="0.3"
                              d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                              fill="currentColor" />
                          </svg></span>
                        <!--end::Svg Icon-->
                      </a>
                      <form action="" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure?')"
                          class="badge badge-danger border-0">
                          <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                          <span class="svg-icon svg-icon-light"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                              height="24" viewBox="0 0 24 24" fill="none">
                              <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                              <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)"
                                fill="currentColor" />
                              <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)"
                                fill="currentColor" />
                            </svg></span>
                          <!--end::Svg Icon-->
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!--end::Table-->
          </div>
          <!--end::Table container-->
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
  </div>
@endsection
