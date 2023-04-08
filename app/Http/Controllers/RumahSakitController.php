<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RumahSakitController extends Controller
{
    //
    public function index(): View{
        $data = RumahSakit::get();

        return view('rumahsakit.index', compact('data'));
    }

    public function create(): View {
        return view('rumahsakit.create');
    }

    public function store(): RedirectResponse{

        return redirect()->route('rumahsakit.index')->with(['success' => 'Data berhasil disimpan']);
    }


    public function destroy($id) {
        $data = RumahSakit::findOrFail($id);
        $data->delete();

        // return redirect()->route('rumahsakit.index');
    }
}
