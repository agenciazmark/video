<?php namespace Zmark\Content\Models;

use Model;

/**
 * Model
 */
class Categoria extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zmark_content_categorias';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'produtos' => [
            'Zmark\Content\Models\Produto',
            'key' => 'categoria_id'
        ]
    ];

    public function scopeActive($query)
    {

        return $query->where('status',true)->whereHas('produtos', function($q) {
            $q->where('status',true);
        });

    }
}
