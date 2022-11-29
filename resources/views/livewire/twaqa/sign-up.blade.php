<div class="profile-data pt-5 page-register" wire:ignore.self>
    <div class="container" wire:ignore.self>
        <div class="row justify-content-center" wire:ignore.self>
            <div class="col-md-6" wire:ignore.self>
                <div class="p-md-4 p-3 rounded-lg shadow-sm bg-white" wire:ignore.self>
                    <h4 class='text-center mb-4 clr-royal-blue' wire:ignore.self> {{ __('New Sign Up') }} </h4>


                    <div class="row g-3">
                        <div class="col-6">

                            <label for=""> {{ __('First Name') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="text" wire:model="first_name" value="{{ old('first_name') }}"
                                class='input-style'>

                            @error('first_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-6">

                            <label for=""> {{ __('Second Name') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="text" wire:model="second_name" value="{{ old('second_name') }}"
                                class='input-style'>

                            @error('second_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-md-12">

                            <label for=""> {{ __('Gender') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <select wire:model="gender" id="gender" class="input-style">
                                <option value="male">{{ __('Male') }}</option>
                                <option value="female">{{ __('Female') }}</option>
                            </select>

                            @error('gender')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-6">
                            <label for=""> {{ __('Country') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>
                            <select wire:model="country_id" class="input-style" wire:ignore.self>
                                @foreach (getCountries() as $country)
                                    <option value="{{ $country->id }}" wire:click='submit'>
                                        {{ $country->country_name }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label for=""> {{ __('City') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <select wire:model="city_id" id="city_id" class="input-style">
                                {{-- <option value="">{{ __('Choose Country First') }}</option> --}}
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                @endforeach
                            </select>

                            @error('city_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6">

                            <label for=""> {{ __('Email') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="text" wire:model="email" value="{{ old('email') }}" class='input-style'>

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-6">

                            <label for=""> {{ __('Age') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="number" wire:model='age' value="{{ old('age') }}" min="10"
                                max="60" value="15" class='input-style'>

                            @error('age')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-12">

                            <label for="user_type"> {{ __('Register As') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <select wire:model="user_type" id="user_type" class="select2 input-style">
                                <option value="student" selected>{{ __('Student') }}</option>
                                <option value="teacher">{{ __('Teacher') }}</option>
                            </select>

                            @error('user_type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="col-6 position-relative reset-password">

                            <label for=""> {{ __('Password') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="password" wire:model="password" class='input-style'>

                            <i
                                class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>


                        <div class="col-6 position-relative reset-password">
                            <label for=""> {{ __('Confirm Password') }}
                                <span class='star'>
                                    <i class="fa-solid fa-star-of-life"></i>
                                </span>
                            </label>

                            <input type="password" wire:model='password_confirmation' class='input-style'>
                            <i
                                class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-12">
                            <p class='text-center'>
                                {{ __('By creating an account, you agree to our User Agreement and acknowledge that we have read our User Privacy Notice.') }}
                            </p>
                        </div>

                        <a class='text-dark text-decoration-none btn-have-account' href="{{ route('signin') }}">
                            {{ __('Sign In') }}
                        </a>

                        <div class="col-12 text-center">
                            <button type="button" wire:click='submit' class="btn-green ms-2 text-white p-3 d-block w-100"> <i
                                    class="fa-regular fa-user ms-2"></i> {{ __('Create a new account') }}
                            </button>
                        </div>

                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
