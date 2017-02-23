<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceitemRequest;
use App\Http\Requests\UpdateServiceitemRequest;
use App\Repositories\ServiceitemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServiceitemController extends AppBaseController {

    /** @var  ServiceitemRepository */
    private $serviceitemRepository;

    public function __construct(ServiceitemRepository $serviceitemRepo) {
        $this->serviceitemRepository = $serviceitemRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Serviceitem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->serviceitemRepository->pushCriteria(new RequestCriteria($request));
        $serviceitems = $this->serviceitemRepository->all();

        return view('serviceitems.index')
                        ->with('serviceitems', $serviceitems);
    }

    /**
     * Show the form for creating a new Serviceitem.
     *
     * @return Response
     */
    public function create() {
        return view('serviceitems.create');
    }

    /**
     * Store a newly created Serviceitem in storage.
     *
     * @param CreateServiceitemRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceitemRequest $request) {
        $input = $request->all();

        $serviceitem = $this->serviceitemRepository->create($input);

        Flash::success('Serviceitem saved successfully.');

        return redirect(route('serviceitems.index'));
    }

    /**
     * Display the specified Serviceitem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $serviceitem = $this->serviceitemRepository->findWithoutFail($id);

        if (empty($serviceitem)) {
            Flash::error('Serviceitem not found');

            return redirect(route('serviceitems.index'));
        }

        return view('serviceitems.show')->with('serviceitem', $serviceitem);
    }

    /**
     * Show the form for editing the specified Serviceitem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $serviceitem = $this->serviceitemRepository->findWithoutFail($id);

        if (empty($serviceitem)) {
            Flash::error('Serviceitem not found');

            return redirect(route('serviceitems.index'));
        }

        return view('serviceitems.edit')->with('serviceitem', $serviceitem);
    }

    /**
     * Update the specified Serviceitem in storage.
     *
     * @param  int              $id
     * @param UpdateServiceitemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceitemRequest $request) {
        $serviceitem = $this->serviceitemRepository->findWithoutFail($id);

        if (empty($serviceitem)) {
            Flash::error('Serviceitem not found');

            return redirect(route('serviceitems.index'));
        }

        $serviceitem = $this->serviceitemRepository->update($request->all(), $id);

        Flash::success('Serviceitem updated successfully.');

        return redirect(route('serviceitems.index'));
    }

    /**
     * Remove the specified Serviceitem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $serviceitem = $this->serviceitemRepository->findWithoutFail($id);

        if (empty($serviceitem)) {
            Flash::error('Serviceitem not found');

            return redirect(route('serviceitems.index'));
        }

        $this->serviceitemRepository->delete($id);

        Flash::success('Serviceitem deleted successfully.');

        return redirect(route('serviceitems.index'));
    }

}
