<?php

namespace App\Http\Controllers;

use App\Models\ClassDeeniyat;
use Illuminate\Http\Request;

class ClassDeeniyatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class_deeniyats = ClassDeeniyat::get();
        return $class_deeniyats;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $class_deeniyats = new ClassDeeniyat();
        $class_deeniyats->class_name = $request->class_name;
        $class_deeniyats->teacher_id = $request->teacher_id;
        $class_deeniyats->save();
        return $class_deeniyats;
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
        $class_deeniyats = ClassDeeniyat::find($id);
        return $class_deeniyats;
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
    public function update(Request $request, $id)
    {
        $class_deeniyats = ClassDeeniyat::find($id);
        if (isset($request->class_name)) $class_deeniyats->class_name = $request->class_name;
        if (isset($request->teacher_id)) $class_deeniyats->teacher_id = $request->teacher_id;        
        $class_deeniyats->save();
        return $class_deeniyats;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class_deeniyats = ClassDeeniyat::find($id);
        $class_deeniyats->delete();
    }
}
