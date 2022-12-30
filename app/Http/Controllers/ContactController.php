<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request -> validate([
             'name'=> 'required',
             'email'=>'required|email|unique:users,email',
             'message'=>'required|max:250',
        ]);

        $result = new Contact;
        $result->fullName = $request->input('name');
        $result->email = $request->input('email');
        $result->message = $request->input('message');

        $result->save();

        $request->session()->flash('contact','You Message is Submitted!');
        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        Gate::authorize('admin-route');
        return view('contactTable')->with('contactArr', Contact::all() );;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact,$id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Contact::destroy(array('id',$id));
        $request->session()->flash('msg','Data Deleted');
        return redirect ('/contactTable');
    }
}
