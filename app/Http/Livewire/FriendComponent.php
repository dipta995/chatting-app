<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class FriendComponent extends Component
{

    public function render()
    {
        $users = User::all();
        return view('livewire.friend-component',compact('users'));
    }
    public $body;
    public function sendMessage()
    {
            dd($this->body);


    }

}
