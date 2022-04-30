@extends('welcome.welcome')

@section('section')
  @include('welcome.layouts.navbar')
  <div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Heading-->
      <div class="text-center mb-17">
        <!--begin::Title-->
        <h3 class="fs-2hx text-dark mb-5" id="kelas" data-kt-scroll-offset="{default: 100, lg: 150}">Daftar Kelas
          {{ $category->name }}</h3>
        <!--end::Title-->
        <!--begin::Text-->
        <div class="fs-5 text-muted fw-bold">Silahkan mengisi formulir berikut untuk mendaftar kelas
          {{ $category->name }}
        </div>
        <!--end::Text-->
      </div>
      <!--end::Heading-->
      <!--begin::Wrapper-->
      <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" action="/register" method="POST" novalidate="novalidate" id="kt_sign_up_form">
          @csrf
          <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Create an Account</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Already have an account?
              <a href="/login" class="link-primary fw-bolder">Sign
                in here</a>
            </div>
            <!--end::Link-->
          </div>
          <!--end::Input group-->
          <!--begin::Input group-->
          <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Name</label>
            <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" type="text"
              placeholder="" value="{{ old('name') }}" name="name" id="name" autocomplete="off" />
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
              type="email" placeholder="" name="email" value="{{ old('email') }}" id="email" autocomplete="off" />
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">No. Telp</label>
            <input class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
              type="text" value="{{ old('username') }}" placeholder="" name="username" id="username"
              autocomplete="off" />
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <!--end::Input group-->
          <!--begin::Input group-->
          <div class="mb-10 fv-row">
            <!--begin::Wrapper-->
            <div class="mb-1">
              <!--begin::Label-->
              <label class="form-label fw-bolder text-dark fs-6">Password</label>
              <!--end::Label-->
              <!--begin::Input wrapper-->
              <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                  type="password" placeholder="" name="password" id="password" autocomplete="off" />
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <!--end::Input wrapper-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Input group=-->
          <!--begin::Input group-->
          <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
            <input class="form-control form-control-lg form-control-solid @error('confirm_password') is-invalid @enderror"
              type="password" placeholder="" name="confirm_password" id="confirm_password" autocomplete="off" />
            @error('confirm_password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <!--end::Input group-->
          <!--begin::Actions-->
          <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary"> Create Account </button>
          </div>
          <!--end::Actions-->
        </form>
        <!--end::Form-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::How It Works Section-->
@endsection
