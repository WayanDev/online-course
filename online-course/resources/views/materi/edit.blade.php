@extends('layout.appadmin')

@section('content')

<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Edit Materi</h2>
                <form action="{{ route('materi.update', $materi->id) }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul',$materi->judul) }}">
                        @if ($errors->has('judul'))
                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="kursus_id" class="form-label">Kursus</label>
                        <select class="form-select" aria-label="Default select example" id="kursus_id" name="kursus_id">
                            <option selected disabled>Pilih Kursus</option>
                            @foreach ($kursus as $k)
                                <option value="{{ $k->id }}" {{ $materi->kursus_id == $k->id ? 'selected' : '' }}>{{ $k->judul }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('kursus_id'))
                            <span class="text-danger">{{ $errors->first('kursus_id') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control">{{ old('deskripsi', $materi->deskripsi) }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="link_embed" class="form-label">Link Embed</label>
                        <input type="url" class="form-control" id="link_embed" name="link_embed" value="{{ old('link_embed', $materi->link_embed) }}">
                        @if ($errors->has('link_embed'))
                            <span class="text-danger">{{ $errors->first('link_embed') }}</span>
                        @endif
                    </div> 

                    <div class="modal-footer my-4">
                        <a href="{{ route('materi.index') }}" type="button" class="btn btn-secondary me-2">Batal</a>
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection