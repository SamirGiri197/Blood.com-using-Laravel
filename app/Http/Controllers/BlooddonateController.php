<?php

namespace App\Http\Controllers;

use App\Models\Blooddonate;
use Illuminate\Http\Request;

class BlooddonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doner.index',['blooddonates'=>Blooddonate::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "fname"=>"required|string",
            "email" => 'required|email',
            "contact"=>"required|integer",
            "address"=>"required|string",
            "info"=>"required|string",
            "bgroup"=>"required",
            "gender"=>"required"

         
        ]);
        $blooddonate =Blooddonate ::create($request->all());
        if($blooddonate)
        {
            return back()->with("error","error message") ;
        }
            return redirect('blooddonate.create')->with('success_msg', 'Hospital created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blooddonate $blooddonate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blooddonate $blooddonate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blooddonate $blooddonate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blooddonate $blooddonate)
    {
        $blooddonate->delete();
        return redirect()->back()->with('success', 'Hospital deleted successfully.');
    }
}
