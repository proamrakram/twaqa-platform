<div class="profile-data pt-5 page-register" wire:ignore.self>
    <div class="container" wire:ignore.self>
        <div class="row justify-content-center" wire:ignore.self>
            <div class="col-md-6" wire:ignore.self>
                <div class="p-md-4 p-3 rounded-lg shadow-sm bg-white" wire:ignore.self>
                    <h4 class='text-center mb-4 clr-royal-blue' wire:ignore.self> {{ __('Sign In') }}</h4>
                    {{-- <form action="{{ route('login') }}" method="POST">
                        @csrf --}}
                    <div class="row g-3" wire:ignore.self>

                        <div class="col-12" wire:ignore.self>

                            <label for="">{{ __('Email') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="email" wire:model="email" name="email" class='input-style'>

                            @error('email')
                                <small class="text-danger"> <strong> {{ $message }}</strong></small>
                            @enderror

                        </div>

                        <div class="col-12 position-relative reset-password">
                            <label for="">{{ __('Password') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="password" wire:model="password" name="password" class='input-style'>

                            <i
                                class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>

                            @error('password')
                                <small class="text-danger"><strong> {{ $message }} </strong></small>
                            @enderror
                            <div></div>
                            @if ($check)
                                <small class="text-danger"><strong> {{ $check }} </strong></small>
                            @endif
                        </div>

                        <div class="col-12 text-center d-block">
                            <button type="button" wire:click='submit' class="btn-green ms-2 text-white p-3"
                                wire:ignore.self>
                                <i class="fa-solid fa-arrow-right-to-bracket ms-2"></i> {{ __('Sign In') }}
                            </button>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
