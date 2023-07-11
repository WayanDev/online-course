@extends('layout.appadmin')

@section('content')

<h1 class="mt-4">Kursus</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Kursus</li>
</ol>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between items-center">
        <div class="pt-2">
            <i class="fas fa-table me-1"></i>
            Data Kursus
        </div>
        <div class="text-end">
            <a class="btn btn-primary" href="#">
                Tambah Data
            </a>
        </div>
    </div>

    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Durasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($kursus as $kursus)
                
                <tr>
                    <th>{{ $no }}</th>
                    <th>{{ $kursus['judul'] }}</th>
                    <th>{{ $kursus['deskripsi'] }}</th>
                    <th>{{ $kursus['Durasi'] }}</th>
                    <td>
                        <a class="btn btn-warning btn-sm" href="#">Edit</a>
                        <form action="{{ route('list_desa.destroy', $desa->nama) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @php
                    $no++
                @endphp
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection