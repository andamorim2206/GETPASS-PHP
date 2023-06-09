<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class user
 * @package App\Models
 * @version April 23, 2023, 9:45 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 */
class user extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'user';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'unique'
    ];

}
