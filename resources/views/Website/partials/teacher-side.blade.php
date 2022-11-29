<span class="bars-side-user text-center p-2 mb-3 rounded border text-white">
    <i class="fa-solid fa-bars ms-2"></i>
    {{ __('Open Menu') }}
</span>

<div class="rounded-3 overflow-hidden bg-white border menu-items sidebar-links-user">
    <a href="{{ route('teacher.home') }}" class=''> {{ __('Main') }} </a>
    <a href="{{ route('teacher.data.basic') }}" class=''> {{ __('Personal Data') }} </a>
    <a href="{{ route('teacher.salary') }}"> {{ __('Salary') }}<span
            class='fw-bold position-absolute top-50 start-0 translate-middle-y ms-3'>
            <span class='font-number'>1500 </span> ج.م</span> </a>
    <a href="{{ route('teacher-courses') }}"> {{ __('Courses') }} </a>
    <a href="{{ route('teacher.stds') }}"> {{ __('Students') }} </a>
    <a href="{{ route('subjects') }}"> {{ __('Subjects') }} </a>
    <a href="#"> {{ __('Chat') }} </a>
    <a href="{{ route('teacher.forms') }}"> {{ __('Forms') }} </a>
    <a href="{{ route('calander.lessons') }}"> {{ __('Daily school schedule') }} </a>
    <a href="{{ route('certificates') }}"> {{ __('Certificates of Appreciation') }} </a>
    <a href="{{ route('instructions') }}"> {{ __('Instructions') }} </a>
    <a href="{{ route('absence.policy') }}"> {{ __('Absence Policy') }} </a>
    <a href="#"> {{ __('Teacher Quran') }} </a>
    <a href="{{ route('books') }}"> {{ __('Books') }} </a>
    <a href="{{ route('videos') }}"> {{ __('Vedios') }} </a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            style=" background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;"
            class="logout me-4"> {{ __('Logout') }} </button>
    </form>
</div>
