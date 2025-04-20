<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::get();
        return $reports;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $reports = new Report();
        $reports->student_id = $request->student_id;
        $reports->teacher_id = $request->teacher_id;
        $reports->daily_value = $request->daily_value;
        $reports->monthly_exam = $request->monthly_exam;
        $reports->final_exam = $request->final_exam;
        $reports->academic_year_first = $request->academic_year_first;
        $reports->academic_year_last = $request->academic_year_first;

        $reports->save();
        return $reports;
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
        $reports = Report::find($id);
        return $reports;
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
        $reports = Report::find($id);
        if (isset($request->student_id)) $reports->student_id = $request->student_id;
        if (isset($request->teacher_id)) $reports->teacher_id = $request->teacher_id;
        if (isset($request->daily_value)) $reports->daily_value = $request->daily_value;
        if (isset($request->monthly_exam)) $reports->monthly_exam = $request->monthly_exam;
        if (isset($request->final_exam)) $reports->final_exam = $request->final_exam;
        if (isset($request->academic_year_first)) $reports->academic_year_first = $request->academic_year_first;
        if (isset($request->academic_year_last)) $reports->academic_year_last = $request->academic_year_last;
        
        $reports->save();
        return $reports;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $reports = Report::find($id);
       $reports->delete();
    }
}
