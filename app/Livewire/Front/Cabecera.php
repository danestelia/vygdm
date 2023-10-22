<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Cabecera extends Component
{
  public $title;
  public $description;

  public function mount($title = null, $description=null){
    $this->title = $title;
    $this->description = $description;
  }
  public function render()
  {
    return view('livewire.front.cabecera');
  }
}
