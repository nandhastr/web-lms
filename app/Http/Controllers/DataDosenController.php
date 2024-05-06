<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datadosen;

class DataDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datadosen = datadosen::all();
        return view('datadosen', ['title' => 'Dosen'], compact('datadosen'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambahdosen', ['title' => 'Dosen']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datadosen::create([
            'dosen' => $request->dosen,
            'id_dosen' => $request->id_dosen,
            'email' => $request->email,
            'konsentrasi' => $request->konsentrasi,
        ]);

        return redirect('/datadosen')->with('success', 'Data dosen berhasil disimpan');
    }

    public function edit($id)
    {
        $datadosen = datadosen::findOrFail($id);
        return view('edit.editdosen', ['title' => 'Dosen'], compact('datadosen'));
    }

    public function destroy($id)
{
    $datadosen = datadosen::findOrFail($id);
    $datadosen->delete();

    return redirect('/datadosen')->with('success', 'Data dosen berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'dosen' => 'required',
            'id_dosen' => 'required',
            'email' => 'required',
            'konsentrasi' => 'required',
        ]);

        datadosen::whereId($id)->update($validatedData);

        return redirect('/datadosen')->with('success', 'Data dosen berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $datadosen = datadosen::where('dosen', 'LIKE', "%$query%")
                    ->orWhere('id_dosen', 'LIKE', "%$query%")
                    ->orWhere('email', 'LIKE', "%$query%")
                    ->orWhere('konsentrasi', 'LIKE', "%$query%")
                    ->get();

    if ($datadosen->isEmpty()) {
        return view('datadosen', ['datadosen' => $datadosen])->with('message', 'No results found.');
    } else {
        return view('datadosen', ['datadosen' => $datadosen]);
    }
}

}
