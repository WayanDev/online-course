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
            <a class="btn btn-primary" href="{{route('kursus.create')}}">
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
                    <th>Durasi(Jam)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($kursus as $k)
                
                <tr>
                    <th>{{ $no }}</th>
                    <th>{{ $k->judul }}</th>
                    <th>{{ $k->deskripsi }}</th>
                    <th>{{ $k->durasi }}</th>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('kursus.edit', $k['id']) }}">Edit</a>
                        <form action="{{ route('kursus.destroy', $k->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                        {{-- Tombol Detail --}}
                        <button type="button" class="btn btn-info" onclick="showDetails(this)" 
                            data-judul="{{ $k->judul }}" data-deskripsi="{{ $k->deskripsi }}" 
                            data-durasi="{{ $k->durasi }}">Detail
                        </button>
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
<script src="{{ asset('js/detail-kursus.js') }}"></script>
@endsection