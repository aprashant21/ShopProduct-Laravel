<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resultource.
     *
     * @return \Illuminate\Http\resultponse
     */
    public function index()
    {
        Gate::authorize('admin-route');

        return view('booktable')->with('bookArr', Book::paginate(5) );

   
    }


    public function create($id)
    {
         $image = Book::findOrFail($id);
         $image_file = Image::make($image->imagebook);
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
             'sname'=>'required',
             'price'=>'required|numeric',
             'pages'=>'required|numeric',
             'imagebook'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image_file = $request->imagebook;
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'title' => $request->title,
            'firstname'=>$request->fname,
            'mainname'=>$request->sname,
            'price'=>$request->price,
            'numpages'=>$request->pages,
            'imagebook'=>$image
        );

        Book::create($form_data);
        return redirect('/booktable')->with('msg','saved sucessfully');
    }

    
    public function show(Book $book)
    {

     return view('/books')->with('bookArr', Book::paginate(3) );

     
    }

    public function edit(Book $book, $id)
    {
        return view('book_edit')->with('bookArr', Book::find($id) );

    }

    /**
     * Update the specified resultource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\resultponse
     */
    public function update(Request $request, Book $book)
    {
        $result=Book::find($request->id);
        $result->title = $request->input('title');
        $result->firstname = $request->input('fname');
        $result->mainname = $request->input('sname');
        $result->price = $request->input('price');
        $result->numpages = $request->input('pages');

        $result->save();

        $request->session()->flash('msg','Data Updated');
        return redirect ('/booktable');
    }

    /**
     * Remove the specified resultource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\resultponse
     */
    public function destroy(Request $request, $id)
    {
        Book::destroy(array('id',$id));
        $request->session()->flash('msg','Data Deleted');
        return redirect ('/booktable');
    }
}
