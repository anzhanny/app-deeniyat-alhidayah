<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return $teachers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $teachers = new Teacher();
       $teachers->name = $request->name;
       $teachers->email = $request->email;
       $teachers->nip = $request->nip;
       $teachers->birthdate = $request->birthdate;
       $teachers->phone = $request->phone;
       $teachers->save();
       return $teachers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return $teachers;
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
        $teachers = Teacher::find($id);
        if (isset($request->name)) $teachers->name = $request->name;
        if (isset($request->email)) $teachers->email = $request->email;
        if (isset($request->nip)) $teachers->nip = $request->nip;
        if (isset($request->birthdate)) $teachers->birthdate = $request->birthdate;
        if (isset($request->phone)) $teachers->phone = $request->phone;        
        $teachers->save();
        return $teachers;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teacher::find($id);
        $teachers->delete();
    }
}
