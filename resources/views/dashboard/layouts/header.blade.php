<!--begin::Header-->
<div id="kt_header" class="header align-items-stretch">
  <!--begin::Container-->
  <div class="container-fluid d-flex align-items-stretch justify-content-between">
    <!--begin::Aside mobile toggle-->
    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
      <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
        <span class="svg-icon svg-icon-2x mt-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
              fill="black" />
            <path opacity="0.3"
              d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
              fill="black" />
          </svg>
        </span>
        <!--end::Svg Icon-->
      </div>
    </div>
    <!--end::Aside mobile toggle-->
    <!--begin::Mobile logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
      <a href="" class="d-lg-none">
        <img alt="Logo" src="" class="h-30px" />
      </a>
    </div>
    <!--end::Mobile logo-->
    <!--begin::Wrapper-->
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
      <!--begin::Navbar-->
      <div class="d-flex align-items-stretch" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
          data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
          data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
          data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
          <!--begin::Menu-->
          <div
            class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
            id="#kt_header_menu" data-kt-menu="true">
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
      </div>
      <!--end::Navbar-->
      <!--begin::Topbar-->
      <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::Toolbar wrapper-->
        <div class="d-flex align-items-stretch flex-shrink-0">
          <!--begin::User-->
          <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
              data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
              @if (auth()->user()->image)
                <img src="{{ auth()->user()->image }}" alt="user" />
              @else
                <img src="/img/logo.png" alt="user" />
              @endif
            </div>
            <!--begin::Menu-->
            <div
              class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
              data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-50px me-5">
                    @if (auth()->user()->image)
                      <img src="{{ auth()->user()->image }}" alt="Logo" />
                    @else
                      <img alt="Logo" src="/img/logo.png" />
                    @endif
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Username-->
                  <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">
                      {{ auth()->user()->username }}
                      @if (auth()->user()->is_admin == '1')
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Admin</span>
                      @else
                        <span class="badge badge-light-primary fw-bolder fs-8 px-2 py-1 ms-2">User</span>
                      @endif
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->name }}</a>
                  </div>
                  <!--end::Username-->
                </div>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu separator-->
              <div class="separator my-2"></div>
              <!--end::Menu separator-->
              <!--begin::Menu item-->
              <div class="menu-item px-5">
                <form action="/logout" method="POST">
                  @csrf
                  <a onclick="this.parentNode.submit();" class="menu-link px-5">
                    <span class="menu-icon">
                      <i class="bi bi-box-arrow-right"></i>
                    </span>
                    <span class="menu-title">Logout</span>
                  </a>
                </form>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
            <!--end::Menu wrapper-->
          </div>
          <!--end::User -->
        </div>
        <!--end::Toolbar wrapper-->
      </div>
      <!--end::Topbar-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Container-->
</div>
<!--end::Header-->
