<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserpackageRequest;
use App\Http\Requests\UpdateUserpackageRequest;
use App\Repositories\UserpackageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserpackageController extends AppBaseController
{
    /** @var  UserpackageRepository */
    private $userpackageRepository;

    public function __construct(UserpackageRepository $userpackageRepo)
    {
        $this->userpackageRepository = $userpackageRepo;
         $this->middleware('auth');
    }

    /**
     * Display a listing of the Userpackage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userpackageRepository->pushCriteria(new RequestCriteria($request));
        $userpackages = $this->userpackageRepository->all();

        return view('userpackages.index')
            ->with('userpackages', $userpackages);
    }

    /**
     * Show the form for creating a new Userpackage.
     *
     * @return Response
     */
    public function create()
    {
        return view('userpackages.create');
    }

    /**
     * Store a newly created Userpackage in storage.
     *
     * @param CreateUserpackageRequest $request
     *
     * @return Response
     */
    public function store(CreateUserpackageRequest $request)
    {
        $input = $request->all();

        $userpackage = $this->userpackageRepository->create($input);

        Flash::success('Userpackage saved successfully.');

        return redirect(route('userpackages.index'));
    }

    /**
     * Display the specified Userpackage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userpackage = $this->userpackageRepository->findWithoutFail($id);

        if (empty($userpackage)) {
            Flash::error('Userpackage not found');

            return redirect(route('userpackages.index'));
        }

        return view('userpackages.show')->with('userpackage', $userpackage);
    }

    /**
     * Show the form for editing the specified Userpackage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userpackage = $this->userpackageRepository->findWithoutFail($id);

        if (empty($userpackage)) {
            Flash::error('Userpackage not found');

            return redirect(route('userpackages.index'));
        }

        return view('userpackages.edit')->with('userpackage', $userpackage);
    }

    /**
     * Update the specified Userpackage in storage.
     *
     * @param  int              $id
     * @param UpdateUserpackageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserpackageRequest $request)
    {
        $userpackage = $this->userpackageRepository->findWithoutFail($id);

        if (empty($userpackage)) {
            Flash::error('Userpackage not found');

            return redirect(route('userpackages.index'));
        }

        $userpackage = $this->userpackageRepository->update($request->all(), $id);

        Flash::success('Userpackage updated successfully.');

        return redirect(route('userpackages.index'));
    }

    /**
     * Remove the specified Userpackage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userpackage = $this->userpackageRepository->findWithoutFail($id);

        if (empty($userpackage)) {
            Flash::error('Userpackage not found');

            return redirect(route('userpackages.index'));
        }

        $this->userpackageRepository->delete($id);

        Flash::success('Userpackage deleted successfully.');

        return redirect(route('userpackages.index'));
    }
}
