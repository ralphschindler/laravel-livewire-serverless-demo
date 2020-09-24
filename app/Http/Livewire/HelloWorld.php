<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Ralph';

    public function updated()
    {
        if ($this->name == '') {
            $this->name = 'World';
        }
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
