
@extends('layouts.backend')

@section('content')

<div class="container mt-4">

    <h3>Data Mahasiswa</h3>

    <!-- Tombol Tambah -->
    <button type="button" class="btn btn-success mb-3">
        Tambah +
    </button>

    <!-- Tabel Data Mahasiswa -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1?>
            @foreach ($data as $mhs)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }} </td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->nohp }}</td>
                <td>{{ $mhs->foto }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
        </tbody>
         @endforeach
    </table>

</div>

@endsection
