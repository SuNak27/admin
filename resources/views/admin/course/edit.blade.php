@extends('dashboard.layouts.main')

@section('container')
  <div class="card mb-5 mb-xl-8">
    <div class="card-header">
      <h3 class="card-title align-items-start flex-column">
        <span class="card-label fw-bolder fs-3 mb-1">Add New Course</span>
      </h3>

    </div>
    <form action="/dashboard/course" method="POST" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="card-body py-12">
        <div class="row justify-content-md-center">
          <div class="col-sm-6 align-content-center">
            <div class="d-flex flex-column mb-8 fv-row">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold mb-2 required">
                <span>Name</span>
              </label>
              <!--end::Label-->
              <input type="text" name="name"
                class="form-control form-control-sm bg-light-dark @error('name') is-invalid @enderror"
                value="{{ old('name', $course->name) }}" />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  {{ $message }}
                </span>
              @enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold mb-2 required">
                <span>Category</span>
              </label>
              <!--end::Label-->
              <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                <option value="">Choose Category</option>
                @foreach ($categories as $category)
                  @if (old('category_id', $course->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
              @error('category_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold mb-2 required">
                <span>Type</span>
              </label>
              <!--end::Label-->
              <select class="form-select @error('type_id') is-invalid @enderror" name="type_id">
                <option value="">Choose Type</option>
                @foreach ($types as $type)
                  @if (old('type_id', $course->type_id) == $type->id)
                    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                  @else
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endif
                @endforeach
              </select>
              @error('type_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold mb-2 required">
                <span>Thumbnail</span>
              </label>
              <!--end::Label-->
              {{-- <img class="img-preview img-fluid mb-3"> --}}
              <input type="hidden" name="oldThumbnail" value="{{ $category->thumbnail }}">
              @if ($category->thumbnail)
                <img src="{{ asset('storage/' . $category->thumbnail) }}" class="img-fluid img-preview d-block mb-3">
              @else
                <img class="img-preview img-fluid mb-3">
              @endif
              <input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="thumbnail"
                name="thumbnail" onchange="previewImage()">
              @error('thumbnail')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
              <!--begin::Label-->
              <label class="d-flex align-items-center fs-6 fw-bold mb-2 required">
                <span>Description</span>
              </label>
              <!--end::Label-->
              <textarea name="description"
                class="form-control form-control-sm bg-light-dark @error('description') is-invalid @enderror"
                rows="3" />{{ old('description') }}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  {{ $message }}
                </span>
              @enderror
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-sm btn-primary w-250px" id="btnSubmit">
                <span class="indicator-label">Save</span>
              </button>
            </div>
          </div>

        </div>
      </div>
    </form>
  </div>
  <div class="text-center">
    <a class="btn btn-sm btn-bg-success w-100px text-white" href="/dashboard/course">
      <span class="indicator-label">Go Back</span>
    </a>
  </div>

  <script>
    function previewImage() {
      const image = document.querySelector('#thumbnail');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    }
  </script>
@endsection
