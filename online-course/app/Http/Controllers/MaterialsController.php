<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function index($id)
    {
        $kursus = Kursus::findOrFail($id);
        $materials = Materi::where('kursus_id', $id)->get();

        return view('materi', compact('materials','kursus'));
    }
}