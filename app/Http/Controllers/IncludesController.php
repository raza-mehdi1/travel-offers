<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePackageIncludes;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePackageIncludes;

class IncludesController extends Controller
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
        $includes = $this->model->paginate(10);
        return view('admin.includes.index', compact('includes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.includes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePackageIncludes $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePackageIncludes $request)
    {
        $include = $this->model->create($request->all());

        if($include){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Include was created successful!');
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
        $include = $this->model->find($id);

        if(!$include){
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Include not found!');
            return redirect()->route('includes.index');
        }

        return view('admin.includes.edit', compact('include'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePackageIncludes $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageIncludes $request, $id)
    {
        $include = $this->model->find($id);

        if($include->update($request->all())){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Include updated successfully!');
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
        $include = $this->model->find($id);

        if($include->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Include deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
