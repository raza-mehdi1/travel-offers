<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePackageNotIncludes;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePackageNotIncludes;

class NotIncludesController extends Controller
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
        $notIncludes = $this->model->paginate(10);
        return view('admin.not-includes.index', compact('notIncludes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.not-includes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePackageNotIncludes $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePackageNotIncludes $request)
    {
        $notInclude = $this->model->create($request->except('_token','locale'));

        if($notInclude){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Package Not Includes was created successful!');
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
        $notInclude = $this->model->find($id);

        if(!$notInclude){
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Package Not Includes not found!');
            return redirect()->route('not-includes.index');
        }

        return view('admin.not-includes.edit', compact('notInclude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePackageNotIncludes $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageNotIncludes $request, $id)
    {
        $notInclude = $this->model->find($id);

        if($notInclude->update($request->all())){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Package Not Includes updated successfully!');
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
        $notInclude = $this->model->find($id);

        if($notInclude->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Package Not Includes deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
