@extends('Website.partials.layout')
@section('title', __('Home - Account Information'))
@section('content')
    @push('livewire-styles')
        @livewireStyles()
    @endpush
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
                        <div class="profile-data-user">
                            @include('Website.partials.std-data-user')
                        </div>


                        @livewire('std.account')

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->
    @push('livewire-scripts')
        @livewireScripts()
    @endpush
@endsection
