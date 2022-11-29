@extends('Website.partials.layout')
@section('title', __('Qualifications'))
@section('content')
    @push('livewire-styles')
        @livewireStyles()
    @endpush
    <div class="page page-data mb-5">

        @include('Website.partials.header-heading-page')

        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.teacher-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user ">
                            @include('Website.partials.data-user')
                        </div>

                        <div class="profile-data-user-boxes content-user mt-5">
                            <h3 class="h4 mb-3"> المؤهلات الدراسية <span class='badge bg-secondary show-create-form'> انشاء
                                    جديد </span> </h3>
                            <form action="{{ route('teacher.store', 'qualifications') }}" method="POST"
                                class="repeater create-form mb-1">

                                @csrf

                                {{-- Submit Button --}}
                                <div class="heading d-flex justify-content-end align-items-center mb-2">
                                    <div class="icons-data-user d-flex">
                                        <button type="submit" class='btn-green ms-1 text-white'> حفظ </button>
                                        <div class="icon add icon-edit" data-repeater-create>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.99984 1.6665C10.4601 1.6665 10.8332 2.0396 10.8332 2.49984V9.1665H17.4998C17.9601 9.1665 18.3332 9.5396 18.3332 9.99984C18.3332 10.4601 17.9601 10.8332 17.4998 10.8332H10.8332V17.4998C10.8332 17.9601 10.4601 18.3332 9.99984 18.3332C9.5396 18.3332 9.1665 17.9601 9.1665 17.4998V10.8332H2.49984C2.0396 10.8332 1.6665 10.4601 1.6665 9.99984C1.6665 9.5396 2.0396 9.1665 2.49984 9.1665H9.1665V2.49984C9.1665 2.0396 9.5396 1.6665 9.99984 1.6665Z"
                                                    fill="#6F7094" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                                <div class="bg-white border rounded-3 ">
                                    <div data-repeater-list="qualifications-group">
                                        <div data-repeater-item class='border-bottom p-3'>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id" id="cat-id" placeholder='' />
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <input type="text" name="qualification_degree"
                                                                class='form-control mb-2'
                                                                placeholder='درجة المؤهل الدراسي' />
                                                        </div>

                                                        <div class="col-6">
                                                            <input type="text" name="specialization"
                                                                class='form-control mb-2' placeholder='التخصص' />
                                                        </div>

                                                        <div class="col-6">
                                                            <input type="text" name="university"
                                                                class='form-control mb-2' placeholder='الجامعة' />
                                                        </div>

                                                        <div class="col-6">
                                                            <select name="country_id" id="country_id"
                                                                style=" border: 1px solid #EEE !important; padding: 6px !important; box-shadow: none !important; font-size: 14px;">
                                                                @foreach (getCountries() as $country)
                                                                    <option value="{{ $country->id }}">
                                                                        {{ $country->country_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-6">
                                                            <input type="text" name="year" class='form-control mb-2'
                                                                placeholder='السنة' />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class='delete' data-repeater-delete type="button">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            @foreach ($qualifications as $qualification)
                                @livewire('teach.qualifications', ['qualification_id' => $qualification->id])
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->

    @push('scriptrepeater')
        @livewireScripts()
        <script src='{{ asset('website/assets/js/repeater.js') }}'></script>
    @endpush
@endsection
