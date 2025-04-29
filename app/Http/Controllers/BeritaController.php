<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $beritas = Berita::latest()->simplePaginate(5);

        if ($request->ajax()) {
            $view = view('profil.partialberita', compact('beritas'))->render();
            return response()->json([
                'html' => $view,
                'hasMore' => $beritas->hasMorePages()
            ]);
        }

        return view('profil.berita', compact('beritas'));
    }
    public function show(Berita $berita)
    {
        return view('profil.beritaShow', compact('berita'));
    }
}
