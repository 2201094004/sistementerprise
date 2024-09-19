@extends('layout.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Role</h1>

    <!-- Form Tambah Role -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Role</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama role" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('role.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
