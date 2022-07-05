<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\UserRegisters;
use Illuminate\Http\Request;

class UserRegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = UserRegisters::all();

        return response()->json($userList);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRegisters  $userRegisters
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userItem = UserRegisters::with('destination')
        ->find($id);

        return response()->json($userItem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRegisters  $userRegisters
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRegisters $userRegisters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRegisters  $userRegisters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRegisters $userRegisters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRegisters  $userRegisters
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRegisters $userRegisters)
    {
        //
    }
}
