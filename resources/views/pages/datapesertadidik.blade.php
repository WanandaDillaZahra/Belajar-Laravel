@extends('layout')

@section('title', 'Data Peserta Didik')

@section('content')
    <h2>Data Peserta Didik.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->nis}}</td>
                <td>{{$person->namalengkap}}</td>
                <td>{{$person->jk}}</td>
                <td>{{$person->kelas}}</td>
                <td>{{$person->alamat}}</td>
                <td>{{$person->status}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection