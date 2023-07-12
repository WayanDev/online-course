<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KursusController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all();
        return view('kursus.index', compact('kursus'));
    }

    public function create()
    {
        return view('kursus.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
        ],[
            'judul.required' => 'Judul kursus harus diisi.',
            'deskripsi.required' => 'Deskripsi kursus harus diisi.',
            'durasi.required' => 'Durasi Kursus harus diisi.',
        ]);
        $kursus = new Kursus;
        $kursus->judul = $validatedData['judul'];
        $kursus->deskripsi = $validatedData['deskripsi'];
        $kursus->durasi = $validatedData['durasi'];
        $kursus->save();

        Alert::success('Sukses', 'Data Kursus berhasil ditambahkan')->persistent(true)->autoClose(3000);
        return redirect()->route('kursus.index');
    }

    public function edit($id)
    {
        //Menampilkan form edit
        $kursus = Kursus::findOrFail($id);
        return view('kursus.edit', compact('kursus'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
        ],[
            'judul.required' => 'Judul kursus harus diisi.',
            'deskripsi.required' => 'Deskripsi kursus harus diisi.',
            'durasi.required' => 'Durasi Kursus harus diisi.',
        ]);
        $kursus = Kursus::findOrFail($id);
        $kursus->judul = $validatedData['judul'];
        $kursus->deskripsi = $validatedData['deskripsi'];
        $kursus->durasi = $validatedData['durasi'];
        $kursus->save();

        Alert::info('Berhasil', 'Berhasil mengedit Kursus')->persistent(true)->autoClose(3000);
        return redirect()->route('kursus.index');
    }

    public function destroy(string $id)
    {
        $kursus = Kursus::findOrFail($id);
        $kursus->delete();
        
        Alert::info('Berhasil', 'Berhasil menghapus Kursus')->persistent(true)->autoClose(3000);
        return redirect()->route('kursus.index');
    }
}
