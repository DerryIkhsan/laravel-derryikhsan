<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class PasienController extends Controller
{
    //
    public function index(): View{
        $data = Pasien::with(['rumah_sakit'])->get();

        return view('pasien.index', compact('data'));
    }

    public function create(): View {
        $rs = RumahSakit::get();

        return view('pasien.create', compact('rs'));
    }

    public function store(Request $request): RedirectResponse{

        //validate form
        $this->validate($request, [
            'rumah_sakit'       => 'required',
            'pasien'            => 'required',
            'alamat'            => 'required',
            'telepon'           => 'required|digits_between:2,12',
        ]);

        Pasien::create([
            'id_rumah_sakit'    => $request->rumah_sakit,
            'pasien'            => $request->pasien,
            'alamat'            => $request->alamat,
            'telepon'           => $request->telepon,
        ]);

        return redirect()->route('pasien.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id): View{
        $data = Pasien::findOrFail($id);
        $rs = RumahSakit::get();


        return view('pasien.edit', compact('data','rs'));
    }

    public function update(Request $request, $id): RedirectResponse{
        //validate form
        $this->validate($request, [
           'rumah_sakit'       => 'required',
           'pasien'            => 'required',
           'alamat'            => 'required',
           'telepon'           => 'required|digits_between:2,12',
       ]);

       $data = Pasien::findOrFail($id);

       $data->update([
           'id_rumah_sakit'    => $request->rumah_sakit,
           'pasien'            => $request->pasien,
           'alamat'            => $request->alamat,
           'telepon'           => $request->telepon,
       ]);

       return redirect()->route('pasien.index')->with(['success' => 'Data berhasil disimpan']);
   }

    public function destroy($id) {
        $data = Pasien::findOrFail($id);
        $data->delete();

        return response(['success' => 'Data berhasil dihapus']);
    }
}
