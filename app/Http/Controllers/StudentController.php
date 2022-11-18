<?php

namespace App\Http\Controllers;
use \App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=student::all();
        return view('student', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        student::create([
            'name' => $request->name,
            'address' => $request->address,
            'DateOfBirth' => $request->DateOfBirth,
            'Telephone' => $request->Telephone,
            'Schooll' => $request->Schooll,
            ]);
            return redirect()->route('student.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,student $student)
    {
        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'DateOfBirth' => $request->DateOfBirth,
            'Telephone' => $request->Telephone,
            'Schooll' => $request->Schooll,
            ]);
            return redirect()->route('student.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
            //redirect to index
            return redirect()->route('student.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
