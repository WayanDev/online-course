@extends('layouts.appadmin')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                    <div class="my-5 text-white d-flex align-items-center justify-content-center flex-column">
                        <h1 class="text-white mb-2 text-center">{{ $kursus->judul}}</h1>
                        <ol class="breadcrumb mb-4 text-center">   
                            <li class="breadcrumb-item"><a style="text-decoration: none" href="/">Home</a></li>
                            <li class="breadcrumb-item active"><a style="text-decoration: none" href="{{ route('course') }}">Course</a></li>
                            <li class="breadcrumb-item active">{{ $kursus->judul}}</li>
                        </ol>
                    </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container">
            <p class="card-text fs-6">{!! nl2br(e($kursus->deskripsi)) !!}</p>
            <div class="card ">
                <div class="card-header d-flex justify-content-between items-center">
                    <div class="pt-2">
                        <i class="fas fa-table me-1"></i>
                        Daftar Materi
                    </div>
                </div>
                <div class="row justify-content-center" style="padding: 20px">
                    <div class="col-md-8">
                        <div class="row row-cols-1 g-1">
                            @foreach ($materials as $m)
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center" style="text-decoration: none">
                                            <div>
                                                <h4 class="card-title">{{ $m->judul }}</h4>
                                                <p class="card-text fs-6">{!! nl2br(e($m->deskripsi)) !!}</p>
                                                <a href="{{ $m->link_embed }}" class="card-text fs-6">Link Materi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection  