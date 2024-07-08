@extends('layout.main')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<br>
	<h3>Piano</h3>	

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

			@foreach ($pianos as $piano)
			
			<tr>

				<td> {{ $piano -> id }} </td>
				<td> {{ $piano -> nama }} </td>
				<td> {{ $piano -> brand }} </td>
				<td> {{ $piano -> stok }} </td>
				<td> {{ $piano -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection