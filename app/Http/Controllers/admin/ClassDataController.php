<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ClassData;
use Illuminate\Http\Request;

class ClassDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.classdata.classdata');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.classdata.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */

    public function showStudents($id)
    {
        // Kalau pakai id
        // $class = ClassData::findOrFail($id);
        // $students = $class->students; // Pastikan relasi 'students' ada di model ClassData

        return view('admin.classdata.totalstudent');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
