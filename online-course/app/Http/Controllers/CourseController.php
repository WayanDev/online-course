<?php
namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all();
        return view('course', compact('kursus'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $kursus = Kursus::where('judul', 'like', "%$keyword%")->get();

        return view('course', compact('kursus'));
    }
}
