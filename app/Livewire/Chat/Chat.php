<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;

class Chat extends Component
{
    public $query;
    public $selectedConverstation;

    public function mount()
    {
        $this->selectedConverstation = Conversation::findOrFail($this->query);
    }
    
    public function render()
    {
        return view('livewire.chat.chat', [
            'selectedConversation' => $this->selectedConverstation
        ]);
    }
}
