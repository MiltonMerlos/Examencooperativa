<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Repositories\BaseRepository;

/**
 * Class VentaRepository
 * @package App\Repositories
 * @version May 26, 2023, 9:49 am UTC
*/

class VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Venta::class;
    }
}
