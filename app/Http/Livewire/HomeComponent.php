<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $userid;
    protected $queryString = ['userid'];
    public function mount()
    { Message::Where('thread', $this->userid.'-'.Auth::user()->id)->update(['is_seen' => '1']);


    }
    public function render()
    {
        $selected_user=  User::where('id',$this->userid)->first();
        $messages =  Message::where('thread', Auth::user()->id.'-'.$this->userid)->orWhere('thread', $this->userid.'-'.Auth::user()->id)->orderBy('id', 'desc')->get();


        // dd($messages);
        return view('livewire.home-component',compact('messages','selected_user'));
    }
}
