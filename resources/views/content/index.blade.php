@extends('layouts.main')
@section('content')
<h1 class="text-center">INDEX</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('index.create')}}" class="btn btn-info">TAMBAH INDEX</a>
	</div>
</div>
{{-- @if($massage = Session::has('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif --}}
<br>

<table class="table table-striped">
	<tr class="table-info">
		<th>Nomor</th>
		<th>Tanggal</th>
		<th>COA ID</th>
        <th>Keterangan</th>
        <th>Debet</th>
        <th>Kredit</th>
		<th>Saldo</th>
		<th>Action</th>
	</tr>
	@php $no = 0; @endphp
	@foreach($data as $d)
	<tr>
		@php $no++ @endphp
		<td> {{$no}} </td>
		<td>{{$d->tanggal}}</td>
		<td>{{$d->coa_id}}</td>
        <td>{{$d->keterangan}}</td>
        <td>{{$d->debet}}</td>
        <td>{{$d->kredit}}</td>
		<td>{{$d->saldo}}</td>
		<td>
			<form action="{{ route('index.destroy',$d->id) }}" method="POST">
	
				{{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}

				<a class="btn btn-primary" href="{{ route('index.edit',$d->id) }}">Edit</a>

				@csrf
				@method('DELETE')

				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
		
	</tr>
	{!! $data->links() !!}
	@endforeach
</table>
<br>
{{-- <p class="text-center">{{$data->links()}}</p> --}}

@endsection