<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class annotations
 * @package App\Models
 * @version April 23, 2023, 10:02 pm UTC
 *
 * @property string $title
 * @property string $contente
 */
class annotations extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'annotations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'contente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'contente' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
