<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(Kursus $kursus)
    {
        $materi = $kursus->materis;
        return view('materi.index', compact('kursus', 'materi'));
    }

    public function create(Kursus $kursus)
    {
        return view('materi.create', compact('kursus'));
    }

    public function store(Request $request, Kursus $kursus)
    {
        $kursus->materis()->create($request->all());
        return redirect()->route('materi.index', $kursus);
    }

    public function edit(Kursus $kursus, Materi $materi)
    {
        return view('materi.edit', compact('kursus', 'materi'));
    }

    public function update(Request $request, Kursus $kursus, Materi $materi)
    {
        $materi->update($request->all());
        return redirect()->route('materi.index', $kursus);
    }

    public function destroy(Kursus $kursus, Materi $materi)
    {
        $materi->delete();
        return redirect()->route('materi.index', $kursus);
    }
}
