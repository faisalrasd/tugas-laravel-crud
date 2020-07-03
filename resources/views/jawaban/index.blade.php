@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jawaban as $key => $jawaban)
       <tr>
        <td>{{ $key + 1 }} </td>
        <td> {{ $jawaban-> isi}}</td>
       </tr>
       @endforeach
        </tbody>
    </table>
@endsection