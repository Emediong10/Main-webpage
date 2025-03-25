<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class EventComment extends Component
{
    use WithPagination;

    public $event;
    public $name;
    public $comment;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function submitComment()
    {
        $this->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'name' => $this->name,
            'comment' => $this->comment,
            'event_id' => $this->event->id,
        ]);


    }

    public function render()
    {
        return view('livewire.event-comment',

        [
            'comments' => Comment::where('event_id', $this->event->id)->latest()->paginate(2),
        ]);
    }
}
