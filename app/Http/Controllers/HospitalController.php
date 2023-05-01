<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset($_GET['search']))
        {
            $hospital =Hospital ::where("name",'LIKE',"%".$_GET['search']."%")->get();
            return view('frontend.hospital',['hospitals'=>$hospital]);
        }
        $hospital = Hospital::all();

        
        return view('frontend.hospital',['hospitals'=>$hospital]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospital.create',['hospitals'=>Hospital::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $hospital =Hospital ::create($request->all());
        if($hospital)
        {
            return back()->with("error","error message") ;
        }
            return redirect('hospital.create')->with('success_msg', 'Hospital created!');
    }

    /**
     * Display the specified resource.
     */
    public function list (Hospital $hospital)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->back()->with('success', 'Hospital deleted successfully.');
    }

   
}
