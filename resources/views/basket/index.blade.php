@extends('layout.main')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<br>
	<h3>Basket</h3>	

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

			@foreach ($baskets as $basket)
			
			<tr>

				<td> {{ $basket -> id }} </td>
				<td> {{ $basket -> nama }} </td>
				<td> {{ $basket -> brand }} </td>
				<td> {{ $basket -> stok }} </td>
				<td> {{ $basket -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection