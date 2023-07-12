<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kursus = Kursus::count();
        $materi = Materi::count();
        return view('dashboard',compact('kursus','materi'));
    }
}
