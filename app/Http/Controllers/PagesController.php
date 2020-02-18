<?php

namespace App\Http\Controllers;

use App\Addon;
use App\Feature;
use App\Http\Requests\CreatePackage;
use App\Http\Requests\UpdatePackage;
use App\Image;
use App\Interfaces\ModelInterface;
use App\Itinerary;
use App\Mail\ContactUs;
use App\Package;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
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
        $pages = $this->model->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $package = $this->model->create($request->all());

        if($package){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Page was created successful!');
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
     * @return View
     */
    public function edit($id)
    {
        $page = $this->model->find($id);
        return view('admin.pages.edit',
            compact('page')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Redirect
     */
    public function update(Request $request, $id)
    {
        $page = $this->model->find($id);

        $updated = $page->update($request->all());

        if($updated){
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Page updated successfully!');
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
     * @return Redirect
     */
    public function destroy($id)
    {
        $package = $this->model->find($id);

        $isDeleted = $package->delete();

        if($isDeleted){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Page deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }

    public function page($slug){

        $page = $this->model->where('slug', $slug)
            ->first();

        if(!$page)
            return redirect()->back();

        return view('page', compact('page'));

    }

    public function contactUs(){
        return view('contact-us');
    }

    public function sendContactUsEmail(){
        $request = request()->all();

        $toUser = new User();
        $toUser->email = config('mail.to');
        $toUser->name = config('mail.from.name');

        $user = new User();
        $user->email = $request['email'];
        $user->name = $request['name'];
        $user->message = $request['message'];
        $user->subject = $request['subject'];

        Mail::to($toUser)->send(new ContactUs($user));
        return \redirect()->back();
    }
}
