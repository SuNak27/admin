<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
  <!--begin::Container-->
  <div class="container">
    <!--begin::Heading-->
    <div class="text-center mb-17">
      <!--begin::Title-->
      <h3 class="fs-2hx text-dark mb-5" id="kelas" data-kt-scroll-offset="{default: 100, lg: 150}">Kelas Pilihan</h3>
      <!--end::Title-->
      <!--begin::Text-->
      <div class="fs-5 text-muted fw-bold">Berbagai kelas yang tersedia untuk Anda mulai belajar
        <br />dengan kami.
      </div>
      <!--end::Text-->
    </div>
    <!--end::Heading-->
    <!--begin::Row-->
    <div class="row w-100 justify-content-center gy-10 mb-md-20">
      @foreach ($categories as $category)
        <!--begin::Col-->
        <a href="/category-{{ $category->id }}" class="col-md-4 px-5">
          <!--begin::Story-->
          <div class="text-center mb-10 mb-md-0">
            <!--begin::Illustration-->
            <img src="{{ $category->thumbnail }}" class="mh-125px mb-9" alt="" />
            <!--end::Illustration-->
            <!--begin::Heading-->
            <div class="d-flex flex-center mb-5">
              <!--begin::Badge-->
              <span
                class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">{{ $loop->iteration }}</span>
              <!--end::Badge-->
              <!--begin::Title-->
              <div class="fs-5 fs-lg-3 fw-bolder text-dark">{{ $category->name }}</div>
              <!--end::Title-->
            </div>
            <!--end::Heading-->
            <!--begin::Description-->
            <div class="fw-bold fs-6 fs-lg-4 text-muted">
              {{ $category->description }}
            </div>
            <!--end::Description-->
          </div>
          <!--end::Story-->
        </a>
        <!--end::Col-->
      @endforeach
    </div>
    <!--end::Row-->
  </div>
  <!--end::Container-->
</div>
<!--end::How It Works Section-->
