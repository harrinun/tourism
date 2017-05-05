<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ExtraCreateRequest;
use App\Http\Requests\ExtraUpdateRequest;
use App\Tour\Repositories\ExtraRepository;
use App\Validators\ExtraValidator;


class ExtrasController extends Controller
{

    /**
     * @var ExtraRepository
     */
    protected $repository;

    /**
     * @var ExtraValidator
     */
    protected $validator;

    public function __construct(ExtraRepository $repository, ExtraValidator $validator)
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
        $extras = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $extras,
            ]);
        }

        return view('extras.index', compact('extras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ExtraCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ExtraCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $extra = $this->repository->create($request->all());

            $response = [
                'message' => 'Extra created.',
                'data'    => $extra->toArray(),
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
        $extra = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $extra,
            ]);
        }

        return view('extras.show', compact('extra'));
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

        $extra = $this->repository->find($id);

        return view('extras.edit', compact('extra'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ExtraUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ExtraUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $extra = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Extra updated.',
                'data'    => $extra->toArray(),
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
                'message' => 'Extra deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Extra deleted.');
    }
}
