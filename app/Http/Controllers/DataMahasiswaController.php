<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datamahasiswa;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamahasiswa = datamahasiswa::all();
        return view('datamahasiswa', ['title' => 'Mahasiswa'], compact('datamahasiswa'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambahmahasiswa', ['title' => 'Mahasiswa']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datamahasiswa::create([
            'mahasiswa' => $request->mahasiswa,
            'nim' => $request->nim,
            'email' => $request->email,
            'program_studi' => $request->program_studi,
            'kelas' => $request->kelas,
        ]);

        return redirect('/datamahasiswa')->with('success', 'Data dosen berhasil disimpan');
    }

    public function edit($id)
    {
        $datamahasiswa = datamahasiswa::findOrFail($id);
        return view('edit.editmahasiswa', ['title' => 'Mahasiswa'], compact('datamahasiswa'));
    }

    public function destroy($id)
{
    $datamahasiswa = datamahasiswa::findOrFail($id);
    $datamahasiswa->delete();

    return redirect('/datamahasiswa')->with('success', 'Data dosen berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mahasiswa' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'program_studi' => 'required',
            'kelas' => 'required',
        ]);

        datamahasiswa::whereId($id)->update($validatedData);

        return redirect('/datamahasiswa')->with('success', 'Data dosen berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $datamahasiswa = datamahasiswa::where('mahasiswa', 'LIKE', "%$query%")
                    ->orWhere('nim', 'LIKE', "%$query%")
                    ->orWhere('email', 'LIKE', "%$query%")
                    ->orWhere('program_studi', 'LIKE', "%$query%")
                    ->orWhere('kelas', 'LIKE', "%$query%")
                    ->get();

    if ($datamahasiswa->isEmpty()) {
        return view('datamahasiswa', ['datamahasiswa' => $datamahasiswa])->with('message', 'No results found.');
    } else {
        return view('datamahasiswa', ['datamahasiswa' => $datamahasiswa]);
    }
}

}
