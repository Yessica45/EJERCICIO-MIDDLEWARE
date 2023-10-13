<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Edad;
class EdadController extends Controller
{
    public function index()
    {
        $data = Edad::all();
        return view('dashboard', compact('data'));
    }
}
