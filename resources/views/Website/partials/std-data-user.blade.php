<div class="heading-teacher">
    <div class="teacher shadow-box bg-white  rounded-lg pb-5">
        <div class="heading d-flex justify-content-center position-relative pt-4">
            <div class="img align-self-center position-relative">

                @auth
                    <img src="{{ auth()->user()->img }}" alt="">

                @endauth

                @guest

                    <img src="{{ asset('website/assets/img/user_teacher.jpg') }}" alt="">
                @endguest

                <div class="btns-play">
                    <a class="icon" href="{{ route('std.data.basic') }}">
                        <i class="fa-solid fa-camera"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="content text-center pt-4">
            <h3 class='h4 mb-0 teacher-name'>
                @auth
                    <a href="{{ route('std.home') }}"
                        class='text-decoration-none clr-royal-blue'>{{ auth()->user()->full_name }}</a>
                @endauth
                @guest
                    <a href="{{ route('login') }}"
                        class='text-decoration-none clr-royal-blue'>{{ __('Welcome to Twaqa Academy') }}</a>
                @endguest
            </h3>
        </div>
    </div>
</div>






<div class="teacher-link mb-3">
    <div class="row g-0 align-items-center justify-content-center text-center bg-white menu-items">
        <div class="col"><a href="{{ route('std.data.basic') }}" class=''>{{ __('Basic Information') }}</a>
        </div>
        <div class="col"><a href="{{ route('std.qualifications') }}"> {{ __('Qualifications') }}</a></div>
        <div class="col"><a href="{{ route('std.account.details') }}">{{ __('Account Details') }}</a>
        </div>
    </div>
</div>
