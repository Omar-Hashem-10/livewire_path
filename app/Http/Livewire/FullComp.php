<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public function render()
    {
        // use this ->layout() when you want change or override the layout
        return view('livewire.full-comp')->layout('layouts.default');
        // or use extendes but you should use yield not $slot
        // return view('livewire.full-comp')->extends('layouts.default');

        //when you want change the name const $slot use ->slot
        // return view('livewire.full-comp')->layout('layouts.default')->slot('content');

        //when you want send data use this ->layout or ->layoutData
        // return view('livewire.full-comp')->layout('layouts.default', ['title' => 'Omar Hashem'])->slot('content');
        // or
        return view('livewire.full-comp')->layout('layouts.default')->layoutData(['title' => 'Omar Hashem'])->slot('content');
    }
}
