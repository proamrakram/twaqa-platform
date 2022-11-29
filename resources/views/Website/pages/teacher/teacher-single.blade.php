@extends('Website.partials.layout')
@section('title', __('Teacher') . ' ' . $teacher->full_name)
@section('content')


    <div class="page mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-4 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item " aria-current="page"> <a href="{{ route('teachers') }}"> المعلمون </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $teacher->full_name }}</li>
                    </ol>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <div class="heading-teacher">
            <div class="container">
                <div class="teacher shadow-box bg-white  rounded-lg pb-4">
                    <div class="heading d-flex justify-content-around position-relative">
                        <span class='not-completed opacity-0'> not-completed </span>
                        <div class="img align-self-center position-relative">
                            <img src="assets/img/user_teacher.jpg" alt="">
                            <div class="btns-play">
                                <div class="icon"><i class="fa-solid fa-play"></i></div>
                            </div>
                        </div>
                        <div class="price-teacher">
                            <span class='font-number fw-bold'> 15 </span>
                            <span>جـــنيه</span>
                            <span>للساعة</span>
                        </div>
                    </div>
                    <div class="content text-center pt-4">
                        <h3 class='h4 mb-0 teacher-name'> <a href="#" class='text-decoration-none clr-royal-blue'>
                                {{ $teacher->full_name }}</a> </h3>
                        <p class='mb-2'>{{ getCountryName($teacher->country_id) }}</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class='stars'>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <span class='me-2 font-number fw-bold'>10</span>
                        </div>
                        <div class="desc py-3 px-4">
                            <p class='mb-0'>
                                {{ $teacher->description }}
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="#" class='btn-green text-white  btn-lg btn-show-vid ms-2'
                                data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal" data-bs-target="#vidInfoTeacher"> <i
                                    class="fa-brands fa-youtube"></i> شاهد فيديو </a>
                            <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'> <i
                                    class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                        </div>
                        <div class="tags text-center mb-4 mt-2">
                            @foreach (getTeacherCourses($teacher->id) as $course)
                                <a href="#">{{ $course->name }} </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="teacher-link mb-3">
            <div class="container">
                <div class="row g-0 align-items-center justify-content-center text-center bg-white">
                    <div class="col"><a href="teacher-single.php" class='active'> عن المعلم </a></div>
                    <div class="col"><a href="teacher-calendar.php"> جدول الحصص</a></div>
                </div>
            </div>
        </div>


        <div class="teacher-about">
            <div class="container">
                <div class="box-about-teacher bg-white border rounded-3 p-4 mb-3">
                    <h3 class='h4 mb-4'>المؤهلات الدراسية</h3>

                    @foreach ($teacher->qualifications as $qualification)
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="icon ms-3">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512"
                                    width="30" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="m501.689 120.505-237.373-118.555c-5.208-2.599-11.425-2.599-16.633 0l-175.475 87.641c-3.705 1.85-5.209 6.355-3.358 10.061 1.85 3.703 6.354 5.207 10.06 3.358l175.476-87.641c1.012-.506 2.218-.506 3.229 0l237.372 118.556c1.233.615 1.999 1.854 1.999 3.232v20.645c0 2.685-2.812 4.442-5.228 3.232l-227.442-113.595c-5.208-2.599-11.425-2.599-16.633 0l-227.441 113.595c-2.422 1.212-5.228-.554-5.228-3.232v-20.645c0-1.378.766-2.617 1.999-3.232l30.518-15.242c3.705-1.85 5.209-6.355 3.358-10.061-1.85-3.704-6.355-5.21-10.06-3.358l-30.518 15.242c-6.351 3.173-10.296 9.553-10.296 16.651v20.645c0 13.848 14.565 22.822 26.929 16.651l2.509-1.253v8.912c0 9.607 6.383 17.746 15.129 20.414v250.656c-8.746 2.668-15.129 10.807-15.129 20.414v26.825c0 6.385 5.195 11.579 11.58 11.579h429.935c6.385 0 11.58-5.194 11.58-11.579v-26.825c0-9.607-6.383-17.746-15.129-20.414v-18.03c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v17.102h-31.916v-248.8h31.916v196.636c0 4.142 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-197.564c8.746-2.668 15.129-10.807 15.129-20.414v-8.912l2.509 1.253c2.647 1.322 5.492 1.978 8.328 1.978 9.887-.003 18.601-7.98 18.601-18.63v-20.645c-.001-7.098-3.946-13.478-10.297-16.651zm-247.304-59.647c1.012-.506 2.218-.506 3.229 0l159.601 79.712c-11.262 0-311.214 0-322.431 0zm135.99 94.712v26.251h-268.75v-26.251zm-345.923 26.542v-16.403l20.301-10.14h41.873v26.542c0 3.498-2.846 6.343-6.343 6.343h-49.487c-3.498.001-6.344-2.844-6.344-6.342zm47.045 21.342v248.799h-31.916v-248.799zm15.129 293.547h-62.174v-23.405c0-3.498 2.846-6.343 6.344-6.343h49.487c3.498 0 6.343 2.846 6.343 6.343zm283.749-23.405v23.405h-268.75v-23.405c0-.967-.087-1.913-.213-2.846h269.175c-.125.933-.212 1.879-.212 2.846zm9.67-17.846h-288.09c-1.673-1.098-3.505-1.972-5.459-2.568v-250.656c3.555-1.084 6.709-3.081 9.213-5.706h280.582c2.504 2.625 5.657 4.621 9.213 5.706v250.656c-1.954.596-3.786 1.47-5.459 2.568zm61.159 11.503c3.498 0 6.344 2.846 6.344 6.343v23.405h-62.174v-23.405c0-3.498 2.846-6.343 6.343-6.343zm6.344-285.141c0 3.498-2.846 6.343-6.344 6.343h-49.487c-3.498 0-6.343-2.846-6.343-6.343v-26.542h41.873l20.301 10.14z" />
                                                <path
                                                    d="m157.261 295.816c.79 4.067 4.73 6.717 8.792 5.931 13.927-2.705 35.308-3.988 58.086 5.268 3.816 1.551 8.204-.267 9.771-4.124 1.559-3.838-.287-8.212-4.124-9.772-26.193-10.646-50.671-9.191-66.594-6.096-4.066.791-6.721 4.727-5.931 8.793z" />
                                                <path
                                                    d="m229.787 336.994c-26.19-10.645-50.67-9.19-66.595-6.096-4.066.79-6.721 4.726-5.931 8.792.79 4.067 4.73 6.725 8.792 5.931 13.926-2.707 35.308-3.99 58.085 5.268 3.823 1.553 8.206-.273 9.771-4.124 1.561-3.837-.285-8.212-4.122-9.771z" />
                                                <path
                                                    d="m348.808 287.024c-15.922-3.095-40.401-4.549-66.594 6.096-3.837 1.559-5.684 5.934-4.124 9.772 1.567 3.854 5.951 5.677 9.771 4.124 22.778-9.258 44.16-7.974 58.086-5.268 4.065.792 8.002-1.865 8.792-5.931.79-4.067-1.865-8.003-5.931-8.793z" />
                                                <path
                                                    d="m348.808 330.897c-15.924-3.095-40.403-4.549-66.595 6.096-3.837 1.559-5.683 5.934-4.123 9.772 1.568 3.857 5.954 5.676 9.771 4.124 22.776-9.259 44.159-7.974 58.086-5.268 4.065.794 8.002-1.864 8.792-5.931.79-4.066-1.865-8.003-5.931-8.793z" />
                                                <path
                                                    d="m371.339 225.167c-18.68-6.033-66.577-16.5-115.339 13.116-48.763-29.617-96.66-19.151-115.339-13.116-7.521 2.43-12.574 9.372-12.574 17.276v164.805c0 11.936 11.295 20.626 22.822 17.543 17.62-4.719 52.633-9.853 89.16 8.78 4.744 2.421 9.927 3.675 15.131 3.793.263.028.53.044.8.044s.537-.016.8-.044c5.203-.118 10.386-1.372 15.131-3.793 36.525-18.632 71.539-13.497 89.159-8.781 11.524 3.091 22.823-5.606 22.823-17.542v-164.805c.001-7.903-5.052-14.846-12.574-17.276zm-122.839 195.769c-.546-.22-1.087-.456-1.616-.726-22.207-11.328-43.875-14.838-62.205-14.838-15.505 0-28.624 2.513-37.651 4.93-1.989.527-3.943-.973-3.943-3.055v-164.805c0-1.374.878-2.581 2.185-3.004 16.72-5.4 59.636-14.772 103.23 11.845zm120.414-13.688c0 2.08-1.957 3.586-3.944 3.054-19.698-5.273-58.865-11-99.855 9.909-.529.27-1.07.506-1.616.726v-169.653c43.594-26.617 86.509-17.245 103.23-11.845 1.307.423 2.185 1.63 2.185 3.004z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <h4 class="h5 clr-royal-blue mb-2   "> {{ $qualification->qualification_degree }}</h4>
                                <p class='mb-0'> {{ $qualification->specialization }}</p>
                                <p class='mb-0'> {{ $qualification->university }} ,
                                    {{ getCountryName($qualification->country_id) }} </p>
                                <p class='mb-0 fw-bold gray-clr font-number'>2021 </p>
                            </div>
                        </div> <!-- End  Box -->
                    @endforeach

                </div>

                <div class="box-about-teacher bg-white border rounded-3 p-4 mb-3">
                    <h3 class='h4 mb-4'> الشهادات</h3>



                    @foreach ($teacher->teacherCertificates as $teacher_certificate)
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="icon ms-3">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                    width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path
                                                d="m335.355 161.576h-228.512c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h228.512c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                                            <path
                                                d="m342.855 221.521c0-4.143-3.358-7.5-7.5-7.5h-228.512c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h228.512c4.142 0 7.5-3.357 7.5-7.5z" />
                                            <path
                                                d="m228.599 273.966c0-4.143-3.358-7.5-7.5-7.5h-114.256c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h114.256c4.142 0 7.5-3.358 7.5-7.5z" />
                                            <path
                                                d="m176.922 423.562c-3.598-2.555-8.525-6.055-17.491-6.055s-13.894 3.5-17.491 6.055c-2.883 2.048-4.623 3.284-8.805 3.284-4.18 0-5.92-1.236-8.802-3.283-3.597-2.556-8.524-6.056-17.49-6.056-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5c4.18 0 5.92 1.236 8.802 3.283 3.597 2.556 8.524 6.056 17.49 6.056s13.894-3.5 17.491-6.055c2.883-2.048 4.623-3.284 8.805-3.284s5.922 1.236 8.805 3.284c3.598 2.555 8.525 6.055 17.491 6.055 4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5c-4.182 0-5.922-1.237-8.805-3.284z" />
                                            <path
                                                d="m27.274 259.6c4.142 0 7.5-3.357 7.5-7.5v-128.219c0-.817.079-1.62.195-2.414l81.507.001c13.656 0 24.766-11.11 24.766-24.767v-81.506c.794-.116 1.597-.195 2.414-.195h254.002c5.385 0 9.766 4.381 9.766 9.766v35.119c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-35.119c-.001-13.657-11.11-24.766-24.767-24.766h-254.002c-8.397 0-16.291 3.27-22.228 9.207l-92.446 92.446c-5.938 5.938-9.208 13.831-9.208 22.228v128.219c.001 4.142 3.359 7.5 7.501 7.5zm98.967-233.993v71.094c0 5.386-4.381 9.767-9.766 9.767l-71.094-.001z" />
                                            <path
                                                d="m488.342 356.598c6.057-9.279 4.938-21.353-2.72-29.359-1.994-2.084-2.827-5.013-2.229-7.834 2.295-10.84-3.109-21.693-13.144-26.396-2.611-1.223-4.446-3.652-4.908-6.498-1.775-10.938-10.736-19.107-21.79-19.865-2.877-.197-5.466-1.8-6.925-4.286-3.241-5.527-8.393-9.309-14.204-10.893v-156.562c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v157.135c-2.237.227-4.5-.404-6.297-1.83v.001c-8.682-6.888-20.806-6.887-29.485-.001-2.259 1.793-5.252 2.353-8.006 1.497-10.579-3.29-21.888 1.094-27.495 10.651-1.458 2.487-4.047 4.09-6.924 4.287-11.055.758-20.015 8.927-21.79 19.864-.462 2.847-2.297 5.276-4.91 6.5-10.034 4.701-15.438 15.556-13.142 26.395.598 2.821-.236 5.75-2.229 7.833-7.659 8.008-8.778 20.081-2.721 29.36 1.576 2.415 1.857 5.446.751 8.109-4.249 10.234-.931 21.896 8.068 28.359 2.342 1.684 3.7 4.409 3.631 7.291-.265 11.077 7.042 20.753 17.77 23.531 1.926.499 3.583 1.64 4.753 3.186l-19.913 48.074c-1.91 4.608-1.011 9.764 2.345 13.454 3.355 3.69 8.402 5.073 13.17 3.61l21.081-6.469 5.97 11.256h-293.666c-7.504 0-13.609-6.105-13.609-13.609v-196.205c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v196.207c0 15.775 12.834 28.609 28.609 28.609h366.54c.02 0 .04-.003.06-.003.044 0 .088.003.131.003 4.734 0 9-2.555 11.239-6.775l10.331-19.48 21.08 6.469c4.767 1.463 9.815.081 13.171-3.609s4.255-8.846 2.346-13.454l-19.914-48.075c1.17-1.545 2.827-2.687 4.755-3.186 10.727-2.778 18.033-12.454 17.769-23.531-.069-2.882 1.288-5.607 3.629-7.29 9-6.463 12.318-18.125 8.07-28.36-1.105-2.665-.824-5.696.752-8.111zm-139.88 120.474c-2.859-5.392-9.167-8.005-15.001-6.214l-18.287 5.611 14.655-35.38c4.547 3.031 10.123 4.487 15.904 3.807 2.867-.332 5.704.766 7.594 2.942 5.105 5.876 12.506 8.708 19.855 8.088l-15.758 38.043zm23.944 19.928 13.978-33.745 13.978 33.745zm85.187-20.53-18.287-5.611c-5.833-1.79-12.142.822-15.001 6.214l-8.962 16.899-15.756-38.038c.66.056 1.319.094 1.978.094 6.679-.001 13.228-2.84 17.875-8.188 1.891-2.177 4.727-3.273 7.595-2.941 5.781.677 11.357-.779 15.903-3.808zm18.189-128.072c-4.288 6.568-5.052 14.815-2.044 22.061 1.562 3.762.342 8.049-2.968 10.426-6.371 4.578-10.062 11.991-9.874 19.832.098 4.072-2.589 7.629-6.532 8.65-7.458 1.93-13.488 7.351-16.219 14.537-.006.015-.015.029-.021.044-.042.104-.092.234-.128.335-.001.003-.003.007-.004.01-1.38 3.832-5.173 6.179-9.216 5.706-7.795-.905-15.516 2.081-20.659 8.003-2.672 3.074-7.054 3.893-10.654 1.992-3.306-1.746-6.916-2.65-10.542-2.732-.012 0-.024-.001-.036-.001-.167-.004-.334-.015-.5-.015-.155 0-.31.011-.466.014-.056 0-.111.004-.167.005-3.593.096-7.169.999-10.445 2.729-3.602 1.9-7.983 1.082-10.655-1.991-5.144-5.923-12.868-8.917-20.658-8.004-4.043.474-7.836-1.874-9.217-5.707-.009-.024-.019-.047-.028-.071-.035-.094-.069-.187-.107-.281-.006-.014-.014-.027-.02-.041-2.732-7.183-8.761-12.603-16.216-14.532-3.944-1.021-6.63-4.578-6.533-8.651.187-7.841-3.504-15.254-9.876-19.832-3.308-2.376-4.528-6.663-2.965-10.426 3.007-7.245 2.243-15.491-2.045-22.06-2.227-3.411-1.815-7.849 1-10.793 5.421-5.67 7.688-13.636 6.063-21.309-.844-3.985 1.143-7.976 4.831-9.704 7.103-3.327 12.094-9.937 13.352-17.68.652-4.021 3.946-7.024 8.011-7.303 7.826-.537 14.867-4.897 18.836-11.662 2.061-3.515 6.216-5.126 10.107-3.917 7.49 2.327 15.632.806 21.777-4.069 3.192-2.533 7.649-2.532 10.84-.001v.001c6.146 4.875 14.286 6.398 21.777 4.069.616-.191 1.238-.304 1.858-.358.124-.008.248-.016.371-.031 3.164-.139 6.209 1.458 7.879 4.306 3.969 6.765 11.01 11.125 18.836 11.662 4.064.278 7.358 3.282 8.011 7.304 1.257 7.743 6.248 14.352 13.35 17.678 3.689 1.729 5.677 5.72 4.833 9.704-1.626 7.674.641 15.641 6.063 21.31 2.815 2.944 3.226 7.382 1 10.793z" />
                                            <path
                                                d="m386.384 286.839c-35.538 0-64.449 28.912-64.449 64.449s28.912 64.449 64.449 64.449 64.449-28.912 64.449-64.449-28.911-64.449-64.449-64.449zm0 113.898c-27.267 0-49.449-22.183-49.449-49.449s22.183-49.449 49.449-49.449 49.449 22.183 49.449 49.449-22.182 49.449-49.449 49.449z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <div class="text">
                                <h4 class="h5 clr-royal-blue mb-2"> {{ $teacher_certificate->certificate_name }}</h4>
                                <p class='mb-0'> {{ $teacher_certificate->university }}</p>
                                <p class='mb-0 fw-bold gray-clr font-number'> {{ $teacher_certificate->year }} </p>
                            </div>
                        </div> <!-- End  Box -->
                    @endforeach


                </div>

                <div class="box-about-teacher bg-white border rounded-3 p-4 mb-3">
                    <h3 class='h4 mb-4'> الإجازات </h3>


                    @foreach ($teacher->ejazats as $ejazat)
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="icon ms-3">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                    viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path
                                                d="m369.43 248.543h-196.232c-4.143 0-7.503 3.359-7.503 7.503s3.359 7.503 7.503 7.503h196.232c4.143 0 7.503-3.359 7.503-7.503-.001-4.144-3.36-7.503-7.503-7.503z" />
                                            <path
                                                d="m376.932 292.02c0-4.144-3.359-7.503-7.503-7.503h-196.231c-4.143 0-7.503 3.359-7.503 7.503s3.359 7.503 7.503 7.503h196.232c4.143-.001 7.502-3.359 7.502-7.503z" />
                                            <path
                                                d="m239.625 399.92c-4.143 0-7.503 3.359-7.503 7.503s3.359 7.503 7.503 7.503h63.378c4.143 0 7.503-3.359 7.503-7.503s-3.359-7.503-7.503-7.503z" />
                                            <path
                                                d="m205.814 181.028c3.51 1.281 5.865 4.514 6 8.239.567 15.666 15.69 26.626 30.765 22.331 3.599-1.026 7.415.211 9.722 3.15 9.666 12.321 28.345 12.34 38.026 0 2.305-2.94 6.122-4.176 9.721-3.15 15.109 4.3 30.2-6.693 30.766-22.331.135-3.725 2.49-6.959 6-8.239 14.739-5.376 20.516-23.135 11.754-36.136-2.083-3.091-2.083-7.086 0-10.176 8.768-13.013 2.975-30.765-11.753-36.137-3.51-1.281-5.866-4.514-6.001-8.239-.566-15.638-15.657-26.631-30.765-22.331-3.6 1.025-7.416-.21-9.721-3.15-9.665-12.321-28.345-12.34-38.025 0-2.306 2.939-6.125 4.174-9.721 3.15-15.107-4.301-30.2 6.693-30.766 22.331-.135 3.725-2.491 6.958-6.001 8.239-14.739 5.376-20.515 23.134-11.753 36.136 2.083 3.091 2.083 7.086 0 10.176-8.769 13.01-2.978 30.764 11.752 36.137zm.69-54.698c-3.312-4.914-1.127-11.62 4.451-13.655 9.274-3.383 15.497-11.938 15.854-21.792.215-5.923 5.938-10.069 11.658-8.443 9.486 2.701 19.552-.562 25.639-8.32 3.662-4.667 10.747-4.674 14.414 0 6.087 7.759 16.151 11.023 25.64 8.32 5.718-1.629 11.443 2.524 11.658 8.443.357 9.855 6.58 18.409 15.854 21.792 5.57 2.032 7.768 8.734 4.451 13.656-5.514 8.184-5.514 18.76.001 26.946 3.311 4.914 1.125 11.62-4.452 13.655-9.274 3.382-15.497 11.936-15.854 21.792-.214 5.913-5.931 10.072-11.658 8.443-9.488-2.707-19.554.562-25.639 8.32-3.662 4.667-10.747 4.674-14.414 0-6.077-7.746-16.13-11.028-25.639-8.32-5.734 1.629-11.444-2.536-11.658-8.443-.357-9.857-6.58-18.41-15.854-21.792-5.567-2.032-7.768-8.733-4.45-13.656 5.513-8.185 5.513-18.761-.002-26.946z" />
                                            <path
                                                d="m271.314 183.959c24.381 0 44.216-19.808 44.216-44.156s-19.835-44.157-44.216-44.157-44.216 19.809-44.216 44.157 19.835 44.156 44.216 44.156zm0-73.309c16.107 0 29.211 13.078 29.211 29.152s-13.104 29.151-29.211 29.151c-16.106 0-29.21-13.078-29.21-29.151-.001-16.074 13.103-29.152 29.21-29.152z" />
                                            <path
                                                d="m434.864 129.767c4.143 0 7.503-3.359 7.503-7.503v-96.51c-.001-14.201-11.554-25.754-25.754-25.754h-321.226c-14.2 0-25.753 11.553-25.753 25.754v419.029c0 14.201 11.553 25.754 25.754 25.754h21.384v30.342c0 4.051 2.205 7.783 5.755 9.739 3.553 1.958 7.89 1.828 11.319-.339l12.802-8.09c1.329-.839 3.046-.839 4.376 0l12.802 8.091c3.422 2.162 7.76 2.299 11.319.338 3.55-1.956 5.754-5.687 5.754-9.739v-30.342h235.714c14.201 0 25.754-11.553 25.754-25.754v-287.443c0-4.144-3.359-7.503-7.503-7.503-4.143 0-7.503 3.359-7.503 7.503v287.443c0 5.927-4.822 10.749-10.749 10.749h-284.835v-59.156c0-4.144-3.359-7.503-7.503-7.503s-7.503 3.359-7.503 7.503v59.156h-21.384c-5.927 0-10.749-4.822-10.749-10.749v-419.029c0-5.927 4.822-10.749 10.749-10.749h21.384v346.296c0 4.144 3.359 7.503 7.503 7.503s7.503-3.359 7.503-7.503v-346.296h284.836c5.927 0 10.749 4.822 10.749 10.749v96.511c-.001 4.144 3.358 7.502 7.502 7.502zm-303.087 340.77h34.116v23.299l-6.853-4.331c-6.199-3.918-14.209-3.917-20.409 0l-6.854 4.332z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <h4 class="h5 clr-royal-blue mb-2   "> {{ $ejazat->ejazat_name }}</h4>
                                <p class='mb-0'>
                                    {{ $ejazat->university }}
                                </p>
                                <p class='mb-0 fw-bold gray-clr font-number'> {{ $ejazat->year }} </p>
                            </div>
                        </div> <!-- End  Box -->
                    @endforeach


                </div>
            </div>
        </div>


    </div> <!-- End Page -->

@endsection
