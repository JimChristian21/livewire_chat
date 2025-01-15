<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class ChatBox extends Component
{
    public $body;
    public $selectedConversation;

    public function sendMessage()
    {
        dd('test');
    }

    public function render()
    {
        return view('livewire.chat.chat-box')->with(
            ['body' => $this->body]
        );
    }
}
