@extends('dashboard.layout.main')
@section('JudulPages','Basket')
@section('container')
@parent


<table class="table table-bordered mt-4">
	<h3>Basket</h3>
	<a href="/basket-dashboard/create" class="btn btn-primary">Create</a>	

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

			@foreach ($baskets as $basket)
			
			<tr>

				<td> {{ $basket -> id }} </td>
				<td> {{ $basket -> nama }} </td>
				<td> {{ $basket -> brand }} </td>
				<td> {{ $basket -> stok }} </td>
				<td> {{ $basket -> harga }} </td>
				<td>
					<a href="/basket-dashboard/{{$basket->id}}/edit" class="btn btn-warning">Edit</a>
					<form action="/basket-dashboard/{{ $basket->id }}" method="post" class="d-inline">
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