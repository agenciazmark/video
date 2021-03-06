<?php namespace Zmark\Content\Models;

use Model;

/**
 * Model
 */
class Produto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zmark_content_produtos';

    protected $jsonable = ['faq'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopeActive($query,$categoria)
    {

        return $query->where('status',true)->whereHas('categoria', function($q) use($categoria) {
            $q->where('slug',$categoria);
        });

    }

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public $belongsTo = [
        'categoria' => [
            'Zmark\Content\Models\Categoria',
            'table' => 'zmark_content_categorias',
            'key' => 'categoria_id',
            'order' => 'title'
        ]

    ];

    public $belongsToMany = [
        'caracteristicas' => [
            'Zmark\Content\Models\Caracteristica',
            'table' => 'zmark_content_caracteristicas_produtos',
            'key' => 'produto_id',
            'otherKey' => "caracteristica_id"
        ]
    ];
}
