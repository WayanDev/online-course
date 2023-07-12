@extends('layouts.appadmin')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                    <div class="my-5 text-white d-flex align-items-center justify-content-center flex-column">
                        <h1 class="text-white mb-2 text-center">Course MSIB</h1>
                        <ol class="breadcrumb mb-4 text-center">   
                            <li class="breadcrumb-item"><a style="text-decoration: none" href="/">Home</a></li>
                            <li class="breadcrumb-item active"><a style="text-decoration: none" href="course">Course</a></li>
                        </ol>
                    </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container">
            <div class="card ">
                <div class="card-header d-flex justify-content-between items-center">
                    <div class="pt-2">
                        <i class="fas fa-table me-1"></i>
                        Daftar Kursus
                    </div>
                    <div class="text-end">
                        <form action="{{ route('kursus.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari kursus">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center" style="padding: 20px">
                    <div class="col-md-8">
                        <div class="row row-cols-1 g-1">
                            @foreach ($kursus as $k)
                                <div class="col">
                                    <div class="card h-100">
                                        <a href="{{ route('materials', ['id' => $k->id]) }}" class="card-body d-flex align-items-center" style="text-decoration: none">
                                            <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/12/18/3262277252.png" class="card-img-start me-3" alt="hero" style="width: 100px;">
                                            <div>
                                                <h4 class="card-title">{{ $k->judul }}</h4>
                                                <p class="card-text fs-6">{{ $k->durasi }} Jam</p>
                                            </div>
                                        </a>
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