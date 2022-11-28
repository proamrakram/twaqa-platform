<?php

namespace App\Http\Livewire\Teach;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeacherVideoAudio extends Component
{
    use WithFileUploads;

    public $video;
    public $audio;

    public $video_link;
    public $audio_link;

    public function render()
    {
        return view('livewire.teach.teacher-video-audio');
    }

    public function saveVideo()
    {
        dd($this->video, $this->video_link);
        if ($this->video) {
            foreach ($this->video as $video) {
                $video->store('public');
            }
        }

        if ($this->video_link) {
            $user = auth()->user();
            if ($user) {
                $user = User::find($user->id);
                $user->update([
                    'video_link' => $this->video_link
                ]);
            }
        }
    }

    public function saveAudio()
    {
        dd($this->audio, $this->audio_link);

        if ($this->audio) {
            foreach ($this->audio as $audio) {
                $audio->store('public');
            }
        }

        if ($this->audio_link) {
            $user = auth()->user();
            if ($user) {
                $user = User::find($user->id);
                $user->update([
                    'audio_link' => $this->audio_link
                ]);
            }
        }
    }
}
