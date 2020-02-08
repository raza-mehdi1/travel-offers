<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateItinerary;
use App\Interfaces\ModelInterface;
use Illuminate\Http\Request;
use App\Http\Requests\CreateItinerary;

class ItinerariesController extends Controller
{
    protected $model;

    public function __construct(ModelInterface $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itineraries = $this->model->paginate(10);
        return view('admin.itineraries.index', compact('itineraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.itineraries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateItinerary $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItinerary $request)
    {
        $package = $this->model->create($request->except('_token','locale'));

        if($package){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Itinerary was created successful!');
        } else {
            $request->session()->flash('status',  'danger');
            $request->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itinerary = $this->model->find($id);
        return view('admin.itineraries.edit', compact('itinerary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateItinerary $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItinerary $request, $id)
    {
        $itinerary = $this->model->find($id);

        if($itinerary->update($request->all())){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Itinerary updated successfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = $this->model->find($id);

        if($package->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Itinerary deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
