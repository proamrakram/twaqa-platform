<div class="heading-teacher">
    <div class="teacher shadow-box bg-white  rounded-lg pb-5">
        <div class="heading d-flex justify-content-center position-relative pt-4">
            <div class="img align-self-center position-relative">
                <img src="{{ getUserImage() }}" alt="">
                <div class="btns-play">
                    <a class="icon" href="{{ route('teacher.data.basic') }}"> <i class="fa-solid fa-camera"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content text-center pt-4">
            <h3 class='h4 mb-0 teacher-name'>
                <a href="#" class='text-decoration-none clr-royal-blue'>{{ getUserName() }}</a>
            </h3>
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
        </div>
    </div>
</div>

<div class="teacher-link mb-3">
    <div class="row g-0 align-items-center justify-content-center text-center bg-white menu-items">
        <div class="col"><a href="{{ route('teacher.data.basic') }}">{{ __('Basic Information') }}</a>
        </div>
        <div class="col"><a href="{{ route('teacher.qualifications') }}"> {{ __('Qualifications') }} </a></div>
        <div class="col"><a href="{{ route('teacher.certificates') }}"> {{ __('Testimonials') }} </a></div>
        <div class="col"><a href="{{ route('teacher.ejazat') }} "> {{ __('Achievements') }} </a></div>
        <div class="col"><a href="{{ route('teacher.video.audio') }}"> {{ __('Vedio and Audio') }} </a></div>
        <div class="col"><a href="{{ route('teacher.account.details') }}"> {{ __('Account Details') }} </a></div>
    </div>
</div>
