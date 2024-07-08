@extends('layout.main')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<br>
	<h3>Sepak Bola</h3>

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

			@foreach ($sepakbolas as $sepakbola)
			
			<tr>

				<td> {{ $sepakbola -> id }} </td>
				<td> {{ $sepakbola -> nama }} </td>
				<td> {{ $sepakbola -> brand }} </td>
				<td> {{ $sepakbola -> stok }} </td>
				<td> {{ $sepakbola -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection