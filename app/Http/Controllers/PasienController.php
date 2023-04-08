<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class PasienController extends Controller
{
    //
    public function index(): View{
        $data = Pasien::get();

        return view('pasien.index', compact('data'));
    }

    public function create(): View {
        return view('pasien.create');
    }

    public function store(Request $request): RedirectResponse{

        //validate form
        $this->validate($request, [
            // 'rumah_sakit'       => 'required',
            'pasien'            => 'required',
            'alamat'            => 'required',
            'telepon'           => 'required|digits_between:2,12',
        ]);

        Pasien::create([
            'id_rumah_sakit'    => '1',
            'pasien'            => $request->pasien,
            'alamat'            => $request->alamat,
            'telepon'           => $request->telepon,
        ]);

        return redirect()->route('pasien.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function edit($id): View{
        $data = Pasien::findOrFail($id);

        return view('pasien.edit', compact('data'));
    }

    public function update(Request $request, $id): RedirectResponse{
        //validate form
        $this->validate($request, [
        //    'rumah_sakit'       => 'required',
           'pasien'            => 'required',
           'alamat'            => 'required',
           'telepon'           => 'required|digits_between:2,12',
       ]);

       $data = Pasien::findOrFail($id);

       $data->update([
           'id_rumah_sakit'    => '1',
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
