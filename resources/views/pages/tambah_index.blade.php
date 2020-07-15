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
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Tambah Index</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('index.store') }}">
          @csrf
      <div class="form-group">    
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal"/>
      </div>
      <div class="form-group">
			<label for="coa_id">COA id</label>
			<select name="coa_id" class="form-control">
				@foreach($data as $d)
				<option value="{{$d->id}}">{{$d->kategori_coa}}</option>
				@endforeach
			</select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label for="Kredit">Kredit</label>
              <input type="text" class="form-control" name="kredit" id="kredit" onkeyup="sum()"/>
          </div>
          <div class="form-group">
              <label for="debet">Debet</label>
              <input type="text" class="form-control" name="debet" id="debet" onkeyup="sum()"/>
          </div>
          <div class="form-group">
              <label for="saldo">Saldo</label>
              <input type="text" class="form-control" name="saldo" id="saldo" readonly="readonly"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Kirim</button>
      </form>
  </div>
</div>
</div>
@endsection