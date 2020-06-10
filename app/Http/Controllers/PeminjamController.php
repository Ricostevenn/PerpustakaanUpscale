<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamController extends Controller
{
        public function index()
    {
       
            $peminjaman = DB::table('peminjaman')->paginate(7);

              
            return view('peminjaman.index',['peminjaman' => $peminjaman]);

    }

    public function tambah()
    {
 
	return view('tambah');
 
    }

   
    public function store(Request $request)
    {
	

	return redirect('/book');
 
    }

    public function edit($id)
    {
        
        $peminjaman= DB::table('peminjaman')->where('id',$id)->get();
        //$book = \App\Book::all();
        return view('edit',['peminjaman' => $peminjaman]);

    }

   

    public function hapus($id)
    {
     
        DB::table('peminjaman')->where('id',$id)->delete();
            
        return redirect('/peminjaman');
    }

    
}
