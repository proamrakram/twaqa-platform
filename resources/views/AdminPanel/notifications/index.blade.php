@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.notifications.index')}}" class="pe-3 text-muted">الاشعارات</a></li>
                    <li class="breadcrumb-item pe-3 text-primary">كل الاشعارات</li>
                </ol>
                <a href="{{route('admin.notifications.create')}}" class="btn btn-success py-2 rounded fw-bolder"> اضافة جديد </a>
            </div>
           
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center position-relative">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor"/>
                                <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor"/>
                                </svg>
                            </span>
                           <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="البحث ..." />
                        </div>
                        <div id="kt_datatable_example_1_export" class="d-none"></div>

                        <div id="kt_datatable_example_export_menu" class='d-flex btns-datatables-export'>
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
                        <div id="kt_datatable_example_buttons" class="d-none"></div>                        
                    </div>
            
                    <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_teachers">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                            
                        <th class="min-w-100px">الاسم </th>
                                <th class="min-w-100px">إلى </th>
                                <th class="min-w-100px"> اسماء المرسل اليهم </th>
                                <th class="text-end min-w-75px">وقت الاشعار</th>
                                <th class="text-end min-w-75px">الحالة</th>
                                <th class="text-end min-w-100px pe-5">الاعدادات</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <tbody class="fw-semibold text-gray-600">

                        @foreach($notifications as $notification)
                        <tr>
                                <td>
                                    {{$notification->title}}
                                </td>
                                <td>
                                    <span class="badge badge-success">@if($notification->to == 'teacher') معلم @else طالب @endif</span> 
                                </td>
                                <td>
                                    @if($notification->users != null)
                                    @foreach(explode(",", $notification->users) as $user)
                                    <span class="badge badge-light-dark"> {{\App\Models\User::find($user)->name}} </span>
                                    @endforeach
                                    @endif
                                </td>
                                <td class="text-end pe-0">{{date('Y-m-d',strtotime($notification->created_at))}}</td>
                            <td class="text-end">
                              @if($notification->active == 1)  <span class="badge badge-light-success">فعال @else 
                              <span class="badge badge-light-danger">   غير فعال @endif</span>
                            </td> 

                                    
                                <td class="text-end">
                                            <div class="btn-actions d-flex align-items-center justify-content-end">
                                                <label class="me-5 form-check form-switch form-check-custom form-check-solid d-inline-block">
                                                    <input class="form-check-input h-20px w-40px" type="checkbox" onclick="window.location='{{ route("admin.notifications.changeStatus",["id"=>$notification->id]) }}'" id="flexSwitchCheckChecked" @if($notification->active == 1) checked="" @endif/>
                                                </label>                                    
                                                <a  href="{{route('admin.notifications.edit',['id'=>$notification->id])}}">
                                                    <span class="svg-icon svg-icon-2 svg-icon-primary  ">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
                                                            <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
                                                            <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>                
                                                </a>
                                                <a  data-action="{{route('admin.notifications.delete',['id'=>$notification->id])}}" data-name="{{$notification->title}}" class="rm">
                                                    <span class="svg-icon svg-icon-2   svg-icon-danger ">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
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
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
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
        const documentTitle = 'كل التخصصات في أكاديمية تواقة';
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
        }).container().appendTo($('#kt_datatable_example_buttons'));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#kt_datatable_example_export_menu [data-kt-export]');
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
            table = document.querySelector('#kt_datatable_teachers');

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


$("body").on("click", ".rm", function() {


var current_object = $(this);

bootbox.dialog({
  message: "<form class='form-inline add-to-ban' method='GET'><div class='form-group'>هل تريد تأكيد حذف الاشعار  "+current_object.attr('data-name')+" ?</div></form>",
  title: "حذف",
  buttons: {
    success: {
      label: "حذف",
      className: "btn btn-danger ",
      callback: function() {
        var token = $("input[name='_token']").val();
        var action = current_object.attr('data-name');
        var action = current_object.attr('data-action');


        $('.add-to-ban').attr('action', action);
        $('.add-to-ban').append('<input name="_token" type="hidden" value="' + token + '">')
        $('.add-to-ban').submit();



      }
    },
    danger: {
      label: "إلغاء",
      className: "btn btn default",
      callback: function() {
        // remove
      }
    },
  }
});
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
@endsection
