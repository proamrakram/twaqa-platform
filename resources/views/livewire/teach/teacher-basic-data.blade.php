<div class="profile-data-user-boxes content-user mt-5" wire:ignore.self>

    <div class="box mb-4" wire:ignore.self>

        @csrf

        <div class="heading d-flex justify-content-between align-items-center mb-2">
            <h3 class="h4 mb-0"> البيانات الأساسية </h3>
            <div class="d-flex">

                @if ($edit_1)
                    <button type="submit" class='btn-green ms-1 text-white' wire:click='storeBasicData'> حفظ </button>
                @endif

                <div class="icon icon-edit" wire:click='edit(1)'>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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


        <div class="bg-white rounded-lg">

            <div class="input border-bottom p-3">
                <label for=""> الإسم </label>
                <input type="text" class='form-input {{ $edit_1 }}' wire:model='full_name'>
                @error('full_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input border-bottom p-3">
                <label for="gender"> الجنس </label>
                <select wire:model='gender' class='form-input {{ $edit_1 }}'>
                    <option value="male">ذكر </option>
                    <option value="female">أنثي</option>
                </select>
                @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input border-bottom p-3">
                <label for="description"> وصف قصير </label>
                <textarea wire:model='description' class='form-input {{ $edit_1 }}'></textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input border-bottom p-3">
                <label for="birthday"> تاريح الميلاد </label>
                <input type="date" wire:model='birthday' value='Fri Sep 16 2022'
                    class='form-input {{ $edit_1 }} font-number'
                    @if (!$edit_1) disabled @endif>

                @error('birthday')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>
            <div class="input border-bottom p-3">
                <label for="age"> العمر </label>
                <input type="number" wire:model='age' class='form-input {{ $edit_1 }}'>
                @error('age')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="input border-bottom p-3">
                <label for="position"> الوظيفة </label>
                <input type="text" wire:model='position' class='form-input {{ $edit_1 }}'>
                @error('position')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

    </div>
    <!-- End Box -->

    <div class="box mb-4">

        @csrf

        <div class="heading d-flex justify-content-between align-items-center mb-2">
            <h3 class="h4 mb-0" id='editProfileImage'> الصورة الشخصية </h3>
            <div class="d-flex">
                @if ($edit_2)
                    <button type="submit" class='btn-green ms-1 text-white' wire:click="storeImage" wire:ignore.self>
                        حفظ </button>
                @endif

                <div class="icon icon-edit edit-img-profile" wire:click='edit(2)'>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

        <div class="bg-white rounded-lg p-3 text-center text-md-end" wire:ignore.self>
            <div class="row img-user align-items-center" wire:ignore.self>

                <div class="col-md-4" wire:ignore.self>
                    <div class="img" wire:ignore.self>
                        <img src="{{ $user->img }}" alt="" class='rounded-3 img-fluid' wire:ignore.self>
                    </div>
                </div>


                <div class="col-md-8 mt-3 mt-md-0 uploade-new-img" wire:ignore.self>
                    <label for="fusk" class='border p-3 d-inline-block rounded' wire:ignore.self>
                        @if ($edit_2)
                            <i class="fa-solid fa-upload ms-2"></i>
                            تعديل الصورة الشخصية ...
                        @endif
                    </label>
                    <input id="fusk" type="file" wire:model="photo" wire:ignore.self>
                </div>

            </div>

        </div>
    </div> <!-- End Box -->




    <div class="box mb-4">

        <div class="heading d-flex justify-content-between align-items-center mb-2">
            <h3 class="h4 mb-0"> بيانات الإتصال </h3>
            <div class="d-flex">

                @if ($edit_3)
                    <button type="button" class='btn-green ms-1 text-white' wire:click="storeCalling" wire:ignore.self>
                        حفظ </button>
                @endif

                <div class="icon icon-edit" wire:click='edit(3)'>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

        <div class="bg-white rounded-lg">
            <div class="input border-bottom p-3">
                <label for="phonenumber"> رقم الهاتف (رئيسي) </label>
                <input type="tel" wire:model='phonenumber' class='form-input font-number {{ $edit_3 }}'>
                @error('phonenumber')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="input border-bottom p-3">
                <label for="phonenumber2"> رقم الهاتف (ثانوي) </label>
                <input type="tel" wire:model='phonenumber2' class='form-input font-number {{ $edit_3 }}'>
                @error('phonenumber2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

    </div>
    <!-- End Box -->


    <div class="box mb-4">
        <div class="heading d-flex justify-content-between align-items-center mb-2">
            <h3 class="h4 mb-0"> روابط التواصل الإجتماعي </h3>

            <div class="d-flex">
                @if ($edit_4)
                    <button type="submit" class='btn-green ms-1 text-white' wire:click='storeLinks'
                        wire:ignore.self>
                        حفظ </button>
                @endif

                <div class="icon icon-edit" wire:click='edit(4)'>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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


        <div class="bg-white rounded-lg">

            <div class="input border-bottom p-3 input-icon position-relative">
                <label for=""> رابط صفحة الفيسبوك </label>
                <input type="text" wire:model="facebook" class='form-input font-number {{ $edit_4 }}'>
                <i
                    class="fa-brands fa-square-facebook position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
            </div>
            @error('facebook')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input border-bottom p-3 input-icon position-relative">
                <label for=""> رابط صفحة التويتر</label>
                <input type="text" wire:model="twitter" class='form-input font-number {{ $edit_4 }}'>
                <i class="fa-brands fa-twitter position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
            </div>

            @error('twitter')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input border-bottom p-3 input-icon position-relative">
                <label for=""> رابط الواتساب </label>
                <input type="text" wire:model="whatsapp" class='form-input font-number {{ $edit_4 }}'>
                <i
                    class="fa-brands fa-square-whatsapp position-absolute top-50 start-0 translate-middle-y ms-3 gray-clr"></i>
            </div>

            @error('whatsapp')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
    </div> <!-- End Box -->

</div>
