<span class="bars-side-user text-center p-2 mb-3 rounded border text-white">
    <i class="fa-solid fa-bars ms-2"></i>
    فتح القائمة
</span>

<div class="rounded-3 overflow-hidden bg-white border menu-items sidebar-links-user">
    <a href="{{route('teacher.home')}}" class=''> الرئيسية  </a>
    <a href="{{route('teacher.data.basic')}}" class=''> البيانات الشخصية  </a>
    <a href="{{route('teacher.salary')}}"> الراتب<span class='fw-bold position-absolute top-50 start-0 translate-middle-y ms-3'>  <span class='font-number'>1500 </span>    ج.م</span>  </a>
    <a href="{{route('teacher-courses')}}"> الكورسات </a>
    <a href="{{route('teacher.stds')}}"> الطلاب </a>
    <a href="{{route('subjects')}}"> المواد </a>
    <a href="#"> الدردشة </a>
    <a href="{{route('teacher.forms')}}"> الإستمارات </a>
    <a href="{{route('calander.lessons')}}"> جداول الحصص </a>
    <a href="{{route('certificates')}}"> شهادات التقدير </a>
    <a href="{{route('instructions')}}"> التعليمات </a>
    <a href="{{ route('absence.policy') }}"> سياسة الغياب </a>
    <a href="#"> المصحف المعلم </a>
    <a href="{{route('books')}}"> الكتب </a>
    <a href="{{route('videos')}}"> الفيديوهات </a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" style=" background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" class="logout me-4"> تسجبل الخروج </button>
    </form>
</div>

