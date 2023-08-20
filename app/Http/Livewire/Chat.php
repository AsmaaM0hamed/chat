<?php

namespace App\Http\Livewire;

use App\Models\msg;
use Livewire\Component;

class Chat extends Component
{

    public $messageText;

    public function render()
    {
        $messages = msg::with('user')->latest()->take(10)->get()->sortBy('id');

        return view('livewire.chat', compact('messages'));
    }

    public function sendMessage()
    {
        msg::create([
            'user_id' => auth()->user()->id,
            'MsgText' => $this->messageText,
        ]);

        $this->reset('messageText');
    }
}
