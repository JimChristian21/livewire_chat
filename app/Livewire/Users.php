<?php

namespace App\Livewire;

use App\Models\Conversation;
use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public function message(int $userId)
    {
        $authenticatedUserId = auth()->id();

        $existingConversation = Conversation::where(function ($query) use($authenticatedUserId, $userId) {
            $query->where('sender_id', $authenticatedUserId)
                ->where('receiver_id', $userId);
        })->orWhere(function ($query) use($authenticatedUserId, $userId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', $authenticatedUserId);
        })->first();

        if ($existingConversation) 
        {
            return redirect()->route('chat', ['query' => $existingConversation->id]);
        }

        $createdConversation = Conversation::create([
            'sender_id' => $authenticatedUserId,
            'receiver_id' => $userId
        ]);

        return redirect()->route('chat', ['query' => $createdConversation->id]);
    }

    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('id', '!=', auth()->id())->get()
        ]);
    }
}
