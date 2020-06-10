<@extends('layout.main')

@section('title'. 'wkwkwk')

@section('container')

	@foreach($book as $b)
	<form action="/book/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->id }}"> <br/>
		Judul <input type="text" required="required" name="judul" value="{{ $b->judul }}"> <br/>
		Penulis <input type="text" required="required" name="penulis" value="{{ $b->penulis }}"> <br/>
		Penerbit <input type="text" required="required" name="penerbit" value="{{ $b->penerbit }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
@endsection
</body>
</html>