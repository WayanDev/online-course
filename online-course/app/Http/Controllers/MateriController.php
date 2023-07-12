<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::with('kursus')->get();
        return view('materi.index', compact('materi'));
    }

    public function create()
    {
        $kursus = Kursus::all();
        return view('materi.create', compact('kursus'));
    }

    public function store(Request $request, Kursus $kursus)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'kursus_id' => 'required',
            'deskripsi' => 'required',
            'link_embed' => 'required',
        ],[
            'judul.required' => 'Judul kursus harus diisi.',
            'kursus_id.required' => 'Kursus harus diisi.',
            'deskripsi.required' => 'Deskripsi kursus harus diisi.',
            'link_embed.required' => 'Link Embed Materi harus diisi.',
        ]);
        $materi = new Materi;
        $materi->judul = $validatedData['judul'];
        $materi->kursus_id = $validatedData['kursus_id'];
        $materi->deskripsi = $validatedData['deskripsi'];
        $materi->link_embed = $validatedData['link_embed'];
        $materi->save();

        Alert::success('Sukses', 'Data Materi berhasil ditambahkan')->persistent(true)->autoClose(3000);
        return redirect()->route('materi.index', $kursus);
    }

    public function edit($id)
    {
        $kursus = Kursus::all();
        $materi = Materi::findOrFail($id);
        return view('materi.edit', compact('kursus', 'materi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'kursus_id' => 'required',
            'deskripsi' => 'required',
            'link_embed' => 'required',
        ],[
            'judul.required' => 'Judul kursus harus diisi.',
            'kursus_id.required' => 'Kursus harus dipilih.',
            'deskripsi.required' => 'Deskripsi kursus harus diisi.',
            'link_embed.required' => 'Link Embed Kursus harus diisi.',
        ]);
        $materi = Materi::findOrFail($id);
        $materi->judul = $validatedData['judul'];
        $materi->kursus_id = $validatedData['kursus_id'];
        $materi->deskripsi = $validatedData['deskripsi'];
        $materi->link_embed = $validatedData['link_embed'];
        $materi->save();

        Alert::info('Berhasil', 'Berhasil mengedit Materi')->persistent(true)->autoClose(3000);
        return redirect()->route('materi.index');
    }

    public function destroy(string $id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        Alert::info('Berhasil', 'Berhasil menghapus Materi')->persistent(true)->autoClose(3000);
        return redirect()->route('materi.index')->with('success', 'Data desa berhasil dihapus');
    }
}
