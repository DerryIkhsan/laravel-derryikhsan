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

    public function store(Request $request): RedirectResponse{

        //validate form
        $this->validate($request, [
            'rumah_sakit'       => 'required',
            'alamat'            => 'required',
            'email'             => 'required|email|unique:rumah_sakit,email',
            'telepon'           => 'required|digits_between:2,12',
        ]);

        RumahSakit::create([
            'rumah_sakit'       => $request->rumah_sakit,
            'alamat'            => $request->alamat,
            'email'             => $request->email,
            'telepon'           => $request->telepon,
        ]);

        return redirect()->route('rumahsakit.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id): View{
        $data = RumahSakit::findOrFail($id);

        return view('rumahsakit.edit', compact('data'));
    }

    public function update(Request $request, $id): RedirectResponse{
         //validate form
         $this->validate($request, [
            'rumah_sakit'       => 'required',
            'alamat'            => 'required',
            'email'             => 'required|email|unique:rumah_sakit,email,'.$id,
            'telepon'           => 'required|digits_between:2,12',
        ]);

        $data = RumahSakit::findOrFail($id);

        $data->update([
            'rumah_sakit'       => $request->rumah_sakit,
            'alamat'            => $request->alamat,
            'email'             => $request->email,
            'telepon'           => $request->telepon,
        ]);

        return redirect()->route('rumahsakit.index')->with(['success' => 'Data berhasil disimpan']);
    }


    public function destroy($id) {
        $data = RumahSakit::findOrFail($id);
        $data->delete();

        return response(['success' => 'Data berhasil dihapus']);

        // return redirect()->route('rumahsakit.index');
    }
}
