<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceproductRequest;
use App\Http\Requests\UpdateServiceproductRequest;
use App\Repositories\ServiceproductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServiceproductController extends AppBaseController {

    /** @var  ServiceproductRepository */
    private $serviceproductRepository;

    public function __construct(ServiceproductRepository $serviceproductRepo) {
        $this->serviceproductRepository = $serviceproductRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Serviceproduct.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->serviceproductRepository->pushCriteria(new RequestCriteria($request));
        $serviceproducts = $this->serviceproductRepository->all();

        return view('serviceproducts.index')
                        ->with('serviceproducts', $serviceproducts);
    }

    /**
     * Show the form for creating a new Serviceproduct.
     *
     * @return Response
     */
    public function create() {
        return view('serviceproducts.create');
    }

    /**
     * Store a newly created Serviceproduct in storage.
     *
     * @param CreateServiceproductRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceproductRequest $request) {
        $input = $request->all();

        $serviceproduct = $this->serviceproductRepository->create($input);

        Flash::success('Serviceproduct saved successfully.');

        return redirect(route('serviceproducts.index'));
    }

    /**
     * Display the specified Serviceproduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $serviceproduct = $this->serviceproductRepository->findWithoutFail($id);

        if (empty($serviceproduct)) {
            Flash::error('Serviceproduct not found');

            return redirect(route('serviceproducts.index'));
        }

        return view('serviceproducts.show')->with('serviceproduct', $serviceproduct);
    }

    /**
     * Show the form for editing the specified Serviceproduct.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $serviceproduct = $this->serviceproductRepository->findWithoutFail($id);

        if (empty($serviceproduct)) {
            Flash::error('Serviceproduct not found');

            return redirect(route('serviceproducts.index'));
        }

        return view('serviceproducts.edit')->with('serviceproduct', $serviceproduct);
    }

    /**
     * Update the specified Serviceproduct in storage.
     *
     * @param  int              $id
     * @param UpdateServiceproductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceproductRequest $request) {
        $serviceproduct = $this->serviceproductRepository->findWithoutFail($id);

        if (empty($serviceproduct)) {
            Flash::error('Serviceproduct not found');

            return redirect(route('serviceproducts.index'));
        }

        $serviceproduct = $this->serviceproductRepository->update($request->all(), $id);

        Flash::success('Serviceproduct updated successfully.');

        return redirect(route('serviceproducts.index'));
    }

    /**
     * Remove the specified Serviceproduct from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $serviceproduct = $this->serviceproductRepository->findWithoutFail($id);

        if (empty($serviceproduct)) {
            Flash::error('Serviceproduct not found');

            return redirect(route('serviceproducts.index'));
        }

        $this->serviceproductRepository->delete($id);

        Flash::success('Serviceproduct deleted successfully.');

        return redirect(route('serviceproducts.index'));
    }

}
