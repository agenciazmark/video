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

  public function defineProperties() {

    return [
      'results' => [
        'title' => 'Número de Categorias',
        'description' => 'Quantas categorias você quer exibir?',
        'default' => 0,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Apenas Números São Permitidos'
      ],

      'sortOrder' => [
        'title' => 'Ordem das Categorias',
        'description' => 'Ordem dos resultados das Categorias',
        'type' => 'dropdown',
        'default' => 'title asc'
      ]

    ];

  }

  public function getSortOrderOptions() {

    return [
      'title asc' => 'Título (Ascendente)',
      'title desc' => 'Título (Descendente)',
      'id asc' => 'Cadastro (Ascendente)',
      'id desc' => 'Cadastro (Descendente)',
    ];

  }

  protected function loadCategorias() {

    $query = Categoria::all();


    $sort = [$this->property('sortOrder')];

    $parts = explode(' ', $sort[0]);

    if($parts[1] == 'asc') {
      $query = $query->sortBy($parts[0]);
    } 
    else {
      $query = $query->sortByDesc($parts[0]);
    }
  

    if($this->property('results') > 0) {

      $query = $query->take($this->property('results'));

    }

    return $query;

  }
  
  public function onRun() {
    $this->categorias = $this->loadCategorias();
  }
    

}
