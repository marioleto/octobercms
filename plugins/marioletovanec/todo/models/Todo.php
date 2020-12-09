<?php namespace MarioLetovanec\Todo\Models;

use Model;

/**
 * Model
 */
class Todo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'marioletovanec_todo_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
