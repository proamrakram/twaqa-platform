@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted"> الاعدادات   </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">  العملات </li>
                </ol>
            </div>        
            <div class="row">
                <div class="col-md-4">
                <form  method="post" action="{{ route('admin.currencies.default') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-3">
                            <label for="nameTypeCourse" class="form-label fw-bolder d-block"> العملة الافتراضية للمنصة  </label>
                            <select name="default_currency" id="" class="form-control mb-2 mb-md-0 @error('default_currency') is-invalid @enderror">
                            @foreach($currencies as $currency)
                                                    <option value="{{$currency->id}} " @if($currency->id == $default_currency) selected @endif> {{$currency->currency_name}} </option>
                                                    @endforeach
                                                </select> @error('default_currency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div> 
                        
                        <button type="submit" class="px-20  mt-2 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                    </form>
                </div>
                <div class="col-md-8">
                
  
                <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center position-relative">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor"/>
                                <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor"/>
                                </svg>
                            </span>
                           <input type="text" data-kt-filter="search" class="border bg-white form-control p-1 form-control-solid w-250px ps-14" placeholder="البحث ..." />
                        </div>
                        <div id="kt_datatable_example_1_export" class="d-none"></div>

                        <div id="kt_datatable_courseType_export_menu" class='d-flex btns-datatables-export'>
                            <div class="menu-item ">
                                <a href="#" class="menu-link btn btn-secondary" data-kt-export="copy">
                                نسخ
                                </a>
                            </div>
                            <div class="menu-item ">
                                <a href="#" class="menu-link btn btn-secondary" data-kt-export="excel">
                                تصدير Excel
                                </a>
                            </div>
                            
                            <div class="menu-item ">
                                <a href="#" class="menu-link  btn btn-secondary" data-kt-export="pdf">
                                    تصدير PDF
                                </a>
                            </div>
                        </div>                        
                        <div id="btnsTypeCourses" class="d-none"></div>                        
                    </div>

                    <div class="card border p-0">
                        <div class="card-body fs-6 p-0 text-gray-700">
                            <table class="table table-striped table-hover  mt-0 mb-0 align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_typeCourses">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                                        <th class="min-w-100px">العملة </th>
                                        <th class="min-w-100px"> السعر مقابل (جنيه) </th>
                                        <th class="min-w-100px"> السعر مقابل (ريال) </th>
                                        <th class="min-w-100px"> السعر مقابل (دولار) </th>
                                        <th class="min-w-100px"> السعر مقابل (يورو) </th>
                                        <th class="text-end min-w-100px pe-5">الاعدادات</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <tbody class="fw-semibold text-gray-600 ">
                                    @foreach($currencies as $currency)
                                    <tr>
                                        <td>
                                          {{$currency->currency_name}} 
                                        </td>
                                        <td>
                                           {{$currency->egp}}
                                        </td>
                                        <td>
                                           {{$currency->riyal}}
                                        </td>
                                        <td>
                                           {{$currency->dollar}}
                                        </td>
                                        <td>
                                           {{$currency->euro}}
                                        </td>
                                        
                                         <td class="text-end">
                                            <div class="btn-actions d-flex align-items-center justify-content-end">                                   
                                                <a  href="{{route('admin.currencies.edit',['id'=>$currency->id])}}">
                                                    <span class="svg-icon svg-icon-2 svg-icon-primary  ">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
                                                            <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
                                                            <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>                
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                 @endforeach                            
                                </tbody>
                        </table>                            
                        </div>
                    </div>                

                </div>
            </div>
            
                   

        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/js/pdfmake.js')}}"></script>
<script src="{{asset('assets/js/vfs_fonts.js')}}"></script>
<script>
   
    "use strict";

// Class definition
var KTDatatablesExample = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            // const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            // dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }

    // Hook export buttons
    var exportButtons = () => {
        const documentTitle = 'كل أنواع الكورسات في أكاديمية تواقة';
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle,
                    
                }
            ]
        }).container().appendTo($('#btnsTypeCourses'));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#kt_datatable_courseType_export_menu [data-kt-export]');
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
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_typeCourses');

            if ( !table ) {
                return;
            }

            initDatatable();
            exportButtons();
            handleSearchDatatable();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
});    

  
</script>


@endsection
