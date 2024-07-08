@extends('dashboard.layout.main')
@section('JudulPages','Kategori')
@section('container')
@parent

	<div class="row">
		<div class="col-lg-6">
			<h3>Edit Data</h3> 
			<form action="/kategori-dashboard/{{ $kategoris->id }}" method="post">
				@method('PUT')   
				@csrf
				<div class="mb-3">
					<label class="form-label">Nama Kategori</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $kategoris->nama) }}" id="nama" name="nama">
				</div>
				@error('nama')
					{{ $message }}
				@enderror
				
				
				<div class="mb-3">
					<label class="form-label"></label>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
@endsection