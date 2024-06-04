<?php

namespace App\Http\Controllers;

use App\Models\Echogram;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EchogramController extends Controller
{
    public function index()
    {
        $reports = Echogram::all();
        return view('echo.index', compact('reports'));
    }

    public function show(Echogram $data)
    {
        return view('echo.show', compact('data'));
    }
}
