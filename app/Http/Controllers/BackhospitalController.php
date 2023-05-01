<?php

namespace App\Http\Controllers;

use App\Models\Backhospital;
use App\Models\Hospital;
use Illuminate\Http\Request;


class BackhospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hospital.index',['hospitals'=>Hospital::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("userprofile");
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
    public function show(Backhospital $backhospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Backhospital $backhospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Backhospital $backhospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Backhospital $backhospital)
    {
       
    }
}
