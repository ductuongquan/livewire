<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post as modelPost;

class Post extends Component
{
    public $title;
   // public $listPost ;

    public function mount()
    {
       // $this->listPost = modelPost::all();
       
    }

    public function submit()
    {
     $post = modelPost::create(["title" => $this->title]);
     $this->title ='';
    }
    public function render()
    {
        $listPost = modelPost::all();

        return view('livewire.post',['listPost'=>$listPost]);
    }
}
