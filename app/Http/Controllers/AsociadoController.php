<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsociadoRequest;
use App\Http\Requests\UpdateAsociadoRequest;
use App\Repositories\AsociadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AsociadoController extends AppBaseController
{
    /** @var AsociadoRepository $asociadoRepository*/
    private $asociadoRepository;

    public function __construct(AsociadoRepository $asociadoRepo)
    {
        $this->asociadoRepository = $asociadoRepo;
    }

    /**
     * Display a listing of the Asociado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $asociados = $this->asociadoRepository->all();

        return view('asociados.index')
            ->with('asociados', $asociados);
    }

    /**
     * Show the form for creating a new Asociado.
     *
     * @return Response
     */
    public function create()
    {
        return view('asociados.create');
    }

    /**
     * Store a newly created Asociado in storage.
     *
     * @param CreateAsociadoRequest $request
     *
     * @return Response
     */
    public function store(CreateAsociadoRequest $request)
    {
        $input = $request->all();

        $asociado = $this->asociadoRepository->create($input);

        Flash::success('Asociado saved successfully.');

        return redirect(route('asociados.index'));
    }

    /**
     * Display the specified Asociado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asociado = $this->asociadoRepository->find($id);

        if (empty($asociado)) {
            Flash::error('Asociado not found');

            return redirect(route('asociados.index'));
        }

        return view('asociados.show')->with('asociado', $asociado);
    }

    /**
     * Show the form for editing the specified Asociado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asociado = $this->asociadoRepository->find($id);

        if (empty($asociado)) {
            Flash::error('Asociado not found');

            return redirect(route('asociados.index'));
        }

        return view('asociados.edit')->with('asociado', $asociado);
    }

    /**
     * Update the specified Asociado in storage.
     *
     * @param int $id
     * @param UpdateAsociadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsociadoRequest $request)
    {
        $asociado = $this->asociadoRepository->find($id);

        if (empty($asociado)) {
            Flash::error('Asociado not found');

            return redirect(route('asociados.index'));
        }

        $asociado = $this->asociadoRepository->update($request->all(), $id);

        Flash::success('Asociado updated successfully.');

        return redirect(route('asociados.index'));
    }

    /**
     * Remove the specified Asociado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asociado = $this->asociadoRepository->find($id);

        if (empty($asociado)) {
            Flash::error('Asociado not found');

            return redirect(route('asociados.index'));
        }

        $this->asociadoRepository->delete($id);

        Flash::success('Asociado deleted successfully.');

        return redirect(route('asociados.index'));
    }
}
