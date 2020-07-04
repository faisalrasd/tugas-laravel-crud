@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Item</h3>
        <p> {{ $pertanyaan-> judul}}</p>
        <p> {{ $pertanyaan-> isi}}</p>
    </div>
@endsection