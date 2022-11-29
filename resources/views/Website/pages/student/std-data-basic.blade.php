@extends('Website.partials.layout')
@section('title', __('Personal Data'))
@section('content')
    @push('livewire-styles')
        @livewireStyles()
    @endpush



    <div class="page page-data mb-5 page-std">
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
                        <div class="profile-data-user ">
                            @include('Website.partials.std-data-user')
                        </div>

                        @livewire('std.student-basic-data')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page -->
    @push('livewire-scripts')
        @livewireScripts()
    @endpush
@endsection
