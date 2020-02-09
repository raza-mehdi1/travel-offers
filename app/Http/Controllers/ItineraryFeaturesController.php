<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItineraryFeature;
use App\Http\Requests\UpdateItineraryFeature;
use App\Interfaces\ModelInterface;
use Illuminate\Http\Request;

class ItineraryFeaturesController extends Controller
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
        $itinerary_features = $this->model->paginate(10);
        return view('admin.itinerary_features.index', compact('itinerary_features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.itinerary_features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateItineraryFeature  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItineraryFeature $request)
    {
        $itinerary_feature = $this->model->create($request->all());

        if($itinerary_feature){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Itinerary feature was created successful!');
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
        $itinerary_feature = $this->model->find($id);

        if(!$itinerary_feature) {
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Itinerary Feature not found!');
            return redirect()->route('itinerary_features.index');
        }

        return view('admin.itinerary_features.edit', compact('itinerary_feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateItineraryFeature  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItineraryFeature $request, $id)
    {
        $itinerary_feature = $this->model->create($request->all());

        if($itinerary_feature){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'Itinerary feature was updated successful!');
        } else {
            $request->session()->flash('status',  'danger');
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
        $itinerary_feature = $this->model->find($id);

        if($itinerary_feature->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Itinerary Feature deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
