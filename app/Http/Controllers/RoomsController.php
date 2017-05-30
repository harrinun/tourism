<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RoomCreateRequest;
use App\Http\Requests\RoomUpdateRequest;
use App\Tour\Repositories\RoomRepository;
use App\Validators\RoomValidator;


class RoomsController extends Controller
{

    /**
     * @var RoomRepository
     */
    protected $repository;



    public function __construct(RoomRepository $repository)
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
        $rooms = $this->repository->all();


        return view('admin.room.index', compact('rooms'));
    }


    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RoomCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(RoomCreateRequest $request)
    {

        try {


            $room = $this->repository->create($request->all());

            $response = [
                'message' => 'Room created.',
                'data'    => $room->toArray(),
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
        $room = $this->repository->find($id);


        return view('rooms.show', compact('room'));
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

        $room = $this->repository->find($id);

        return view('rooms.edit', compact('room'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  RoomUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(RoomUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $room = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Room updated.',
                'data'    => $room->toArray(),
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
                'message' => 'Room deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Room deleted.');
    }
}
