@extends('dashboard.layout.main')
@section('JudulPages','Kategori')
@section('container')
@parent

	<div class="mt-3">
		<h2 class="text-center">Kategori</h2>
		<a href="/kategori-dashboard/create" class="btn btn-primary">Create</a>	

	@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{session('pesan')}}
	</div>
	@endif
	
   <table class="table table-bordered mt-2">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
		@foreach($kategoris as $kategori)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $kategori->nama }}</td>
				<td>
					<a href="/kategori-dashboard/{{$kategori->id}}/edit" class="btn btn-warning">Edit</a>
					<form  class="d-inline" action="/kategori-dashboard/{{ $kategori->id }}" method="post">
						@method('delete')
						@csrf
						<button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">Delete
						</button>
					</form>
				</td>
			</tr>	
		@endforeach
	</table>


	<a class="btn btn-primary" href="/dashboard">Back</a>
 

@endsection