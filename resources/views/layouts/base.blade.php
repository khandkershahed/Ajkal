<!DOCTYPE html>
<html lang="en">
  @include('layouts/header')
  <body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="
      --kt-toolbar-height: 55px;
      --kt-toolbar-height-tablet-and-mobile: 55px;
    "
  >
    <div class="d-flex flex-column flex-root">
      <div class="page d-flex flex-row flex-column-fluid">
        
        @include('layouts/sidebar')

        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          


          @include('layouts.topbar')



          @yield('content')




          @include('layouts/footer')




        </div>
      </div>
    </div>
   
    
    
    
    
    <script>
      var hostUrl = "assets/";
    </script>

    <script>
      "use strict";

      // Class definition
      var KTDatatablesButtons = (function () {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function () {
          // Set date data order
          const tableRows = table.querySelectorAll("tbody tr");

          tableRows.forEach((row) => {
            const dateRow = row.querySelectorAll("td");
            const realDate = moment(
              dateRow[3].innerHTML,
              "DD MMM YYYY, LT"
            ).format(); // select date from 4th column in table
            dateRow[3].setAttribute("data-order", realDate);
          });

          // Init datatable --- more info on datatables: https://datatables.net/manual/
          datatable = $(table).DataTable({
            info: false,
            order: [],
            pageLength: 10,
          });
        };

        // Hook export buttons
        var exportButtons = () => {
          const documentTitle = "Customer Orders Report";
          var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
              {
                extend: "copyHtml5",
                title: documentTitle,
              },
              {
                extend: "excelHtml5",
                title: documentTitle,
              },
              {
                extend: "csvHtml5",
                title: documentTitle,
              },
              {
                extend: "pdfHtml5",
                title: documentTitle,
              },
            ],
          })
            .container()
            .appendTo($("#kt_datatable_example_1_export"));

          // Hook dropdown menu click event to datatable export buttons
          const exportButtons = document.querySelectorAll(
            "#kt_datatable_example_1_export_menu [data-kt-export]"
          );
          exportButtons.forEach((exportButton) => {
            exportButton.addEventListener("click", (e) => {
              e.preventDefault();

              // Get clicked export value
              const exportValue = e.target.getAttribute("data-kt-export");
              const target = document.querySelector(
                ".dt-buttons .buttons-" + exportValue
              );

              // Trigger click event on hidden datatable export buttons
              target.click();
            });
          });
        };

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
          const filterSearch = document.querySelector(
            '[data-kt-filter="search"]'
          );
          filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
          });
        };

        // Public methods
        return {
          init: function () {
            table = document.querySelector("#kt_datatable_example_1");

            if (!table) {
              return;
            }

            initDatatable();
            exportButtons();
            handleSearchDatatable();
          },
        };
      })();

      // On document ready
      KTUtil.onDOMContentLoaded(function () {
        KTDatatablesButtons.init();
      });
      tinymce.init({
    selector: '.kt_docs_tinymce_plugins'
});
</script>
          
    

    <script src="{{URL::asset('assets/js/custom.js')}}"></script>

    
    
  </body>
</html>
