<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('index', compact('slides'));
    }
}
