<?php

namespace App\Http\Controllers;

use App\Models\Backbloodbank;

use App\Models\Bloodbank;
use Illuminate\Http\Request;

class BackbloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       

        return view('bank.index',['bloodbanks'=>Bloodbank::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank.dashboad');
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
    public function show(Backbloodbank $backbloodbank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Backbloodbank $backbloodbank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Backbloodbank $backbloodbank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Backbloodbank $backbloodbank)
    {
        //
    }
}
