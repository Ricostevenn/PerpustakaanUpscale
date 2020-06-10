<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
        public function index()
    {
       
            $book = DB::table('book')->paginate(7);

              
            return view('book.index',['book' => $book]);

    }

    public function tambah()
    {
 
	return view('tambah');
 
    }

   
    public function store(Request $request)
    {
	
	DB::table('book')->insert([
		'judul' => $request->judul,
		'penulis' => $request->penulis,
		'penerbit' => $request->penerbit,
	]);

	return redirect('/book');
 
    }

    public function edit($id)
    {
        
        $book = DB::table('book')->where('id',$id)->get();
        //$book = \App\Book::all();
        return view('edit',['book' => $book]);

    }

   
    public function update(Request $request)
    {
    
        DB::table('book')->where('id',$request->id)->update([
            'judul' => $request->judul,
		    'penulis' => $request->penulis,
		    'penerbit' => $request->penerbit,
        ]);
      
        return redirect('/book');
    }

    public function hapus($id)
    {
     
        DB::table('book')->where('id',$id)->delete();
            
        return redirect('/book');
    }

    
}
