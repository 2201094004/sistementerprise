@extends('layout.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Role</h1>

    <!-- Form Edit Role -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('pages.role.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Role</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pages.role.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
