<span class="bars-side-user text-center p-2 mb-3 rounded border text-white">
    <i class="fa-solid fa-bars ms-2"></i>
    فتح القائمة
</span>

<div class="rounded-3 overflow-hidden bg-white border menu-items sidebar-links-user">
    <a href="{{route('std.home')}}" class=''> الرئيسية  </a>
    <a href="{{route('std.data.basic')}}" class=''> البيانات الشخصية  </a>
    {{-- <a href="{{route('std.courses')}}" class=''> الكورسات  </a> --}}
    <a href="{{route('std.books')}}" class=''> الكتب  </a>
    <a href="{{route('std.posts')}}" class=''> المقالات  </a>
    <a href="{{route('std.balance')}}"> رصيدي     <span class='fw-bold position-absolute top-50 start-0 translate-middle-y ms-3'>  <span class='font-number'>1500 </span>    ج.م</span>  </a>
    <a href="{{route('std.achievements')}}"> إنجازاتي </a>
    <a href="{{route('std.certificates')}}"> الشهادات </a>
    <a href="{{route('std.subscrption')}}"> الإشتراك </a>
    <a href="{{route('std.chat')}}"> الدردشة </a>
    <a href="{{route('std.videos')}}"> التسجيلات </a>
    <a href="{{route('std.teacher.quran')}}"> المصحف المعلم </a>
    {{-- <a href="{{route('std.courses')}}"> الدورات </a> --}}
    <a href="{{route('std.academy.policy')}}"> سياسة الأكاديمية </a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" style=" background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" class="logout me-4"> تسجبل الخروج </button>
    </form>
</div>
