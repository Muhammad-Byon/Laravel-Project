@extends('dashboard.layout.main')
@section('JudulPages','Drum')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Drum</h3>
	<a href="/drum-dashboard/create" class="btn btn-primary">Create</a>	

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

			@foreach ($drums as $drum)
			
			<tr>

				<td> {{ $drum -> id }} </td>
				<td> {{ $drum -> nama }} </td>
				<td> {{ $drum -> brand }} </td>
				<td> {{ $drum -> stok }} </td>
				<td> {{ $drum -> harga }} </td>
				<td>
					<a href="/drum-dashboard/{{$drum->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/drum-dashboard/{{ $drum->id }}" method="post" class="d-inline">
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