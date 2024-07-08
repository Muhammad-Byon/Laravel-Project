@extends('layout.main')
@section('container')
@parent

<table class="table table-bordered mt-4">
	<br>
	<h3>Gitar</h3>
	
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

			@foreach ($gitars as $gitar)
			
			<tr>

				<td> {{ $gitar -> id }} </td>
				<td> {{ $gitar -> nama }} </td>
				<td> {{ $gitar -> brand }} </td>
				<td> {{ $gitar -> stok }} </td>
				<td> {{ $gitar -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection