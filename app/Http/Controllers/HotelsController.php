<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\HotelCreateRequest;
use App\Http\Requests\HotelUpdateRequest;
use App\Tour\Repositories\HotelRepository;


class HotelsController extends Controller
{

    /**
     * @var HotelRepository
     */
    protected $hotels;


    public function __construct(HotelRepository $hotels)
    {
        $this->hotels = $hotels;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = $this->hotels->all();

        if (auth()->check()) {
            if (auth()->user()->hasRole('admin')) {
                return view('admin.hotels.index', compact('hotels'));
            }
        }
        elseif (auth()->guest())
        return view('site.hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('admin.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HotelCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(HotelCreateRequest $request)
    {


        //dd($request->all()+['manager'=>auth()->id()]);
        $hotel = $this->hotels->create($request->all()+['manager'=>auth()->id()]);

        $response = [
            'message' => 'Hotel created.',
            'data' => $hotel->toArray(),
        ];


        return redirect()->back()->with('message', $response['message']);

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
        $hotel = $this->hotels->find($id);


        return view('site.hotels.show', compact('hotel'));
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

        $hotel = $this->hotels->find($id);

        return view('site.hotels.edit', compact('hotel'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  HotelUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     */
    public function update(HotelUpdateRequest $request, $id)
    {


        $hotel = $this->hotels->update($request->all(), $id);

        $response = [
            'message' => 'Hotel updated.',
            'data' => $hotel->toArray(),
        ];


        return redirect()->back()->with('message', $response['message']);
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
        $this->hotels->delete($id);


        return redirect()->back()->with('message', 'Hotel deleted.');
    }
}
