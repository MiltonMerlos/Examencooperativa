<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Asociado
 * @package App\Models
 * @version May 26, 2023, 6:25 am UTC
 *
 * @property integer $id
 * @property varchar $codigo
 * @property string $nombre
 * @property varchar $apellido
 * @property varchar $direccion
 * @property varchar $email
 * @property integer $telefono1
 * @property integer $telefono2
 */
class Asociado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'asociado';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'codigo',
        'nombre',
        'apellido',
        'direccion',
        'email',
        'telefono1',
        'telefono2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'telefono1' => 'integer',
        'telefono2' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'direccion' => 'required',
        'telefono1' => 'requiered'

    ];


}
