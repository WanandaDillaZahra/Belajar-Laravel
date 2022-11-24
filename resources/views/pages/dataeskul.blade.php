@extends('layout')

@section('title', 'Data Eskul')

@section('content')
    <h2>Eskul.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>ID</th>
                <th>Nama Eskul </th>
                <th>Nama Pembina</th>
                <th>Jumlah Anggota</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namaleskul }}</td>
                <td>{{ $person->namapembina }}</td>
                <td>{{ $person->jumlahanggota }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection