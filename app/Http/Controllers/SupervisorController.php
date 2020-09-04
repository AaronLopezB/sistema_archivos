<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupervisorController extends Controller
{
    public function index()
    {
        $files = Storage::disk('public_cobra')->directories("storage");
        #dd($files);
        return view('components.archivos',compact('files'));
    }

    public function show($carpeta)
    {
        $files = Storage::disk('public_cobra')->allFiles("storage/".$carpeta);
        #dd($files);
        return view('components.mostrarContenid',compact('files'));
    }

    public function download($archivo)
    {
        $documento = base64_decode($archivo);
        return response()->download(public_path($documento));
    }

    public function saveArchivo(Request $request)
    {
        dd($request->all());
    }
}
