@extends('dashboard.layout.main')
@section('JudulPages','Kategori')
@section('container')
@parent

	<div class="row">
		<div class="col col-md-6">
		<h3>Create Kategori</h3>
		<form action="/kategori-dashboard" method="post">
			@csrf
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nama</label>
				<input type="text" class="form-control @error ('nama') is-invalid @enderror"  value="{{old('nama')}}" id="nama" name="nama">
			</div>
			@error('nama')
				{{ $message }}
			@enderror

			<div class="mb-3">
				<label  class="form-label"></label>
				<button type="submit" class="btn btn-warning">Create</button>
			</div>
		</form>
		</div>
	</div>
 
@endsection