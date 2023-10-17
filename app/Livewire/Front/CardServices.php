<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Illuminate\Routing\Route;

class CardServices extends Component
{
  public $title;
  public $contenido;
  public $link;
  public $alt;
  public $categoria;
  public $target;

  public function mount($title=null, $contenido=null, $link=null, $alt=null, $categoria=null, $target=null)
  {
    $this->title = $title;
    $this->contenido = $contenido;
    $this->link = $link;
    $this->alt = $alt;
    $this->target = $target;
    $this->categoria = $categoria;

  }



  public function render()
  {
    return view('livewire.front.card-services');
  }
}
