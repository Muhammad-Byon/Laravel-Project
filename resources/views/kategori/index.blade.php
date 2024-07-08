@extends('layout.main')
@section('container')
@parent

<div class="mt-3">
	<br>
	<h2 class="text-center">Kategori</h2>
	
	@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{session('pesan')}}
	</div>
	@endif
	
	<table class="table table-bordered mt-2">
		<tr>
			<th>No</th>
			<th>Kategori</th>
		</tr>
		@foreach($kategoris as $kategori)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $kategori->nama }}</td>
			
		</tr>	
		@endforeach
	</table>


	<a class="btn btn-primary" href="/home">Back</a>
	

	@endsection