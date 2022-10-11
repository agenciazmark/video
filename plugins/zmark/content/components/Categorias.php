<?php namespace Zmark\Content\Components;

use Cms\Classes\ComponentBase;
use Zmark\Content\Models\Categoria;

class Categorias extends ComponentBase
{

  public $categorias;

  public function componentDetails() {
    return [
      'name' => 'Categorias - Lista',
      'description' => 'Lista de Categorias de Produtos'
    ];
  }

  protected function loadCategorias() {
    return Categoria::all();
  }
  
  public function onRun() {
    $this->categorias = $this->loadCategorias();
  }
    

}
