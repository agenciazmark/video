<?php namespace Zmark\Content\Models;

use Model;

/**
 * Model
 */
class Caracteristica extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zmark_content_caracteristicas';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'produtos' => [
            'Zmark\Content\Models\Produto',
            'table' => 'zmark_content_caracteristicas_produtos',
            'key' => 'caracteristica_id',
            'otherKey' => "produto_id"
        ]
    ];


}
