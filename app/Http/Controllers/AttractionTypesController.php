<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AttractionTypeCreateRequest;
use App\Http\Requests\AttractionTypeUpdateRequest;
use App\Tour\Repositories\AttractionTypeRepository;
use App\Validators\AttractionTypeValidator;


class AttractionTypesController extends Controller
{

    /**
     * @var AttractionTypeRepository
     */
    protected $repository;

    /**
     * @var AttractionTypeValidator
     */
    protected $validator;

    public function __construct(AttractionTypeRepository $repository, AttractionTypeValidator $validator)
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
        $attractionTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $attractionTypes,
            ]);
        }

        return view('attractionTypes.index', compact('attractionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AttractionTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AttractionTypeCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $attractionType = $this->repository->create($request->all());

            $response = [
                'message' => 'AttractionType created.',
                'data'    => $attractionType->toArray(),
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
        $attractionType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $attractionType,
            ]);
        }

        return view('attractionTypes.show', compact('attractionType'));
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

        $attractionType = $this->repository->find($id);

        return view('attractionTypes.edit', compact('attractionType'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  AttractionTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(AttractionTypeUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $attractionType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'AttractionType updated.',
                'data'    => $attractionType->toArray(),
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
                'message' => 'AttractionType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'AttractionType deleted.');
    }
}
