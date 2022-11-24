@extends('layout')

@section('title', 'Data Prestasi')

@section('content')
    <h2>Prestasi.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>ID</th>
                <th>Nama Prestasi </th>
                <th>Nama Tingkat</th>
                <th>Juara Ke</th>
                <th>Nama Peserta</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namaprestasi }}</td>
                <td>{{ $person->tingkat }}</td>
                <td>{{ $person->juarake }}</td>
                <td>{{ $person->namapeserta }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection