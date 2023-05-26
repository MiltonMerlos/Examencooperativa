<?php

namespace App\Repositories;

use App\Models\Asociado;
use App\Repositories\BaseRepository;

/**
 * Class AsociadoRepository
 * @package App\Repositories
 * @version May 26, 2023, 6:25 am UTC
*/

class AsociadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Asociado::class;
    }
}
