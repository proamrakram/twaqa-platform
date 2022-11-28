@extends('Website.partials.layout')
@section('title', 'بيانات الحساب')
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

                        @livewire('teach.account')


                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->
    @push('livewire-scripts')
        @livewireScripts()
    @endpush
@endsection
