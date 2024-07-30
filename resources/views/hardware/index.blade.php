@extends('layout')

@section('content')
    <h1>Hardware</h1>
    <a href="{{ route('hardware.create') }}">Tambah Hardware</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th width="25%">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hardwares as $hardware)
            <tr>
                <td>{{ $hardware->id }}</td>
                <td>{{ $hardware->hardware }}</td>
                <td>{{ $hardware->keterangan }}</td>
                <td>
                    <a href="{{ url("/hardware/{$hardware->id}") }}">Edit</a>
                    ||
                    <form action="{{ url("/hardware/{$hardware->id}") }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection