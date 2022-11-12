@extends('Website.partials.layout')
@section('content')
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
                                                            <select name="country_id" id="country_id">
                                                                <option value="1">دبي</option>
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
                                <form action="{{ route('teacher.update', ['update-qualification', $qualification->id]) }}"
                                    method="POST" class="box-about-teacher bg-white border rounded-3 p-4 mb-3 update-form">
                                    @csrf
                                    <div class="d-flex border-bottom pb-3 mb-3">

                                        <div class="icon ms-3">
                                            <svg id="Capa_1" enable-background="new 0 0 512 512" height="30"
                                                viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="m501.689 120.505-237.373-118.555c-5.208-2.599-11.425-2.599-16.633 0l-175.475 87.641c-3.705 1.85-5.209 6.355-3.358 10.061 1.85 3.703 6.354 5.207 10.06 3.358l175.476-87.641c1.012-.506 2.218-.506 3.229 0l237.372 118.556c1.233.615 1.999 1.854 1.999 3.232v20.645c0 2.685-2.812 4.442-5.228 3.232l-227.442-113.595c-5.208-2.599-11.425-2.599-16.633 0l-227.441 113.595c-2.422 1.212-5.228-.554-5.228-3.232v-20.645c0-1.378.766-2.617 1.999-3.232l30.518-15.242c3.705-1.85 5.209-6.355 3.358-10.061-1.85-3.704-6.355-5.21-10.06-3.358l-30.518 15.242c-6.351 3.173-10.296 9.553-10.296 16.651v20.645c0 13.848 14.565 22.822 26.929 16.651l2.509-1.253v8.912c0 9.607 6.383 17.746 15.129 20.414v250.656c-8.746 2.668-15.129 10.807-15.129 20.414v26.825c0 6.385 5.195 11.579 11.58 11.579h429.935c6.385 0 11.58-5.194 11.58-11.579v-26.825c0-9.607-6.383-17.746-15.129-20.414v-18.03c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v17.102h-31.916v-248.8h31.916v196.636c0 4.142 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-197.564c8.746-2.668 15.129-10.807 15.129-20.414v-8.912l2.509 1.253c2.647 1.322 5.492 1.978 8.328 1.978 9.887-.003 18.601-7.98 18.601-18.63v-20.645c-.001-7.098-3.946-13.478-10.297-16.651zm-247.304-59.647c1.012-.506 2.218-.506 3.229 0l159.601 79.712c-11.262 0-311.214 0-322.431 0zm135.99 94.712v26.251h-268.75v-26.251zm-345.923 26.542v-16.403l20.301-10.14h41.873v26.542c0 3.498-2.846 6.343-6.343 6.343h-49.487c-3.498.001-6.344-2.844-6.344-6.342zm47.045 21.342v248.799h-31.916v-248.799zm15.129 293.547h-62.174v-23.405c0-3.498 2.846-6.343 6.344-6.343h49.487c3.498 0 6.343 2.846 6.343 6.343zm283.749-23.405v23.405h-268.75v-23.405c0-.967-.087-1.913-.213-2.846h269.175c-.125.933-.212 1.879-.212 2.846zm9.67-17.846h-288.09c-1.673-1.098-3.505-1.972-5.459-2.568v-250.656c3.555-1.084 6.709-3.081 9.213-5.706h280.582c2.504 2.625 5.657 4.621 9.213 5.706v250.656c-1.954.596-3.786 1.47-5.459 2.568zm61.159 11.503c3.498 0 6.344 2.846 6.344 6.343v23.405h-62.174v-23.405c0-3.498 2.846-6.343 6.343-6.343zm6.344-285.141c0 3.498-2.846 6.343-6.344 6.343h-49.487c-3.498 0-6.343-2.846-6.343-6.343v-26.542h41.873l20.301 10.14z">
                                                            </path>
                                                            <path
                                                                d="m157.261 295.816c.79 4.067 4.73 6.717 8.792 5.931 13.927-2.705 35.308-3.988 58.086 5.268 3.816 1.551 8.204-.267 9.771-4.124 1.559-3.838-.287-8.212-4.124-9.772-26.193-10.646-50.671-9.191-66.594-6.096-4.066.791-6.721 4.727-5.931 8.793z">
                                                            </path>
                                                            <path
                                                                d="m229.787 336.994c-26.19-10.645-50.67-9.19-66.595-6.096-4.066.79-6.721 4.726-5.931 8.792.79 4.067 4.73 6.725 8.792 5.931 13.926-2.707 35.308-3.99 58.085 5.268 3.823 1.553 8.206-.273 9.771-4.124 1.561-3.837-.285-8.212-4.122-9.771z">
                                                            </path>
                                                            <path
                                                                d="m348.808 287.024c-15.922-3.095-40.401-4.549-66.594 6.096-3.837 1.559-5.684 5.934-4.124 9.772 1.567 3.854 5.951 5.677 9.771 4.124 22.778-9.258 44.16-7.974 58.086-5.268 4.065.792 8.002-1.865 8.792-5.931.79-4.067-1.865-8.003-5.931-8.793z">
                                                            </path>
                                                            <path
                                                                d="m348.808 330.897c-15.924-3.095-40.403-4.549-66.595 6.096-3.837 1.559-5.683 5.934-4.123 9.772 1.568 3.857 5.954 5.676 9.771 4.124 22.776-9.259 44.159-7.974 58.086-5.268 4.065.794 8.002-1.864 8.792-5.931.79-4.066-1.865-8.003-5.931-8.793z">
                                                            </path>
                                                            <path
                                                                d="m371.339 225.167c-18.68-6.033-66.577-16.5-115.339 13.116-48.763-29.617-96.66-19.151-115.339-13.116-7.521 2.43-12.574 9.372-12.574 17.276v164.805c0 11.936 11.295 20.626 22.822 17.543 17.62-4.719 52.633-9.853 89.16 8.78 4.744 2.421 9.927 3.675 15.131 3.793.263.028.53.044.8.044s.537-.016.8-.044c5.203-.118 10.386-1.372 15.131-3.793 36.525-18.632 71.539-13.497 89.159-8.781 11.524 3.091 22.823-5.606 22.823-17.542v-164.805c.001-7.903-5.052-14.846-12.574-17.276zm-122.839 195.769c-.546-.22-1.087-.456-1.616-.726-22.207-11.328-43.875-14.838-62.205-14.838-15.505 0-28.624 2.513-37.651 4.93-1.989.527-3.943-.973-3.943-3.055v-164.805c0-1.374.878-2.581 2.185-3.004 16.72-5.4 59.636-14.772 103.23 11.845zm120.414-13.688c0 2.08-1.957 3.586-3.944 3.054-19.698-5.273-58.865-11-99.855 9.909-.529.27-1.07.506-1.616.726v-169.653c43.594-26.617 86.509-17.245 103.23-11.845 1.307.423 2.185 1.63 2.185 3.004z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>

                                        <div class="text d-flex justify-content-between w-100 repeater-edit">

                                            <div class="inputs w-75">
                                                <input class="h5 clr-royal-blue mb-1 form-input" name="qualification_degree"
                                                    value="{{ $qualification->qualification_degree }}" disabled>

                                                <input class="form-input" name="specialization"
                                                    value="{{ $qualification->specialization }}" disabled>
                                                <input class="form-input" name="university"
                                                    value="{{ $qualification->university }}" disabled>
                                                <input class="fw-bold gray-clr font-number form-input" name="year"
                                                    value="{{ $qualification->year }}" disabled>
                                            </div>


                                            <div class="btns d-flex align-items-start">
                                                <button type="submit" class='btn-green ms-1 text-white btn-none'> حفظ
                                                </button>
                                                <a href="{{ route('teacher.delete', ['qualifications', $qualification->id]) }}"
                                                    class='delete ms-1' type="button">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                                <div class="icon icon-edit-repeater">
                                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.42683 16.5077C1.5224 16.6788 0.650504 16.0844 0.479396 15.1799C0.440663 14.9752 0.440663 14.765 0.479396 14.5603L1.02937 11.6533C1.09163 11.3242 1.25162 11.0215 1.48847 10.7846L11.2529 1.02019C11.7602 0.512922 12.5351 0.387164 13.1768 0.707988L13.818 1.02863C14.7443 1.49176 15.4954 2.24282 15.9585 3.16908L16.2791 3.81037C16.6 4.45201 16.4742 5.22697 15.9669 5.73423L6.20252 15.4987C5.96567 15.7355 5.66295 15.8955 5.33383 15.9578L2.42683 16.5077ZM10.7943 3.83701L13.1513 6.19403L14.7884 4.55572L14.4678 3.91443C14.1659 3.31072 13.6764 2.8212 13.0727 2.51935L12.4314 2.1987L10.7943 3.83701ZM2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                            fill="#6F7094" />
                                                        <path
                                                            d="M2.62837 12.1703L4.81805 14.3599L5.02401 14.3201L11.9728 7.37254L9.61577 5.01552L2.66698 11.9631L2.62837 12.1703Z"
                                                            fill="#6F7094" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- End  Box -->
                                </form>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->

    @push('scriptrepeater')
        <script src='{{ asset('website/assets/js/repeater.js') }}'></script>
    @endpush
@endsection
