<?php

namespace App\Http\Controllers;

use App\Models\PaymentSpp;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class PaymentSppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = PaymentSpp::get();
        return $payments;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $payments = new PaymentSpp();
        $payments->student_id = $request->student_id;
        $payments->month = $request->month;
        $payments->payment_status = $request->payment_status;
        $payments->paid_at = $request->paid_at;
        $payments->upload_transactions = $request->upload_transactions;
        $payments->save();
        return $payments;
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
        $payments = PaymentSpp::find($id);
        return $payments;
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
        $payments = PaymentSpp::find($id);
        if (isset($request->student_id)) $payments->student_id = $request->student_id;
        if (isset($request->month)) $payments->month = $request->month;
        if (isset($request->payment_status)) $payments->payment_status = $request->payment_status;
        if (isset($request->paid_at)) $payments->paid_at = $request->paid_at;
        if (isset($request->upload_transactions)) $payments->upload_transactions = $request->upload_transactions;
        
        $payments->save();
        return $payments;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $payments = PaymentSpp::find($id);
       $payments->delete();
    }
}
