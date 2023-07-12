@extends('layout.appadmin')

@section('content')

<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Edit Kursus</h2>
                <form action="{{ route('kursus.update', $kursus->id) }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul',$kursus->judul) }}">
                        @if ($errors->has('judul'))
                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control">{{ old('deskripsi', $kursus->deskripsi) }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="durasi" class="form-label">Durasi</label>
                        <input type="number" class="form-control" id="durasi" name="durasi" value="{{ old('durasi', $kursus->durasi) }}">
                        @if ($errors->has('durasi'))
                            <span class="text-danger">{{ $errors->first('durasi') }}</span>
                        @endif
                    </div> 

                    <div class="modal-footer my-4">
                        <a href="{{ route('kursus.index') }}" type="button" class="btn btn-secondary me-2">Batal</a>
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection