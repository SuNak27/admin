<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/img/logo.png" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Global Stylesheets Bundle(used by all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-up -->
    <div
      class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
      style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="mb-10 text-center">
          <img src="/img/logo.png" class="img-fluid mb-2 w-100px" alt="">
          <!--begin::Title-->
          <h1 class="text-dark mb-1">Sambang Santri</h1>
          <!--end::Title-->
          <!--begin::Link-->
          <div class="text-gray-400 fw-bold fs-4">&copy; IT Center Pondok Pesantren Nurul Jadid</div>
          <!--end::Link-->
        </div>
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
              <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                type="text" placeholder="" value="{{ old('name') }}" name="name" id="name" autocomplete="off" />
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="fv-row mb-7">
              <label class="form-label fw-bolder text-dark fs-6">Username</label>
              <input class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                type="text" value="{{ old('username') }}" placeholder="" name="username" id="username"
                autocomplete="off" />
              @error('username')
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
              <input
                class="form-control form-control-lg form-control-solid @error('confirm_password') is-invalid @enderror"
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
      <!--end::Content-->
    </div>
    <!--end::Authentication - Sign-up-->
  </div>
  <!--end::Main-->
  <script>
    var hostUrl = "assets/";
  </script>
  <!--begin::Javascript-->
  <!--begin::Global Javascript Bundle(used by all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="assets/js/custom/authentication/sign-up/general.js"></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
