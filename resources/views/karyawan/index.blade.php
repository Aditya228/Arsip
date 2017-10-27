@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right"><a href="karyawan/create">Tambah Data</a></div></div>
		<div class="panel-body">
		{!! Form::open(['url'=>url('/'),'method'=>'post','class'=>'form-horizontal','id'=>'searchForm']) !!}
	<fieldset>
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'s','required']) !!}
		{!! Form::submit('Search',['id'=>'submitButton']) !!}
	</fieldset>
	{!! Form::close() !!}
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
				</thead>
				<tbody>
				@foreach($karyawan as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->kategori}}</td>
						<td>{{$data->status_karyawan}}</td>
						<td>{{$data->lemari}}</td>
						<td>Lemari {{$data->posisi}}</td>
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
				<td>
				<a href="{{URL::to('printPreview')}}" class="btnPrint">Print</a>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btnPrint").printPage();
	});
</script>
</td>
			</table>
		</div>
	</div>
</div>
</div>
@endsection