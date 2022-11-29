@extends('Website.partials.layout')
@section('title',  __('Teacher Quran'))
@section('content')

    <div class="page page-data page-std mb-5">

        @include('Website.partials.header-heading-page')

        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.std-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user-boxes content-user position-relative">

                            <div class="heading-player">
                                <div class="row">

                                    <div class="col">
                                        <div class="reciters">
                                            <label for=""> اختر القارىء </label>
                                            <select name="" id="" class='select-form bg-white select2 '>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="suraha">
                                            <label for=""> اختر السورة </label>
                                            <select name="" id=""
                                                class='select-form bg-white select2'></select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ayahCount">
                                            <label for=""> اختر رقم الاية </label>
                                            <select name="" id=""
                                                class='select-form bg-white select2'></select>
                                        </div>
                                    </div>

                                </div>


                                <div class="loadingBox">
                                    <i class="fa-solid fa-circle-notch fa-spin"></i>
                                </div>
                            </div>


                            <div class="audioPlay py-5">
                                <audio src="" id="audioPlay" loop></audio>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->



    @push('std-teacher-quran')
        <script>
            getSuwar()

            function getSuwar() {

                $('.loadingBox').show();

                fetch('https://quran-endpoint.vercel.app/imam')
                    .then(response => response.json())
                    .then(reciters => {

                        $('.loadingBox').fadeOut();

                        reciters['data'].forEach((item, index) => {

                            // console.log(item.id)
                            reciterID = item.id;
                            reciterName = item.name;

                            $reciters = `<option value='${reciterID}'>   ${reciterName} </option> `;

                            $('.reciters select').append($reciters)

                        })

                        fetch("https://quran-endpoint.vercel.app/quran")
                            .then(response => response.json())
                            .then(quran => {

                                //  console.log(quran)
                                quran['data'].forEach((item, index) => {

                                    quranName = item['asma']['ar']['long'];

                                    quranAuhayId = item['number'];

                                    ayahCount = item['ayahCount'];

                                    $surahas =
                                        `<option value='${quranAuhayId}' data-ayahacount='${ayahCount}'>   ${quranName} </option> `;

                                    $('.suraha select').append($surahas)

                                })

                                $('body').on('change', '.reciters select', function() {
                                    $('.heading-player .suraha').fadeIn();
                                });

                            })



                        $('body').on('change', '.suraha select', function() {

                            $thisCount = $(this).find('option:selected').data('ayahacount');

                            $('.ayahCount select option').remove();
                            $('.ayahCount select option').text('اختر رقم الاية');


                            for (let i = 1; i <= $thisCount; i++) {
                                $ayahCounts = `<option value='${i}'>   ${i} </option> `;

                                $('.ayahCount select').append($ayahCounts)
                            }

                            $('.heading-player .ayahCount').fadeIn();

                        });


                        $('body').on('change', '.ayahCount select', function() {
                            $thisNumber = $(this).val();
                            $recitersID = $('.reciters select option:selected').val();
                            $surahaID = $('.suraha select option:selected').val();

                            // console.log(`https://quran-endpoint.vercel.app/quran/${$surahaID}/${$thisNumber}?imamId=${$recitersID}`)
                            $('.loadingBox').fadeIn();

                            fetch(
                                    `https://quran-endpoint.vercel.app/quran/${$surahaID}/${$thisNumber}?imamId=${$recitersID}`
                                )
                                .then(response => response.json())
                                .then(quran => {
                                    $('.loadingBox').fadeOut();

                                    $(".audioPlay").fadeIn();

                                    Object.keys(quran).forEach(key => {
                                        $urlAudio = quran['data']['ayah']['audio']['url'];

                                        $("#audioPlay").attr('src', $urlAudio)
                                    });
                                });
                        });
                    })
            }
        </script>
    @endpush

@endsection
