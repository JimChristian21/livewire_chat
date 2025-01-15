<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id'
    ];

    public function messages() 
    {
        return $this->hasMany(Message::class);
    }

    public function getReceiver()
    {
        $ret = $this->sender_id === auth()->id()
            ? User::firstWhere('id', $this->receiver_id)
                : User::firstWhere('id', $this->sender_id);

        return $ret;
    }
}
