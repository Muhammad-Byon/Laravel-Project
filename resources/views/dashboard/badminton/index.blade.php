@extends('dashboard.layout.main')
@section('JudulPages','Badminton')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Badminton</h3>
	<a href="/badminton-dashboard/create" class="btn btn-primary">Create</a>

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

			@foreach ($badmintons as $badminton)

			<tr>

				<td> {{ $badminton -> id }} </td>
				<td> {{ $badminton -> nama }} </td>
				<td> {{ $badminton -> brand }} </td>
				<td> {{ $badminton -> stok }} </td>
				<td> {{ $badminton -> harga }} </td>
				<td>
					<a href="/badminton-dashboard/{{$badminton->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/badminton-dashboard/{{ $badminton->id }}" method="post" class="d-inline">
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
