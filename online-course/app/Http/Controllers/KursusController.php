<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

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
        Kursus::create($request->all());
        return redirect()->route('kursus.index');
    }

    public function edit(Kursus $kursus)
    {
        return view('kursus.edit', compact('kursus'));
    }

    public function update(Request $request, Kursus $kursus)
    {
        $kursus->update($request->all());
        return redirect()->route('kursus.index');
    }

    public function destroy(Kursus $kursus)
    {
        $kursus->delete();
        return redirect()->route('kursus.index');
    }
}
