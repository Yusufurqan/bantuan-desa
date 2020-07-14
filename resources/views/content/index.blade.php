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
		<td data-create="{{$d->created_at}}">{{$d->tanggal}}</td>
		<td>{{$d->coa_id}}</td>
        <td>{{$d->keterangan}}</td>
        <td class="uang">{{$d->debet}}</td>
        <td class="uang">{{$d->kredit}}</td>
		<td class="uang">{{$d->saldo}}</td>
		<td>
			<form action="{{ route('index.destroy',$d->id) }}" method="POST">
	
				{{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}

				<a id="hilang" class="btn btn-primary" href="{{ route('index.edit',$d->id) }}">Edit</a>

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
<script>
	function sukit(){
		var uang = document.getElementsByClassName('uang');
		for (i= 0; i < uang.length; i++) {
			var currency = new Intl.NumberFormat().format(uang[i].innerHTML);
			uang[i].innerHTML= "Rp. "+currency;
			console.log(currency)
		}
		// console.log(uang[0].innerHTML)
	}
</script>

@endsection