<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RoomTypeCreateRequest;
use App\Http\Requests\RoomTypeUpdateRequest;
use App\Tour\Repositories\RoomTypeRepository;


class RoomTypesController extends Controller
{

    /**
     * @var RoomTypeRepository
     */
    protected $repository;


    public function __construct(RoomTypeRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypes = $this->repository->all();



        return view('admin.room.index_roomtype', compact('roomTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RoomTypeCreateRequest $request
     *
     * @return mixed
     */
    public function store(RoomTypeCreateRequest $request)
    {

        try {

            $roomType = $this->repository->create($request->all());

            $response = [
                'message' => 'RoomType created.',
                'data'    => $roomType->toArray(),
            ];



            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {


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
        $roomType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $roomType,
            ]);
        }

        return view('roomTypes.show', compact('roomType'));
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

        $roomType = $this->repository->find($id);

        return view('roomTypes.edit', compact('roomType'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  RoomTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(RoomTypeUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $roomType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'RoomType updated.',
                'data'    => $roomType->toArray(),
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
                'message' => 'RoomType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'RoomType deleted.');
    }
}
