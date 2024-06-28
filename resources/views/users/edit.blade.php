@extends('layouts.app')

@section('content')
<h1>Edit Pengguna</h1>

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
