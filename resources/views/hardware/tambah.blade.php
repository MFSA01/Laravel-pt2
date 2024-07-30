@extends('layout')

@section('content')
    <h1>Tambah Hardware</h1>

    <form action="{{ route('hardware.store') }}" method="post">
        @csrf
        <div>
            <label for="hardware">Todo</label>
            <input type="text" name="hardware" id="nama" placeholder="Nama Hardware" required>
        </div>
        <div>
            <label for="hardware">Keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Keterangan Hardware" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection