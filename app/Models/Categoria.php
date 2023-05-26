<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categoria
 * @package App\Models
 * @version May 26, 2023, 6:46 am UTC
 *
 * @property integer $id
 * @property string $nombre
 */
class Categoria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categoria';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];


}
