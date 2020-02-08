<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackage;
use App\Http\Requests\UpdatePackage;
use App\Interfaces\ModelInterface;
use App\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
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
        $packages = $this->model->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePackage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePackage $request)
    {
        $package = $this->model->create($request->all());

        if($package){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Package was created successful!');
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
        $package = $this->model->find($id);
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePackage  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackage $request, $id)
    {
        $package = $this->model->find($id);

        if($package->update($request->all())){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Package updated successfully!');
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
            request()->session()->flash('message', 'Package deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
