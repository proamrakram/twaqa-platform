<span class="bars-side-user text-center p-2 mb-3 rounded border text-white">
    <i class="fa-solid fa-bars ms-2"></i>
    {{ __('Open Menu') }}
</span>

<div class="rounded-3 overflow-hidden bg-white border menu-items sidebar-links-user">
    <a href="{{ route('std.home') }}"> {{ __('Main') }} </a>
    <a href="{{ route('std.data.basic') }}"> {{ __('Personal Data') }}</a>
    {{-- <a href="{{route('std.courses')}}"> الكورسات  </a> --}}
    <a href="{{ route('std.books') }}"> {{ __('Books') }} </a>
    <a href="{{ route('std.posts') }}"> {{ __('Articles') }} </a>
    <a href="{{ route('std.balance') }}"> {{ __('My Balance') }} <span
            class='fw-bold position-absolute top-50 start-0 translate-middle-y ms-3'> <span class='font-number'>1500
            </span> ج.م</span> </a>
    <a href="{{ route('std.achievements') }}"> {{ __('My Achievements') }} </a>
    <a href="{{ route('std.certificates') }}"> {{ __('Testimonials') }} </a>
    <a href="{{ route('std.subscrption') }}"> {{ __('Subscription') }} </a>
    <a href="{{ route('std.chat') }}"> {{ __('Chat') }} </a>
    <a href="{{ route('std.videos') }}"> {{ __('Recordings') }} </a>
    <a href="{{ route('std.teacher.quran') }}"> {{ __('Teacher Quran') }} </a>
    {{-- <a href="{{route('std.courses')}}"> الدورات </a> --}}
    <a href="{{ route('std.academy.policy') }}"> {{ __('Academy Policy') }} </a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            style=" background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;"
            class="logout me-4"> {{ __('Logout') }}</button>
    </form>
</div>
