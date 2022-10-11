<?php namespace Zmark\Content;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Zmark\Content\Components\Categorias' => 'categorias'
        ];
        
    }

    public function registerSettings()
    {
    }
}
