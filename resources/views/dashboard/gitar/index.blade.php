@extends('dashboard.layout.main')
@section('JudulPages','Gitar')
@section('container')
@parent

<table class="table table-bordered mt-4">
	<h3>Gitar</h3>
	<a href="/gitar-dashboard/create" class="btn btn-primary">Create</a>	

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

			@foreach ($gitars as $gitar)
			
			<tr>

				<td> {{ $gitar -> id }} </td>
				<td> {{ $gitar -> nama }} </td>
				<td> {{ $gitar -> brand }} </td>
				<td> {{ $gitar -> stok }} </td>
				<td> {{ $gitar -> harga }} </td>
				<td>
					<a href="/gitar-dashboard/{{$gitar->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/gitar-dashboard/{{ $gitar->id }}" method="post" class="d-inline">
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