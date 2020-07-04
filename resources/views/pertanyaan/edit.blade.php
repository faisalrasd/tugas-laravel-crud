@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" id="judul" value="{{$pertanyaan->judul}}" name="judul" placeholder="Enter judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi :</label>
                <input type="text" class="form-control" id="isi" value="{{$pertanyaan->isi}}"  name="isi" placeholder="Enter isi">
            </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
</div>
@endsection