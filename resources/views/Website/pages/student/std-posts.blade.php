@extends('Website.partials.layout')
@section('title', 'منشوراتي')
@section('content')

    <div class="page page-data page-std mb-5">
        @include('Website.partials.header-heading-page')
        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.std-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user-boxes posts">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="box">
                                        <label for=""> القسم </label>
                                        <div class="input-icon position-relative">
                                            <select name="" id="" class="custom-select bg-white p-2 px-4">
                                                <option value=""> حدد القسم </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row post g-0 bg-white shadow-box border rounded-lg mb-3">
                                <div class="col-md-5">
                                    <a href="std-single-post.php"> <img src="{{ asset('assets/img/posts_img.png') }}"
                                            class='img-fluid' alt=""> </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="p-3">
                                        <div class="date d-flex align-items-center mb-3">
                                            <div class="icon-date ms-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM12 5C12.5128 5 12.9355 5.38604 12.9933 5.88338L13 6V11H18C18.5128 11 18.9355 11.386 18.9933 11.8834L19 12C19 12.5128 18.614 12.9355 18.1166 12.9933L18 13H12.15C11.5572 13 11.0692 12.5515 11.0067 11.9753L11 11.85V6C11 5.44772 11.4477 5 12 5Z"
                                                        fill="#4A4A4A" />
                                                </svg>
                                            </div>
                                            <span>4 يوليو، 2022</span>
                                        </div>
                                        <h3 class='mb-4'><a href="std-single-post.php"
                                                class='text-decoration-none text-dark'> عنوان المقال </a></h3>
                                        <p>
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        </p>
                                        <a href="sign_up.php" class="btn-outline clr-royal-blue d-inline-block mt-3"> أكمل
                                            القراءة <i class="fa-solid fa-angle-left"></i> </a>
                                    </div>
                                </div>
                            </div>


                            <div class="row post g-0 bg-white shadow-box border rounded-lg mb-3">
                                <div class="col-md-5">
                                    <a href="std-single-post.php"> <img src="{{ asset('assets/img/posts_img.png') }}"
                                            class='img-fluid' alt=""> </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="p-3">
                                        <div class="date d-flex align-items-center mb-3">
                                            <div class="icon-date ms-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM12 5C12.5128 5 12.9355 5.38604 12.9933 5.88338L13 6V11H18C18.5128 11 18.9355 11.386 18.9933 11.8834L19 12C19 12.5128 18.614 12.9355 18.1166 12.9933L18 13H12.15C11.5572 13 11.0692 12.5515 11.0067 11.9753L11 11.85V6C11 5.44772 11.4477 5 12 5Z"
                                                        fill="#4A4A4A" />
                                                </svg>
                                            </div>
                                            <span>4 يوليو، 2022</span>
                                        </div>
                                        <h3 class='mb-4'><a href="std-single-post.php"
                                                class='text-decoration-none text-dark'> عنوان المقال </a></h3>
                                        <p>
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                        </p>
                                        <a href="sign_up.php" class="btn-outline clr-royal-blue d-inline-block mt-3"> أكمل
                                            القراءة <i class="fa-solid fa-angle-left"></i> </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->
@endsection
