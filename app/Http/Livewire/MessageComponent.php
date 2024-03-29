<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class MessageComponent extends Component
{
    use WithFileUploads;
    public $userid;
    public $body;
    public $files;
    public $image;
    protected $queryString = ['userid'];

    public function resets()
    {
        // $this->userid=' ';
        $this->body=' ';
         $this->files=' ';
         $this->image=' ';
    }
    public function render()
    {
        return view('livewire.message-component');
    }

    public function sendMessage()
    {
        $thread_value = auth()->user()->id . '-' .$this->userid;
        
        Message::create([
            'user_id'=>auth()->user()->id,
            'thread'=>$thread_value,
            'to_id'=>$this->userid,
            'body' => $this->body,
        ]);
        $this->resets();


    }
}
