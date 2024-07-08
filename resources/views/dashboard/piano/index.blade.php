@extends('dashboard.layout.main')
@section('JudulPages','Piano')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Piano</h3>
	<a href="/piano-dashboard/create" class="btn btn-primary">Create</a>	

	@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{session('pesan')}}
	</div>
	@endif
	
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Brand</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>

			@foreach ($pianos as $piano)
			
			<tr>

				<td> {{ $piano -> id }} </td>
				<td> {{ $piano -> nama }} </td>
				<td> {{ $piano -> brand }} </td>
				<td> {{ $piano -> stok }} </td>
				<td> {{ $piano -> harga }} </td>
				<td>
					<a href="/piano-dashboard/{{$piano->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/piano-dashboard/{{ $piano->id }}" method="post" class="d-inline">
						@method('DELETE')
						@csrf
						<button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
					</form>
					
				</td>
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/dashboard">Back</a>

@endsection