@extends('dashboard.layout.main')
@section('JudulPages','Pelanggan')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Pelanggan</h3>
	<a href="/pelanggan-dashboard/create" class="btn btn-primary">Create</a>	

	@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{session('pesan')}}
	</div>
	@endif
	
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Pesanan</th>
				<th>Kategori</th>
				<th>Unit</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>

			@foreach ($pelanggans as $pelanggan)
			
			<tr>

				<td> {{ $pelanggan -> id }} </td>
				<td> {{ $pelanggan -> nama }} </td>
				<td> {{ $pelanggan -> pesanan }} </td>
				<td> {{ $pelanggan -> kategori -> nama }} </td>
				<td> {{ $pelanggan -> unit }} </td>
				<td> {{ $pelanggan -> harga }} </td>
				<td>
					<a href="/pelanggan-dashboard/{{$pelanggan->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/pelanggan-dashboard/{{ $pelanggan->id }}" method="post" class="d-inline">
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