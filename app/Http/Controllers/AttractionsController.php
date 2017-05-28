<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AttractionCreateRequest;
use App\Http\Requests\AttractionUpdateRequest;
use App\Tour\Repositories\AttractionRepository;


class AttractionsController extends Controller
{

    /**
     * @var AttractionRepository
     */
    protected $attractions;


    public function __construct(AttractionRepository $attractions)
    {
        $this->attractions = $attractions;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = $this->attractions->all();
        if (auth()->check()) {
            if (auth()->user()->hasRole('admin')) {
                return view('admin.attractions.index', compact('attractions'));
            }
        }
        elseif (auth()->guest() or !auth()->user()->hasRole('admin'))


        return view('site.attractions.index', compact('attractions'));
    }


    public function create()
    {
        return view('admin.attractions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AttractionCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AttractionCreateRequest $request)
    {


        $attraction = $this->attractions->create($request->all()+['manager'=>auth()->id()]);

        $response = [
            'message' => 'Attraction created.',
            'data' => $attraction->toArray(),
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
        $attraction = $this->attractions->find($id);

        return view('site.attractions.show', compact('attraction'));
    }


    public function upload($attraction)
    {
        return view('admin.attractions._upload',compact('attraction'));
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

        $attraction = $this->attractions->find($id);

        return view('site.attractions.edit', compact('attraction'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  AttractionUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     */
    public function update(AttractionUpdateRequest $request, $id)
    {


        $attraction = $this->attractions->update($request->all(), $id);

        $response = [
            'message' => 'Attraction updated.',
            'data' => $attraction->toArray(),
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
        $this->attractions->delete($id);


        return redirect()->back()->with('message', 'Attraction deleted.');
    }
}
