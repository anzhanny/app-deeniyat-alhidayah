<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->birthdate = $request->birthdate;
        $students->gender = $request->gender;
        $students->nis = $request->nis;
        $students->phone = $request->phone;
        $students->address = $request->address;
        $students->class_id = $request->class_id;
        $students->is_active = $request->is_active;
        $students->father_name = $request->father_name;
        $students->father_job = $request->father_job;
        $students->mother_name = $request->mother_name;
        $students->mother_job = $request->mother_job;
        $students->photo = $request->photo;
        $students->save();
        return $students;
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
        $students = Student::find($id);
        return $students;
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

    //  public function update(Request $request, $id)
    // {
    //     $students = Student::find($id);

    //     $fields = ['name', 'email', 'password', 'birthdate', 'gender', 'nis', 
    //             'phone', 'address', 'class_id', 'is_active', 'father_name', 
    //             'father_job', 'mother_name', 'mother_job', 'photo'];

    //     foreach ($fields as $field) {
    //         if (isset($request->$field)) {
    //             $students->$field = $request->$field;
    //         }
    //     }

    //     $students->save();
    //     return $students;
    // }

    public function update(Request $request, $id)
    {
        
        $students = Student::find($id);
        if (isset($request->name)) $students->name = $request->name;
        if (isset($request->email)) $students->email = $request->email;
        if (isset($request->password)) $students->password = $request->password;
        if (isset($request->birthdate)) $students->birthdate = $request->birthdate;
        if (isset($request->gender)) $students->gender = $request->gender;
        if (isset($request->nis)) $students->nis = $request->nis;
        if (isset($request->phone)) $students->phone = $request->phone;
        if (isset($request->address)) $students->address = $request->address;
        if (isset($request->class_id)) $students->class_id = $request->class_id;
        if (isset($request->is_active)) $students->is_active = $request->is_active;
        if (isset($request->father_name)) $students->father_name = $request->father_name;
        if (isset($request->father_job)) $students->father_job = $request->father_job;
        if (isset($request->mother_name)) $students->mother_name = $request->mother_name;
        if (isset($request->mother_job)) $students->mother_job = $request->mother_job;
        if (isset($request->photo)) $students->photo = $request->photo;
        
        $students->save();
        return $students;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();
    }
}
