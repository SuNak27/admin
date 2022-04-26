<!DOCTYPE html>
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
    <!--begin::Authentication - Sign-in -->
    <div
      class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
      style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <div class="mb-10 text-center">
          <img src="/img/logo.png" class="img-fluid mb-2 w-100px" alt="">
          <!--begin::Title-->
          <h1 class="text-dark mb-1">Sambang Santri</h1>
          <!--end::Title-->
          <!--begin::Link-->
          <div class="text-gray-400 fw-bold fs-4">&copy; IT Center Pondok Pesantren Nurul Jadid</div>
          <!--end::Link-->
        </div>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
          <!--begin::Form-->
          <form class="form w-100" novalidate="novalidate" action="/login" method="POST">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
              <!--begin::Title-->
              <h1 class="text-dark mb-3">Sign In</h1>
              <!--end::Title-->
              <!--begin::Link-->
              <div class="text-gray-400 fw-bold fs-4">New Here?
                <a href="/register" class="link-primary fw-bolder">Create
                  an Account</a>
              </div>
              <!--end::Link-->
            </div>
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Label-->
              <label class="form-label fs-6 fw-bolder text-dark">Email</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                type="email" id="email" value="{{ old('email') }}" autofocus name="email" />
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <!--end::Label-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                type="password" name="password" autocomplete="off" id="password" />
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
              <!--begin::Submit button-->
              <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">Sign In</button>
              <!--end::Submit button-->
            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Authentication - Sign-in-->
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
  <script src="assets/js/custom/authentication/sign-in/general.js"></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
