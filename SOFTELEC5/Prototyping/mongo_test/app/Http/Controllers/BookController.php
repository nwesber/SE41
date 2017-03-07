<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Jenssegers\Mongodb\Eloquent\Model as Model;
class BookController extends Controller{

    public function index(){
        $books = DB::collection('books')->get();
        return view('books.index', compact('books'));
    }


    public function create(){
       return view('books.create');
    }

    public function store(Request $request){
        $book = new book;
        $book->title =  $request->input('title');
        $book->isbn =  $request->input('isbn');
        $book->author =  $request->input('author');
        $book->category = $request->input('category') ;
        $book->save();
        $books = DB::collection('books')->get();

      return view('books.index', compact('books'));
    }

    public function show($id){
        $book = DB::collection('books')->where('_id', $id)->get();
        return view('books.show', compact('book'));
    }


    public function edit($id){
        $book = DB::collection('books')->where('_id', $id)->get();
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id){
       DB::collection('books')->where('_id', $id)
            ->update([
            'title' => $request->input('title'),
            'isbn' => $request->input('isbn'),
            'author' => $request->input('author'),
            'category' => $request->input('category')
            ] );

        $books = DB::collection('books')->get();

      return view('books.index', compact('books'));
    }

    public function destroy($id){
        DB::collection('books')->where('_id', $id)->delete();
        $books = DB::collection('books')->get();
        return view('books.index', compact('books'));
    }
}
