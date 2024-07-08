@extends('dashboard.layout.main')
@section('JudulPages','Sepak Bola')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Sepak Bola</h3>
	<a href="/sepakbola-dashboard/create" class="btn btn-primary">Create</a>	

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

			@foreach ($sepakbolas as $sepakbola)
			
			<tr>

				<td> {{ $sepakbola -> id }} </td>
				<td> {{ $sepakbola -> nama }} </td>
				<td> {{ $sepakbola -> brand }} </td>
				<td> {{ $sepakbola -> stok }} </td>
				<td> {{ $sepakbola -> harga }} </td>
				<td>
					<a href="/sepakbola-dashboard/{{$sepakbola->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/sepakbola-dashboard/{{ $sepakbola->id }}" method="post" class="d-inline">
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