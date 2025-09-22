<?php

namespace App\Livewire\Meetings;

use Livewire\Attributes\Rule;
use Livewire\Component;

class MeetingForm extends Component
{
    #[Rule('required|string|min:5')]
    public string $title = '';

    #[Rule('required|string')]
    public string $date = '';

    #[Rule('required|string')]
    public string $time = '';

    #[Rule('nullable|string')]
    public string $participants = '';

    #[Rule('nullable|string')]
    public string $notes = '';

    public bool $showConfirmation = false;

    public function schedule(): void
    {
        $this->validate();

        $this->reset(['title', 'date', 'time', 'participants', 'notes']);
        $this->showConfirmation = true;

        $this->dispatch('meeting-scheduled');
    }

    public function render()
    {
        return view('livewire.meetings.meeting-form');
    }
}
