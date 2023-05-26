<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 * @package App\Models
 * @version May 26, 2023, 8:56 am UTC
 *
 * @property integer $id
 * @property integer $categoria_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $anio_vigencia
 */
class Producto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'producto';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'categoria_id',
        'nombre',
        'descripcion',
        'anio_vigencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categoria_id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'anio_vigencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];
    public function tipocategoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id');
    }

}
