@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Hasil pencarian {{$cari}}
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>
		<div class="panel-body">
		<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Status Karyawan</th>
						<th>Lemari</th>
						<th>Posisi</th>
						<th>Jumlah</th>
						<th>Satuan</th>
						<th colspan="3">Action</th>
					</tr>
					<tbody>
				@foreach($hasil as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->kategori}}</td>
						<td>{{$data->status_karyawan}}</td>
						<td>{{$data->lemari}}</td>
						<td>{{$data->posisi}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->satuan}}</td>
						<td><a class="btn btn-danger" href="/karyawan/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('karyawan.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-primary" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
				</thead>
				</table>
</div>
</div>
</div>
</div>
</div>
@endsection