<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateItinerary;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
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
        $itinerary_features = ItinerariesFeature::all();
        return view('admin.itineraries.create', compact('itinerary_features'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateItinerary $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItinerary $request)
    {
        $itinerary = $this->model->create($request->except('_token','locale'));

        if($itinerary){
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
        $itinerary = $this->model->with('itinerary_features')->find($id);

        if(!$itinerary){
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Itinerary not found!');
            return redirect()->route('itineraries.index');
        }


        $itinerary_features = ItinerariesFeature::all();
        return view('admin.itineraries.edit', compact('itinerary', 'itinerary_features'));
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
        $itinerary = $this->model->find($id);

        if($itinerary->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Itinerary deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
