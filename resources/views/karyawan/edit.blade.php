@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('karyawan.update',$karyawan->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$karyawan->nama}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<input type="text" name="b" class="form-control" value="{{$karyawan->kategori}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Status Karyawan</label>
					<input type="text" name="c" class="form-control" value="{{$karyawan->status_karyawan}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Lemari</label>
					<input type="text" name="d" class="form-control" value="{{$karyawan->lemari}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Posisi</label>
					<input type="text" name="e" class="form-control" value="{{$karyawan->posisi}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="f" class="form-control" value="{{$karyawan->jumlah}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Satuan</label>
					<input type="text" name="g" class="form-control" value="{{$karyawan->satuan}}" required="">
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