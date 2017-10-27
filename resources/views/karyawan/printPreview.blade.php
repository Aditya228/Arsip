<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<style type="text/css">
		table{
			border : 1px solid;
			border-collapse: collapse;
			width: 70%;
			margin: 0 auto;
			text-align: left;		
		}
		tr th{
			background: #ccc;
			border : 1px solid;
		}
		tr td{
			border : 1px solid;
		}
		caption{
			text-align: left;
		}
	</style>
</head>
<body>
	<table class="table">
	<caption><h1>Product Report</h1></caption>
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
					</tr>
				@endforeach
				</tbody>
</body>
</html>