@extends('layout.main')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<br>
	<h3>Drum</h3>

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
			</tr>

			@foreach ($drums as $drum)
			
			<tr>

				<td> {{ $drum -> id }} </td>
				<td> {{ $drum -> nama }} </td>
				<td> {{ $drum -> brand }} </td>
				<td> {{ $drum -> stok }} </td>
				<td> {{ $drum -> harga }} </td>

			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection