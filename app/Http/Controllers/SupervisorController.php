<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupervisorController extends Controller
{
    public function index()
    {
        $files = Storage::disk('public_cobra')->allfiles("storage/diseno");
        
        return view('admin',compact('files'));
    }
}
