@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('karyawan.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" required="" placeholder="Masukkan Nama">
				</div>

				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<input type="text" name="b" class="form-control" required="" placeholder="Masukkan Kategori">
				</div>

				<div class="form-group">
					<label class="control-lable">Status Karyawan</label>
					<input type="text" name="c" class="form-control" required="" placeholder="Masukkan Status Karyawan">
				</div>

				<div class="form-group">
					<label class="control-lable">Lemari</label>
					<input type="text" name="d" class="form-control" required="" placeholder="Masukkan Lemari">
				</div>

				<div class="form-group">
					<label class="control-lable">Posisi</label>
					<input type="text" name="e" class="form-control" required="" placeholder="Masukkan Posisi">
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="f" class="form-control" required="" placeholder="Masukkan Jumlah">
				</div>

				<div class="form-group">
					<label class="control-lable">Satuan</label>
					<input type="text" name="g" class="form-control" required="" placeholder="Masukkan Satuan">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection