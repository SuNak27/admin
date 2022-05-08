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
            <span class="card-label fw-bolder fs-3 mb-1">{{ $class->name }}</span>
            <div class="text-muted fs-7 fw-bold">{{ $class->description }}</div>
          </h3>
          <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
            <a href="#" class="btn btn-success btn-sm">Tambah</a>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3">
          <!--begin::Table container-->
          <div class="table-responsive">
            <!--begin::Table-->
            <table id="videos" class="table table-row-bordered gy-5">
              <thead>
                <tr class="fw-bold fs-6 text-muted">
                  <th>No.</th>
                  <th>Title</th>
                  <th class="min-w-200px w-350px">Description</th>
                  <th class="text-center">URL</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($class->videos as $video)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $video->title }}</td>
                    <td>{{ $video->description }}</td>
                    <td>{{ $video->url }}</td>
                    <td class="text-center d-flex justify-content-center">
                      <a href="/dashboard/class_room/video/{{ $video->id }}" class="badge badge-primary">
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
  </div>
@endsection
