@extends('Website.partials.layout')
@section('title', __('Twaqa Sign Up'))
@section('content')
    @push('livewire-styles')
        @livewireStyles()
    @endpush

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

        @livewire('twaqa.sign-up')

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

    @push('livewire-scripts')
        @livewireScripts()
    @endpush

    {{--    @push('signUp')
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
    @endpush --}}
@endsection
