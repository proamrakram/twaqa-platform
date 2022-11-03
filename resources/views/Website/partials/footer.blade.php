<footer class="footer pt-5 pb-2">
    <div class="container">
        <a href="#" class="logo d-block text-center mt-5">
            <br>
            <img src="{{ asset('website/assets/img/logo_white.svg') }}" alt="">
        </a>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p class='text-center text-white pt-3'>
                    خدمة متكاملة لتعليم القُرآن الكريم وعلومه عن بُعد (أونلاين) للكبار والصغار ومنح الإجازات القرآنية.
                </p>
            </div>
        </div>
        <div class="row text-center pt-2 justify-content-center">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <h4 class='mb-3 h5 text-white '> روابط سريعة </h4>
                        <div class="row">
                            <div class="col-md-4 col-4  ">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href="#"> الرئيسية </a></li>
                                        <li><a href="#"> إتصل بنا </a></li>
                                        <li><a href="#"> المرئيات </a></li>
                                        <li><a href="#"> المعلمون </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href="">من نحن</a></li>
                                        <li><a href="">الرؤية والرسالة</a></li>
                                        <li><a href="">الكورسات</a></li>
                                        <li><a href="">المواد الدراسية</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href=""> الأسعار </a></li>
                                        <li><a href=""> الأخبار </a></li>
                                        <li><a href="">إنضم لعائلتنا</a></li>
                                        <li><a href="">إشترك الأن </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget-footer widget-social">
                            <h4 class='mb-3 h5 text-white mt-md-0 mt-4'>تابعنا على مواقع التواصل الإجتماعي</h4>
                            <ul>
                                <li><a href="#"> <i class="fa-brands fa-whatsapp"></i> </a></li>
                                <li><a href="#"> <i class="fa-brands fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa-brands fa-youtube"></i> </a></li>
                                <li><a href="#"> <i class="fa-brands fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa-brands fa-square-facebook"></i> </a></li>
                            </ul>
                            <p class='text-white mb-2  '> جميع الحقوق محفوظة لأكاديمية تواقة </p>
                            <a href="https://www.akwade.com" target="_blank"
                                class="logo-akwade d-flex text-decoration-none align-items-center justify-content-center">
                                <span class='text-white'>تصميم وتطوير أكوادي</span>
                                <img src="{{ asset('website/assets/img/logo_akwade.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('website/assets/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
<script src="{{ asset('website/assets/js/datepicker.min.js') }}"></script>
<script src="{{ asset('website/assets/js/main.js') }}"></script>

{{-- Qualification --}}
@stack('scriptrepeater')
@stack('teacher-video-audio-script')


</body>

</html>
