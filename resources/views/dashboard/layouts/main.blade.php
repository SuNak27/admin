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
  <base href="">
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="/img/logo.png" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Global Stylesheets Bundle(used by all pages)-->
  <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
  <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
  <!--begin::Main-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      @include('dashboard.layouts.aside')
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('dashboard.layouts.header')
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Post-->
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
              @yield('container')
            </div>
          </div>
        </div>
        <!--end::Content-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Root-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
        <path
          d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
          fill="black" />
      </svg>
    </span>
    <!--end::Svg Icon-->
  </div>
  <!--end::Scrolltop-->
  <!--end::Main-->
  <script>
    var hostUrl = "/assets/";
  </script>
  <!--begin::Javascript-->
  <!--begin::Global Javascript Bundle(used by all pages)-->
  <script src="/assets/plugins/global/plugins.bundle.js"></script>
  <script src="/assets/js/scripts.bundle.js"></script>
  <!--end::Page Vendors Javascript-->
  <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <!--end::Javascript-->


  <script>
    // $('#classes').DataTable({
    //   searching: true,
    // });
    "use strict";

    // Class definition
    var KTDatatablesButtons = function() {
      // Shared variables
      var table;
      var datatable;

      // Private functions
      var initDatatable = function() {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
          const dateRow = row.querySelectorAll('td');
          const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
            .format(); // select date from 4th column in table
          dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
          "info": false,
          'ordering': false,
          'pageLength': 10,
        });
      }

      // Hook export buttons
      var exportButtons = () => {
        const documentTitle = 'Data Kelas';

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#classes_menu [data-kt-export]');
        exportButtons.forEach(exportButton => {
          exportButton.addEventListener('click', e => {
            e.preventDefault();

            // Get clicked export value
            const exportValue = e.target.getAttribute('data-kt-export');
            const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

            // Trigger click event on hidden datatable export buttons
            target.click();
          });
        });
      }

      // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
      var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function(e) {
          datatable.search(e.target.value).draw();
        });
      }

      // Public methods
      return {
        init: function() {
          table = document.querySelector('#classes');

          if (!table) {
            return;
          }

          initDatatable();
          exportButtons();
          handleSearchDatatable();
        }
      };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
      KTDatatablesButtons.init();
    });
  </script>
</body>
<!--end::Body-->

</html>
