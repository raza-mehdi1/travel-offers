<?php

namespace App\Http\Controllers;

use App\Interfaces\ModelInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
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
        $images = $this->model->paginate(10);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('path')->store('/avatars', 's3');

        if($path == ''){
            return redirect()->back()->with('error','Oops! Something went wrong...');
        }

        $image = $this->model->create([
            'path'=>trim($path, 'public'),
            'storage_path'=>$path
        ]);

        if(!$image)
            return redirect()->back()->with('error','Oops! Something went wrong...');

        return redirect()->back()->with('success','You have successfully uploaded image.');
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
        $image = $this->model->find($id);

        if(!$image){
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Image not found!');
            return redirect()->route('images.index');
        }

        return view('admin.images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $this->model->find($id);

        if(!$image)
            return redirect()->back()->with('status','error')->with('message','Requested Image not found!');

        $oldImagePath = $image->path;

        $request->validate([
            'path' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('path')->store('/avatars', 's3');

        if($path == ''){
            return redirect()->back()->with('status', 'error')->with('message', 'Oops! Something went wrong...');
        } else {
            Storage::delete($oldImagePath);
        }

        $isUpdated = $image->update([
            'path'=>trim($path, 'public'),
            'storage_path'=>$path
        ]);

        if(!$isUpdated)
            return redirect()->back()->with('error','Oops! Something went wrong...');

        return redirect()->back()->with('success','You have successfully updated image.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = $this->model->find($id);

        if(!$image){
            request()->session()->flash('status', 'error');
            request()->session()->flash('message', 'Requested Image not found!');
            return redirect()->back();
        }

        $path = $image->path;

        if(!$image->delete()){
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
            return redirect()->back();
        }


        Storage::delete($path);

        request()->session()->flash('status', 'success');
        request()->session()->flash('message', 'Image removed successfully!');

        return redirect()->back();
    }
}
