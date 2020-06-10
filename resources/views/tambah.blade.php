<@extends('layout.main')

@section('title'. 'wkwkwk')

@section('container')	
 
	<form action="/book/store" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="judul" required="required"> <br/>
		Penulis <input type="text" name="penulis" required="required"> <br/>
		Penerbit <input type="text" name="penerbit" required="required"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
 @endsection
