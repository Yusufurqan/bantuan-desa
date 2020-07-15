<!DOCTYPE html>
<html>
<head>
	<title>Cetak PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h1 class="text-center">INDEX</h1>
	</center>
 
	<table class="table table-striped">
        <tr class="table-info">
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>COA ID</th>
            <th>Keterangan</th>
            <th>Kredit</th>
            <th>Debet</th>
            <th>Saldo</th>
        </tr>
        @php $no = 0; @endphp
        @foreach($data as $d)
        <tr>
            @php $no++ @endphp
            <td> {{$no}} </td>
            <td>{{$d->tanggal}}</td>
            <td>{{$d->coa_id}}</td>
            <td>{{$d->keterangan}}</td>
            <td>@currency($d->kredit)</td>
            <td>@currency($d->debet)</td>
            <td>@currency($d->saldo)</td>
        </tr>
        {!! $data->links() !!}
        @endforeach
    </table>
 
</body>
</html>