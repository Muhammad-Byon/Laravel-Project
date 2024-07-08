@extends('dashboard.layout.main')
@section('JudulPages','Pelanggan')
@section('container')
@parent

<div class="row">
	<div class="col col-lg-6">
		<h3>Entri Data</h3>
			<form action="/pelanggan-dashboard/{{ $pelanggans->id }}" method="post">
				@Method ('PUT')
				@csrf
				<div class="mb-3">
					<label class="form-label">Nama</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $pelanggans->nama) }}" id="nama" name="nama">
				</div>
				@error('nama')
					{{ $message }}
				@enderror
				
				<div class="mb-3">
					<label class="form-label">Pesanan</label>
					<input type="text" class="form-control @error('pesanan') is-invalid @enderror" value="{{ old('pesanan', $pelanggans->pesanan) }}" id="pesanan" name="pesanan">
				</div>
				@error('pesanan')
					{{ $message }}
				@enderror

				<div class="mb-3">
					<label class="form-label">Kategori</label>
					<select class="form-select" id="kategori_id" name="kategori_id">
						@foreach ($kategoris as $kategori)
						<option value=" {{ $kategori->id}} ">{{$kategori->nama}}</option>
						@endforeach
					</select> 
				</div>
				@error('kategori_id')
					{{ $message }}
				@enderror


				<div class="mb-3">
					<label class="form-label">Unit</label>
					<input type="text" class="form-control @error('unit') is-invalid @enderror" value="{{ old('unit', $pelanggans->unit) }}" id="unit" name="unit">
				</div>
				@error('unit')
					{{ $message }}
				@enderror

				<div class="mb-3">
					<label class="form-label">Harga</label>
					<input type="text" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga', $pelanggans->harga) }}" id="harga" name="harga">
				</div>
				@error('harga')
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