@extends('layouts.app')
@section('content')
<form action="{{route('departemen.store')}}" method="post">
     @csrf
     <div class="row">
          <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-hearder py-3">
                <h6>Formulir Tambah Departemen</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                   <label>Nama Departemen</label> 
                   <input type="text" class="form-control" name="nama_departemen" value="{{old('nama_departemen')}}">
                </div>
            </div>
            <div class="card-footer">
               <button type="sumbit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>  
     </div>
</form>

@endsection