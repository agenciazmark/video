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

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopeActive($query)
    {

        return $query->where('status',true);

    }
}
