@extends('layout/main')

@section('title'. 'wkwkwk')

@section('container')

	<div class="container"> 
		<div class="row">
			<div class="col-10">
			    <h3 class="mt-2">Data Buku</h3>
                    <a href="/book/tambah" class="btn btn-info"> + Tambah Buku</a>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $b)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->penulis }}</td>
                            <td>{{ $b->penerbit }}</td>

                                <td>
                                    <a href="/book/edit/{{ $b->id }}" class="btn btn-success">Edit</a>
                                    <a href="/book/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
	</div>

	<br/>
	{{ $book->links() }}

@endsection