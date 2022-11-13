<div class="profile-data-user-boxes content-user mt-5" wire:ignore.self>
    <ul class="list-unstyled p-0 d-flex flex-column col bg-white rounded" data-text-success='تم الرفع بنجاح' id="files"
        wire:ignore>
        <!-- <li class="text-muted text-center empty">No files uploaded.</li> -->
    </ul>

    <div class="bg-white border rounded-3 mb-3" wire:ignore.self>
        <div class="d-flex align-items-center justify-content-between border-bottom p-4 uploade-file" wire:ignore.self>
            <h5 class='mb-0'>فيديو تعريفي</h5>
            <div class="d-flex align-items-center" wire:ignore.self>
                <select name="" id="" class='upload-media' wire:ignore.self>
                    <option value="insert-url"> وضع رابط </option>
                    <option value="upload-url"> رفع فيديو </option>
                </select>

                <div class="insert-url position-relative hide-box ms-4" wire:ignore.self>
                    <input type="text" placeholder='قم بوضع الرابط' wire:model='video_link'>
                </div>

                <div id="" class="drag-and-drop-zone dm-uploader upload-url hide-box ms-4" wire:ignore.self>
                    <input type="file" title='Click to add Files' data-type='video' wire:model='video' />
                    <span class='text position-absolute top-50 start-0 translate-middle-y d-flex align-items-center'
                        wire:ignore>
                        <i class="fa-brands fa-youtube ms-1"></i>
                        رفع فيديو
                    </span>
                    @error('video')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button class="btn btn-sm btn-success" wire:click='saveVideo'>حفظ</button>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between border-bottom p-4 uploade-file" wire:ignore.self>
            <h5 class='mb-0'> ملف صوتي </h5>
            <div class="d-flex align-items-center" wire:ignore.self>
                <select name="" id="" class='upload-media' wire:ignore.self>
                    <option value="insert-url"> وضع رابط </option>
                    <option value="upload-url"> رفع ملف صوتي </option>
                </select>
                <div class="insert-url position-relative hide-box ms-4">
                    <input type="text" placeholder='قم بوضع الرابط' wire:model='audio_link'>
                </div>
                <div id="" class="drag-and-drop-zone dm-uploader upload-url hide-box ms-4" wire:ignore.self>
                    <input type="file" title='Click to add Files' data-type='audio' wire:model='audio' />
                    <span class='text position-absolute top-50 start-0 translate-middle-y d-flex align-items-center'
                        wire:ignore>
                        <i class="fa-solid fa-microphone ms-1"></i>
                        رفع ملف صوتي
                    </span>
                </div>
                <div>
                    <button class="btn btn-sm btn-success" wire:click='saveAudio'>حفظ</button>
                </div>
            </div>
        </div>
    </div>


</div>
