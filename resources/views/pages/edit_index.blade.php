@extends('layouts.main')
@section('content')
<script>
	function sum() {
		  var kredit = document.getElementById('kredit').value;
		  var debet = document.getElementById('debet').value;
		  var result = parseInt(kredit) - parseInt(debet);
		  if (!isNaN(result)) { 
			 document.getElementById('saldo').value = result;
		  }
	}
</script>
<h1 class="text-center">EDIT INDEX</h1>
<br>
<form  method="post" action="{{route('index.update',$index->id)}}">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="tanggal">TANGGAL</label>
		<input type="date" name="tanggal" class="form-control" required="" value="{{$index->tanggal}}" >
	</div>
	<div class="form-group">
		<label for="coa_id">COA ID</label>
		<select name="coa_id" class="form-control">
			{{-- {{$index->CoA_id}}" --}}
            @foreach($data as $d)
			<option value="{{$d->id}}">{{$d->kategori_coa}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>KETERANGAN</label>
        <textarea name="keterangan" class="form-control">{{$index->keterangan}}</textarea>
    </div>
	<div class="form-group">
		<label>KREDIT</label>
		<input type="text" id="kredit" onkeyup="sum()" name="kredit" class="form-control" required="" value="{{$index->kredit}}">
	</div>
    <div class="form-group">
		<label>DEBET</label>
		<input type="text" id="debet" onkeyup="sum()" name="debet" class="form-control" required="" value="{{$index->debet}}" >
    </div>
    <div class="form-group">
		<label>SALDO</label>
		<input type="text" id="saldo" name="saldo" class="form-control" required="" value="{{$index->saldo}}" readonly="readonly">
    </div>
	<input type="submit" class="btn btn-info">
</form>
@endsection