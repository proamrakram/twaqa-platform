<footer class="footer pt-5 pb-2">
    <div class="container">
        <a href="#" class="logo d-block text-center mt-5">
            <br>
            <img src="{{ asset('website/assets/img/logo_white.svg') }}" alt="">
        </a>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p class='text-center text-white pt-3'>
                    {{ __('An integrated service for teaching the Holy Qur’an and its sciences from a distance (online) for adults and children and granting Qur’anic licenses.') }}
                </p>
            </div>
        </div>
        <div class="row text-center pt-2 justify-content-center">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <h4 class='mb-3 h5 text-white '> {{ __('Quick links') }}</h4>
                        <div class="row">
                            <div class="col-md-4 col-4  ">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href="{{ route('home') }}"> {{ __('Main') }}</a></li>
                                        <li><a href="{{ route('contact_us') }}"> {{ __('Call Us') }} </a></li>
                                        <li><a href="{{ route('vid_watch') }}"> {{ __('Vid_Watch') }} </a></li>
                                        <li><a href="{{ route('teachers') }}"> {{ __('Teachers') }} </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href="{{ route('about.us') }}">{{ __('Who We Are') }}</a></li>
                                        <li><a href="{{ route('vision.mision') }}">{{ __('Vision and Mission') }}</a>
                                        </li>
                                        <li><a href="{{ route('courses') }}">{{ __('Courses') }}</a></li>
                                        <li><a href="#">{{ __('Subjects') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="widget-footer">
                                    <ul>
                                        <li><a href="{{ route('packages') }}">{{ __('Packages') }} </a></li>
                                        <li><a href="{{ route('admin.teachers.new') }}"> {{ __('News') }} </a></li>
                                        <li><a href="">{{ __('Join Our Family') }}</a></li>
                                        <li><a href="">{{ __('Subscribe Now') }} </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="widget-footer widget-social">
                            <h4 class='mb-3 h5 text-white mt-md-0 mt-4'>{{ __('Follow us on social media') }}</h4>
                            <ul>
                                @if (getLink('whatsapp'))
                                    <li>
                                        <a target="_blank" href="{{ getLink('whatsapp') }}">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                @endif

                                @if (getLink('twitter'))
                                    <li>
                                        <a target="_blank" href="{{ getLink('twitter') }}">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                @endif


                                @if (getLink('youtube'))
                                    <li>
                                        <a target="_blank" href="{{ getLink('youtube') }}">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                @endif

                                @if (getLink('instagram'))
                                    <li>
                                        <a target="_blank" href="{{ getLink('instagram') }}">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                @endif

                                @if (getLink('facebook'))
                                    <li>
                                        <a target="_blank" href="{{ getLink('facebook') }}">
                                            <i class="fa-brands fa-square-facebook"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                            <p class='text-white mb-2  '> {{ __('All rights reserved to Tawaqa Academy') }}</p>
                            <a href="https://www.akwade.com" target="_blank"
                                class="logo-akwade d-flex text-decoration-none align-items-center justify-content-center">
                                <span class='text-white'>{{ __('Designed and developed by Akwady') }}</span>
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
@stack('teacher-courses-scripts')
@stack('signUp')
@stack('calander-lessons-scripts')
@stack('std-teacher-quran')
@stack('livewire-scripts')



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />

</body>

</html>
