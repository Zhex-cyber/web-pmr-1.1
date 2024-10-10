@extends('layouts.backend.app')
    <title>Tambah Link Google Form</title>
@section('content')
    <h1>Tambah Link Google Form</h1>

    <form action="{{ route('google_forms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Link Google Form</label>
            <input type="url" name="form_link" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
