<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Venta
 * @package App\Models
 * @version May 26, 2023, 9:49 am UTC
 *
 * @property \App\Models\tipousuario $users
 * @property \App\Models\tipoproducto $producto
 * @property \App\Models\tipoasociado $asociado
 * @property integer $id
 * @property string $fecha_probable
 * @property string $fecha_contacto
 * @property string $acuerdo
 * @property string $estado_venta
 * @property integer $producto_id
 * @property integer $asociado_id
 * @property integer $users_id
 */
class Venta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'venta';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'fecha_probable',
        'fecha_contacto',
        'acuerdo',
        'estado_venta',
        'producto_id',
        'asociado_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_probable' => 'datetime',
        'fecha_contacto' => 'datetime',
        'acuerdo' => 'string',
        'estado_venta' => 'string',
        'producto_id' => 'integer',
        'asociado_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_probable' => 'required',
        'fecha_contacto' => 'required',
        'producto_id' => 'required',
        'asociado_id' => 'required',
        'users_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function Tipousers()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function Tipoproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function Tipoasociado()
    {
        return $this->belongsTo(\App\Models\Asociado::class, 'asociado_id');
    }
}
