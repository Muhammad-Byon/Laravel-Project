@extends('dashboard.layout.main')
@section('JudulPages','Gitar')
@section('container')
@parent

<div class="row">
	<div class="col col-lg-6">
		<h3>Entri Data</h3>
			<form action="/gitar-dashboard" method="post">
				@csrf
				<div class="mb-3">
					<label class="form-label">Nama Barang</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama">
				</div>
				@error('nama')
					{{ $message }}
				@enderror
				
				<div class="mb-3">
					<label class="form-label">Brand</label>
					<input type="text" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}" id="brand" name="brand">
				</div>
				@error('brand')
					{{ $message }}
				@enderror

				<div class="mb-3">
					<label class="form-label">Stok</label>
					<input type="text" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}" id="stok" name="stok">
				</div>
				@error('stok')
					{{ $message }}
				@enderror

				<div class="mb-3">
					<label class="form-label">Harga</label>
					<input type="text" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" id="harga" name="harga">
				</div>
				@error('harga')
					{{ $message }}
				@enderror

				<div class="mb-3">
					<label class="form-label"></label>
					<button type="submit" class="btn btn-primary">Create</button>
				</div>

			</form>
		</div>
</div>
@endsection