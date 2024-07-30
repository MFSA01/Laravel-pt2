@extends('layout')

@section('content')
    <h1>Edit Hardware</h1>
    
    <form action="{{ route('hardware.update', $hardware->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="hardware">Todo</label>
            <input type="text" name="hardware" id="hardware" placeholder="skin" value="{{ $hardware->hardware }}" required>
        </div>
        <br>
        <div>
            <label for="hardware">keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="keterangan skin" required>{{ $hardware->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection