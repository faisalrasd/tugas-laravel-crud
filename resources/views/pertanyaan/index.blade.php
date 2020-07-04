@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
    <h1> Petanyaan </h1>
    <a href="/pertanyaan/create" class="btn-primary">
    Buat Pertanyaan

    </a>
</div>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $pertanyaan)
       <tr>
        <td>{{ $key + 1 }} </td>
        <td> {{ $pertanyaan-> judul}}</td>
        <td> {{ $pertanyaan-> isi}}</td>
        <td>
        <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn-sm btn-info">Lihat </a>
        <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn-sm btn-default">Edit </a>
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>
       </tr>
       @endforeach
        </tbody>
    </table>
@endsection