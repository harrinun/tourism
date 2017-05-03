<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\HotelTypeCreateRequest;
use App\Http\Requests\HotelTypeUpdateRequest;
use App\Tour\Repositories\HotelTypeRepository;
use App\Validators\HotelTypeValidator;


class HotelTypesController extends Controller
{

    /**
     * @var HotelTypeRepository
     */
    protected $repository;

    /**
     * @var HotelTypeValidator
     */
    protected $validator;

    public function __construct(HotelTypeRepository $repository, HotelTypeValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $hotelTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $hotelTypes,
            ]);
        }

        return view('hotelTypes.index', compact('hotelTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HotelTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(HotelTypeCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $hotelType = $this->repository->create($request->all());

            $response = [
                'message' => 'Category created.',
                'data'    => $hotelType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotelType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $hotelType,
            ]);
        }

        return view('hotelTypes.show', compact('hotelType'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $hotelType = $this->repository->find($id);

        return view('hotelTypes.edit', compact('hotelType'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  HotelTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(HotelTypeUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $hotelType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Category updated.',
                'data'    => $hotelType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Category deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Category deleted.');
    }
}
