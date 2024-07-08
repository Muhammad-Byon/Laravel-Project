@extends('layout.main')
@section('container')



<table class="table table-bordered mt-4">
	<br>
	<h3>Badminton</h3>	

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

			@foreach ($badmintons as $badminton)
			
			<tr>

				<td> {{ $badminton -> id }} </td>
				<td> {{ $badminton -> nama }} </td>
				<td> {{ $badminton -> brand }} </td>
				<td> {{ $badminton -> stok }} </td>
				<td> {{ $badminton -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection