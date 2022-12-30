<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Image;

class CdController extends Controller
{
    /**
     * Display a listing of the resultource.
     *
     * @return \Illuminate\Http\resultponse
     */
    public function index()
    {
        Gate::authorize('admin-route');
        return view('cdtable')->with('cdArr', Cd::paginate(5) );
    }

    public function create($id)
    {
        $image = Cd::findOrFail($id);
        $image_file = Image::make($image->imagecd);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
         
        return $response;
    }

    /**
     * Store a newly created resultource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\resultponse
     */
    public function store(Request $request)
    {
        $request -> validate([
             'title'=> 'required',
             'mainname'=>'required',
             'price'=>'required|numeric',
             'playlength'=>'required|numeric',
             'imagecd'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_file = $request->imagecd;
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'title' => $request->title,
            'firstname'=>$request->fname,
            'mainname'=>$request->sname,
            'price'=>$request->price,
            'playlength'=>$request->playlength,
            'imagecd'=>$image
        );

        Cd::create($form_data);

        $request->session()->flash('msg','Data Saved!');
        return redirect ('/cdtable');   
     }


    public function show(Cd $cd)
    {
         return view('/cds')->with('cdArr', Cd::paginate(3) );

    }


    public function edit(Cd $cd,$id)
    {
       return view('cd_edit')->with('cdArr', Cd::find($id) );

    }

    /**
     * Update the specified resultource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\resultponse
     */
    public function update(Request $request, Cd $cd)
    {
        $result=Cd::find($request->id);
        $result->title = $request->input('title');
        $result->firstname = $request->input('fname');
        $result->mainname = $request->input('sname');
        $result->price = $request->input('price');
        $result->playlength = $request->input('playlength');
        $result->imagecd = $request->input('imagecd');

        $result->save();

        $request->session()->flash('msg','Data Updated');
        return redirect ('/cdtable');
    }

    /**
     * Remove the specified resultource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\resultponse
     */
    public function destroy(Request $request,$id)
    {
        Cd::destroy(array('id',$id));
        $request->session()->flash('msg','Data Deleted');
        return redirect ('/cdtable');
    }
}
