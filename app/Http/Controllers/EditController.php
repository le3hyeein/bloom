<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('layouts\edit');
        $users = User::all(); // Mengambil semua data pengguna
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // Return the view for editing the user
        return view('users.edit', compact('user'));
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
