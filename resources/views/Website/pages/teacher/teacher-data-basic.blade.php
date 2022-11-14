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
                                <form action="{{ route('teacher.update', 'basic') }}" method="POST">
                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0"> البيانات الأساسية </h3>
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
                                            <label for=""> الإسم </label>
                                            <input type="text" name="name" value="{{ $user->full_name }}" disabled
                                                class='form-input'>
                                        </div>

                                        <div class="input border-bottom p-3">
                                            <label for="gender"> الجنس </label>
                                            <select name="gender" id="gender" disabled class='form-input'>
                                                <option value="male" @if ($user->gender == 'male') selected @endif>
                                                    ذكر </option>
                                                <option value="female" @if ($user->gender == 'female') selected @endif>
                                                    أنثي </option>
                                            </select>
                                        </div>

                                        <div class="input border-bottom p-3">
                                            <label for="description"> وصف قصير </label>
                                            <textarea name="description" class='form-input' disabled>{{ $user->description }}</textarea>
                                        </div>

                                        <div class="input border-bottom p-3">
                                            <label for="birthday"> تاريح الميلاد </label>
                                            <input type="text" name="birthday" value="{{ $user->birthday }}" disabled
                                                class='form-input font-number' data-toggle="datepicker">
                                        </div>
                                        <div class="input border-bottom p-3">
                                            <label for="age"> العمر </label>
                                            <input type="number" name="age" value="{{ $user->age }}" disabled
                                                class='form-input'>
                                        </div>
                                        <div class="input border-bottom p-3">
                                            <label for="position"> الوظيفة </label>
                                            <input type="text" name="position" value="{{ $user->position }}" disabled
                                                class='form-input'>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- End Box -->

                            <div class="box mb-4">
                                <form action="{{ route('teacher.update', 'image') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0" id='editProfileImage'> الصورة الشخصية </h3>
                                        <div class="icons-data-user d-flex">
                                            <button type="submit" class='btn-green ms-1 text-white'> حفظ </button>
                                            <div class="icon icon-edit edit-img-profile">
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

                                    <div class="bg-white rounded-lg p-3 text-center text-md-end">
                                        <div class="row img-user align-items-center">

                                            <div class="col-md-4">
                                                <div class="img">
                                                    <img src="{{ $user->img }}" alt=""
                                                        class='rounded-3 img-fluid'>
                                                </div>
                                            </div>

                                            <div class="col-md-8 mt-3 mt-md-0 uploade-new-img">
                                                <label for="fusk" class='border p-3 d-inline-block rounded'> <i
                                                        class="fa-solid fa-upload ms-2"></i> تعديل الصورة الشخصية ...
                                                </label>
                                                <input id="fusk" type="file" name="image">
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div> <!-- End Box -->

                            <div class="box mb-4">
                                <form action="{{ route('teacher.update', 'calling') }}" method="POST">
                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0"> بيانات الإتصال </h3>
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
                                            <label for="phonenumber"> رقم الهاتف (رئيسي) </label>
                                            <input type="tel" name="phonenumber" value="{{ $user->phonenumber }}"
                                                disabled class='form-input font-number'>
                                        </div>
                                        <div class="input border-bottom p-3">
                                            <label for="phonenumber2"> رقم الهاتف (ثانوي) </label>
                                            <input type="tel" name="phonenumber2" value="{{ $user->phonenumber2 }}"
                                                disabled class='form-input font-number'>
                                        </div>
                                    </div>

                                </form>
                            </div> <!-- End Box -->

                            <div class="box mb-4">
                                <form action="{{ route('teacher.update', 'links') }}" method="POST">
                                    @csrf
                                    <div class="heading d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h4 mb-0"> روابط التواصل الإجتماعي </h3>

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

                                        <div class="input border-bottom p-3 input-icon position-relative">
                                            <label for=""> رابط صفحة الفيسبوك </label>
                                            <input type="text" name="facebook" value="{{ $user->facebook }}" disabled
                                                class='form-input font-number'>
                                            <i
                                                class="fa-brands fa-square-facebook position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
                                        </div>

                                        <div class="input border-bottom p-3 input-icon position-relative">
                                            <label for=""> رابط صفحة التويتر</label>
                                            <input type="text" name="twitter" value="{{ $user->twitter }}" disabled
                                                class='form-input font-number'>
                                            <i
                                                class="fa-brands fa-twitter position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
                                        </div>

                                        <div class="input border-bottom p-3 input-icon position-relative">
                                            <label for=""> رابط الواتساب </label>
                                            <input type="text" name="whatsapp" value="{{ $user->whatsapp }}" disabled
                                                class='form-input font-number'>
                                            <i
                                                class="fa-brands fa-square-whatsapp position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
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
