@extends('layout.main')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<br>
	<h3>Pelanggan</h3>
	
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
			</tr>

			@foreach ($pelanggans as $pelanggan)
			
			<tr>

				<td> {{ $pelanggan -> id }} </td>
				<td> {{ $pelanggan -> nama }} </td>
				<td> {{ $pelanggan -> pesanan }} </td>
				<td> {{ $pelanggan -> kategori -> nama }} </td>
				<td> {{ $pelanggan -> unit }} </td>
				<td> {{ $pelanggan -> harga }} </td>
				
			</tr>
			@endforeach
		
	</table>
	<a class="btn btn-primary" href="/home">Back</a>

@endsection