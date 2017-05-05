<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EntityAddonCreateRequest;
use App\Http\Requests\EntityAddonUpdateRequest;
use App\Tour\Repositories\EntityAddonRepository;
use App\Validators\EntityAddonValidator;


class EntityAddonsController extends Controller
{

    /**
     * @var EntityAddonRepository
     */
    protected $repository;

    /**
     * @var EntityAddonValidator
     */
    protected $validator;

    public function __construct(EntityAddonRepository $repository, EntityAddonValidator $validator)
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
        $entityAddons = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $entityAddons,
            ]);
        }

        return view('entityAddons.index', compact('entityAddons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EntityAddonCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EntityAddonCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $entityAddon = $this->repository->create($request->all());

            $response = [
                'message' => 'EntityAddon created.',
                'data'    => $entityAddon->toArray(),
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
        $entityAddon = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $entityAddon,
            ]);
        }

        return view('entityAddons.show', compact('entityAddon'));
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

        $entityAddon = $this->repository->find($id);

        return view('entityAddons.edit', compact('entityAddon'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EntityAddonUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(EntityAddonUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $entityAddon = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EntityAddon updated.',
                'data'    => $entityAddon->toArray(),
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
                'message' => 'EntityAddon deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EntityAddon deleted.');
    }
}
