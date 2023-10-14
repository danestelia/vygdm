<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Cabecera extends Component
{
  public $title;

  public function mount($title = null){
    $this->title = $title;
  }
  public function render()
  {
    return view('livewire.front.cabecera');
  }
}
