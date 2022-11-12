<div 
    id="kt_aside" 
    class="aside " 
    style='border-top: 1px solid #2D2D43;' 
    data-kt-drawer="true" 
    data-kt-drawer-name="aside" 
    data-kt-drawer-activate="{default: true, lg: false}" 
    data-kt-drawer-overlay="true" 
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" 
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div style='margin-top: 2px !important;' class="hover-scroll-overlay-y px-2 my-5 my-lg-4" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">   
            <div data-kt-menu-trigger="click" class="menu-item @if(Request::segment(2) == 'supervisors') here show @endif   menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor"/>
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">المشرفين</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'supervisors' && Request::segment(3) == '') active @endif " href="{{route('admin.supervisors.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'supervisors' && Request::segment(3) == 'create') active @endif " href="{{route('admin.supervisors.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div>
                    </div>
                </div> 
                <div data-kt-menu-trigger="click" class="menu-item @if(Request::segment(2) == 'teachers') here show @endif   menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor"/>
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">المعلمين</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'teachers' && Request::segment(3) == '') active @endif " href="{{route('admin.teachers.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'teachers' && Request::segment(3) == 'create') active @endif " href="{{route('admin.teachers.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'teachers' && Request::segment(3) == 'new') active @endif " href="{{route('admin.teachers.new')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> المعلمين الجدد </span>
                            </a>
                        </div>                        
                        
                    </div>
                </div>  
                
                <div data-kt-menu-trigger="click" class="menu-item  @if(Request::segment(2) == 'students') here show @endif   menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor"/>
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> الطلاب </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'students' && Request::segment(3) == '') active @endif " href="{{route('admin.students.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'students' && Request::segment(3) == 'create') active @endif " href="{{route('admin.students.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div>

                    </div>
                </div>    


                <div data-kt-menu-trigger="click" class="menu-item @if(Request::segment(2) == 'courses-categories') here show @endif   menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor"/>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> التخصصات </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a class="menu-link   @if(Request::segment(2) == 'courses-categories' && Request::segment(3) == '') active @endif" href="{{route('admin.courses-categories.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link  @if(Request::segment(2) == 'courses-categories' && Request::segment(3) == 'create') active @endif" href="{{route('admin.courses-categories.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div>

                                              
                        
                    </div>
                </div>                  

                <div data-kt-menu-trigger="click" class="menu-item @if(Request::segment(2) == 'lessons'||Request::segment(2) == 'courses-types' || Request::segment(2) == 'courses'|| Request::segment(2) == 'lessons-types') here show @endif      menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> الكورسات </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a class="menu-link  @if(Request::segment(2) == 'courses' && Request::segment(3) == 'index') active @endif " href="{{route('admin.courses.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'courses' && Request::segment(3) == 'create') active @endif " href="{{route('admin.courses.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div> 

                        <div class="menu-item">
                            <a class="menu-link  @if(Request::segment(2) == 'lessons' && Request::segment(3) == '') active @endif " href="{{route('admin.lessons.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">الحلقات</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'courses-types') active @endif" href="{{route('admin.courses-types.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> نوع الكورس </span>
                            </a>
                        </div> 
                        
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'lessons-types') active @endif" href="{{route('admin.lessons-types.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> نوع الحلقة </span>
                            </a>
                        </div>  
                                                

                    </div>
                </div> 

                <div data-kt-menu-trigger="click" class="menu-item  @if(Request::segment(2) == 'notifications') show here @endif    menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z" fill="currentColor"/>
                                    <path d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> الإشعارات  </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'notifications' && Request::segment(3) == '') active @endif " href="{{route('admin.notifications.index')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">عرض الكل</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'notifications' && Request::segment(3) == 'create') active @endif " href="{{route('admin.notifications.create')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة جديد</span>
                            </a>
                        </div> 
                

                    </div>
                </div> 
                
                
                <div data-kt-menu-trigger="click" class="menu-item   @if(Request::segment(2) == 'pages') here show @endif  menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                        <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"/>
                            <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"/>
                            <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"/>
                            <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"/>
                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
                            </svg>
                            </span>
                        </span>
                        <span class="menu-title">  الصفحات </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a class="menu-link  @if(Request::segment(2) == 'pages' && Request::segment(3) == 'about') active @endif" href="{{route('admin.pages.about')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> من نحن ؟ </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'pages' && Request::segment(3) == 'faq') active @endif" href="{{route('admin.pages.faq')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">  الاسئلة الشائعة </span>
                            </a>
                        </div>
                        
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'pages' && Request::segment(3) == 'testimonial') active @endif" href="{{route('admin.pages.testimonial')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">  ماذا قالو عنا ؟ </span>
                            </a>
                        </div>   

                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'pages' && Request::segment(3) == 'vision-message') active @endif" href="{{route('admin.pages.vision-message')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> رسالتنا ورؤيتنا  </span>
                            </a>
                        </div>  
                        
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'pages' && Request::segment(3) == 'policy') active @endif" href="{{route('admin.pages.policy')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> سياسية الغياب  </span>
                            </a>
                        </div> 
                        
                        <div class="menu-item">
                            <a class="menu-link @if(Request::segment(2) == 'pages' && Request::segment(3) == 'alert-tech') active @endif" href="{{route('admin.pages.alert-tech')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> تنبيهات للمعلمين  </span>
                            </a>
                        </div>                         

                                       

                    </div>
                </div>  
                
                
                <div data-kt-menu-trigger="click"  class="@if(Request::segment(2) == 'reports') here show @endif  menu-item {{ (request()->is('dashboard/settings*')) ? 'here show' : '' }}  menu-accordion ">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor"/>
                                <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> التقارير </span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a
                                class="menu-link @if(Request::segment(2) == 'reports' && Request::segment(3) == 'profits') active @endif" href="{{route('admin.reports.profits')}}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                                <span class="menu-title">التقارير اليومية</span>
                            </a>
                        </div>
                    </div>
                </div>                
            
                <div data-kt-menu-trigger="click"  class="@if(Request::segment(2) == 'settings' || Request::segment(2) == 'currencies' || Request::segment(2) == 'balance-period-hold') here show @endif  menu-item {{ (request()->is('dashboard/settings*')) ? 'here show' : '' }}  menu-accordion ">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor"/>
                                <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title"> الاعدادات العامة </span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a
                                class="menu-link @if(Request::segment(2) == 'settings' && Request::segment(3) == 'global') active @endif" href="{{route('admin.settings.global')}}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                                <span class="menu-title">الاعدادات العامة</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a
                                class="menu-link @if(Request::segment(2) == 'currencies') active @endif" href="{{route('admin.currencies.index')}}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                                <span class="menu-title">العملات</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item  ">
                            <a
                                class="menu-link @if(Request::segment(2) == 'settings' && Request::segment(3) == 'social') active @endif" href="{{route('admin.settings.social')}}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                                <span class="menu-title">مواقع التواصل الاجتماعي</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion ">
                        <div class="menu-item">
                            <a
                                class="menu-link @if(Request::segment(2) == 'balance-period-hold') active @endif" href="{{route('admin.balance-period-hold')}}">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                                <span class="menu-title">مدة تعليق الرصيد</span>
                            </a>
                        </div>
                    </div>
                </div>                
            
            
              </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>