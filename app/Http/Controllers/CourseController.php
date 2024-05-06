<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::all();
        return view('course', ['title' => 'Course'], compact('course'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambahcourse', ['title' => 'Course']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        course::create([
            'id_course' => $request->id_course,
            'course' => $request->course,
            'enrollment_key_dosen' => $request->enrollment_key_dosen,
            'enrollment_key_mahasiswa' => $request->enrollment_key_mahasiswa,
            'kelas' => $request->kelas,
            'partisipan' => $request->partisipan,
        ]);

        return redirect('/course')->with('success', 'Data kelas berhasil disimpan');
    }

    public function edit($id)
    {
        $course = course::findOrFail($id);
        return view('edit.editcourse', ['title' => 'Course'], compact('course'));
    }

    public function destroy($id)
{
    $course = course::findOrFail($id);
    $course->delete();

    return redirect('/course')->with('success', 'Data kelas berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_course' => 'required',
            'course' => 'required',
            'enrollment_key_dosen' => 'required',
            'enrollment_key_mahasiswa' => 'required',
            'kelas' => 'required',
            'partisipan' => 'required',
        ]);

        course::whereId($id)->update($validatedData);

        return redirect('/course')->with('success', 'Data kelas berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $course = course::where('id_course', 'LIKE', "%$query%")
                    ->orWhere('course', 'LIKE', "%$query%")
                    ->orWhere('enrollment_key_dosen', 'LIKE', "%$query%")
                    ->orWhere('enrollment_key_mahasiswa', 'LIKE', "%$query%")
                    ->orWhere('kelas', 'LIKE', "%$query%")
                    ->orWhere('partisipan', 'LIKE', "%$query%")
                    ->get();

    if ($course->isEmpty()) {
        return view('course', ['course' => $course])->with('message', 'No results found.');
    } else {
        return view('course', ['course' => $course]);
    }
}

}
