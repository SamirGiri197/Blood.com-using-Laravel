<?php

namespace App\Http\Controllers;

use App\Models\Bloodbank;
use Illuminate\Http\Request;

class BloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset($_GET['search']))
        {
            $hospital =Bloodbank ::where("name",'LIKE',"%".$_GET['search']."%")->get();
            return view('frontend.blood-bank',['bloodbanks'=>$hospital]);
        }
        
       
    //     $bloodbank = Bloodbank::orderBy('name', 'ASC')->get();
        
    //     return view ('frontend.blood-bank',["bloodbanks"=>$bloodbank]);
    // 
    return view('frontend.blood-bank',['bloodbanks'=>Bloodbank::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bloodbank =Bloodbank::create($request->all());
        if($bloodbank)
        {
            return back()->with("error","error message") ;
        }
            return redirect('bloodbank.create')->with('success_msg', 'Bloodbank created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bloodbank $bloodbank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bloodbank $bloodbank)
    {
        $bloodbank->delete();
        return redirect()->back()->with('success', 'Hospital deleted successfully.');
    }
}
