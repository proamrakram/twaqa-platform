@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> تسجيل حساب جديد </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img18.png') }});background-position: left center;background-size: contain;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3 clr-royal-blue"> تسجيل حساب جديد
                    </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data pt-5 page-register">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-md-4 p-3 rounded-lg shadow-sm bg-white">
                            <h4 class='text-center mb-4 clr-royal-blue'> تسجيل الإشتراك </h4>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for=""> الإسم الأول <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                                            class='input-style'>
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for=""> الإسم الثاني <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="text" name="second_name" value="{{ old('second_name') }}"
                                            class='input-style'>
                                        @error('second_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for=""> الجنس <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <select name="gender" id="gender" class="select2 input-style">
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                        @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for=""> الدولة
                                            <span class='star'>
                                                <i class="fa-solid fa-star-of-life"></i>
                                            </span>
                                        </label>
                                        <select name="country_id" id="country_id" class="select2 input-style">
                                            @foreach (getCountries() as $country)
                                                <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for=""> المدينة
                                            <span class='star'>
                                                <i class="fa-solid fa-star-of-life"></i>
                                            </span>
                                        </label>

                                        <select name="city_id" id="city_id" class="select2 input-style">

                                            <option value="">اختار الدولة اولا</option>

                                        </select>
                                        @error('city_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for=""> البريد الإلكتروني <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="text" name="email" value="{{ old('email') }}"
                                            class='input-style'>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for=""> العمر <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="number" name="age" value="{{ old('age') }}" min="10"
                                            max="60" value="15" class='input-style'>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="user_type"> التسجيل كـ <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <select name="user_type" id="user_type" class="select2 input-style">
                                            {{-- <option value="student">طالب</option> --}}
                                            <option value="teacher">معلم</option>
                                        </select>
                                        @error('user_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-6 position-relative reset-password">
                                        <label for=""> كلمة المرور
                                            <span class='star'>
                                                <i class="fa-solid fa-star-of-life"></i>
                                            </span>
                                        </label>

                                        <input type="password" name="password" class='input-style'>
                                        <i
                                            class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>



                                    <div class="col-6 position-relative reset-password">
                                        <label for=""> تأكيد كلمة المرور
                                            <span class='star'>
                                                <i class="fa-solid fa-star-of-life"></i>
                                            </span>
                                        </label>

                                        <input type="password" name='password_confirmation' class='input-style'>
                                        <i
                                            class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <p class='text-center'>
                                            من خلال إنشاء حساب ، فإنك توافق على اتفاقية المستخدم الخاصة بنا وتقر بقراءة
                                            إشعار خصوصية المستخدم الخاص بنا.
                                        </p>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn-green ms-2 text-white p-3"> <i
                                                class="fa-regular fa-user ms-2"></i> إنشاء حساب جديد </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <svg style="visibility: hidden; position: absolute;" width="0" height="0"
            xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                        result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                </filter>
            </defs>
        </svg>

    </div> <!-- End Page -->

    @push('signUp')
        <script>
            $(document).ready(function() {
                $('#country_id').on('change', function() {

                    var country_id = this.value;
                    console.log(country_id);

                    $("#city_id").html('');

                    $.ajax({
                        url: "{{ url('/get-cities-by-country') }}",
                        type: "POST",
                        data: {
                            country_id: country_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {

                            $('#city_id').html('<option value="">اختر المدينة</option>');
                            $.each(result.states, function(key, value) {
                                $("#city_id").append('<option value="' + value.id +
                                    '">' + value.city_name_ar + '</option>');
                            });
                        }
                    });

                });
            });
        </script>
    @endpush
@endsection
