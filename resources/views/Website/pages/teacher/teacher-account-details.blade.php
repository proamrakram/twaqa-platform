@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        @include('Website.partials.header-heading-page')

        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.teacher-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user ">
                            @include('Website.partials.data-user')
                        </div>
                        <div class="profile-data-user-boxes content-user mt-5">

                            <div class="box mb-4">
                                <form action="{{ route('teacher.update', 'email') }}" method="POST">

                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0"> بيانات الحساب </h3>
                                        <div class="icons-data-user d-flex">
                                            <button type="submit" class='btn-green ms-1 text-white'> حفظ </button>
                                            <div class="icon icon-edit">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.42683 16.5077C1.5224 16.6788 0.650504 16.0844 0.479396 15.1799C0.440663 14.9752 0.440663 14.765 0.479396 14.5603L1.02937 11.6533C1.09163 11.3242 1.25162 11.0215 1.48847 10.7846L11.2529 1.02019C11.7602 0.512922 12.5351 0.387164 13.1768 0.707988L13.818 1.02863C14.7443 1.49176 15.4954 2.24282 15.9585 3.16908L16.2791 3.81037C16.6 4.45201 16.4742 5.22697 15.9669 5.73423L6.20252 15.4987C5.96567 15.7355 5.66295 15.8955 5.33383 15.9578L2.42683 16.5077ZM10.7943 3.83701L13.1513 6.19403L14.7884 4.55572L14.4678 3.91443C14.1659 3.31072 13.6764 2.8212 13.0727 2.51935L12.4314 2.1987L10.7943 3.83701ZM2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                        fill="#6F7094" />
                                                    <path
                                                        d="M2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                        fill="#6F7094" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg">
                                        <div class="input border-bottom p-3">
                                            <label for=""> البريد الإلكتروني </label>
                                            <input type="text" name="email" value='{{ $user->email }}' disabled
                                                class='form-input font-number'>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- End Box -->

                            <div class="box mb-4">

                                <form action="{{ route('teacher.update', 'password') }}" method="POST"
                                    class='reset-password'>

                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0"> كلمة المرور </h3>
                                        <div class="icons-data-user d-flex">
                                            <button type="submit" class='btn-green ms-1 text-white'> حفظ </button>
                                            <div class="icon icon-edit">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.42683 16.5077C1.5224 16.6788 0.650504 16.0844 0.479396 15.1799C0.440663 14.9752 0.440663 14.765 0.479396 14.5603L1.02937 11.6533C1.09163 11.3242 1.25162 11.0215 1.48847 10.7846L11.2529 1.02019C11.7602 0.512922 12.5351 0.387164 13.1768 0.707988L13.818 1.02863C14.7443 1.49176 15.4954 2.24282 15.9585 3.16908L16.2791 3.81037C16.6 4.45201 16.4742 5.22697 15.9669 5.73423L6.20252 15.4987C5.96567 15.7355 5.66295 15.8955 5.33383 15.9578L2.42683 16.5077ZM10.7943 3.83701L13.1513 6.19403L14.7884 4.55572L14.4678 3.91443C14.1659 3.31072 13.6764 2.8212 13.0727 2.51935L12.4314 2.1987L10.7943 3.83701ZM2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                        fill="#6F7094" />
                                                    <path
                                                        d="M2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                        fill="#6F7094" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg">
                                        <div class="input border-bottom p-3 position-relative">
                                            <label for=""> كلمة المرور القديمة </label>
                                            <input type="password" name="password_old" value='' disabled
                                                class='form-input font-number'>
                                            <i
                                                class="fa-regular fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                            @error('password_old')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                        <div class="input border-bottom p-3 position-relative">
                                            <label for=""> كلمة المرور الجديدة </label>
                                            <input type="password" name="password" value='' disabled
                                                class='form-input font-number'>

                                            <i
                                                class="fa-regular fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input border-bottom p-3 position-relative">
                                            <label for=""> تأكيد كلمة المرور </label>
                                            <input type="password" name="password_confirmation" value='' disabled
                                                class='form-input font-number'>
                                            <i
                                                class="fa-regular fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- End Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->
@endsection
