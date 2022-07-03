<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $userid;
    protected $queryString = ['userid'];
    public function render()
    {
        $messages = Message::whereIn('user_id',[Auth::user()->id,$this->userid])->where('to_id',Auth::user()->id)->orWhere('to_id',$this->userid)->get();
        // dd($messages);
        return view('livewire.home-component',compact('messages'));
    }
}
