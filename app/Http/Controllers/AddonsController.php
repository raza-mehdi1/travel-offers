<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAddons;
use App\Http\Requests\UpdateAddons;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
use Illuminate\Http\Request;

class AddonsController extends Controller
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
        $addons = $this->model->paginate(10);
        return view('admin.addons.index', compact('addons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateAddons $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAddons $request)
    {
        $addon = $this->model->create($request->all());

        if($addon){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Addon was created successful!');
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
        $addon = $this->model->find($id);

        if(!$addon){
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Addon not found!');
            return redirect()->route('addons.index');
        }

        return view('admin.addons.edit', compact('addon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAddons $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddons $request, $id)
    {
        $addon = $this->model->find($id);

        if($addon->update($request->all())){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Addon updated successfully!');
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
        $addon = $this->model->find($id);

        if($addon->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Addon deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
