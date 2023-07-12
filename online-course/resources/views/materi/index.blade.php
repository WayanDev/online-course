@extends('layout.appadmin')

@section('content')

<h1 class="mt-4">Materi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Materi</li>
</ol>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between items-center">
        <div class="pt-2">
            <i class="fas fa-table me-1"></i>
            Data Materi
        </div>
        <div class="text-end">
            <a class="btn btn-primary" href="{{route('materi.create')}}">
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
                    <th>Kursus</th>
                    <th>Deskripsi</th>
                    <th>Link Embed</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($materi as $m)
                
                <tr>
                    <th>{{ $no }}</th>
                    <th>{{ $m->judul}}</th>
                    <th>{{ $m->kursus->judul}}</th>
                    <th>{{ $m->deskripsi }}</th>
                    <th>{{ $m->link_embed }}</th>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('materi.edit', $m['id']) }}">Edit</a>
                        <form action="{{ route('materi.destroy', $m->id) }}" method="POST">
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