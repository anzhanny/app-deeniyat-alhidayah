<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logins = Login::get();
        return $logins;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $logins = new Login();
        $logins->user_id = $request->user_id;
        $logins->role_id = $request->role_id;
        $logins->username = $request->username;
        $logins->password = $request->password;
        $logins->save();
        return $logins;
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
        $logins = Login::find($id);
        return $logins;
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
        $logins = Login::find($id);
        if (isset($request->user_id)) $logins->user_id = $request->user_id;
        if (isset($request->role_id)) $logins->role_id = $request->role_id;
        if (isset($request->username)) $logins->username = $request->username;
        if (isset($request->password)) $logins->password = $request->password;        
        $logins->save();
        return $logins;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $logins = Login::find($id); 
        $logins->delete();
    }
}
