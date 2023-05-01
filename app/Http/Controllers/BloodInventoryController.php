<?php

namespace App\Http\Controllers;

use App\Models\BloodInventory;
use App\Models\Bloodbank;
use Illuminate\Http\Request;

class BloodInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
     
         return view('inventory.show', ['bloodbanks'=>Bloodbank::all()]);
        return view('inventory.show', ['bloodInventory'=>BloodInventory::all()]);
      
        
        
        }
        
    
        

       


    

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        return view('inventory.create', ['bloodbanks'=>Bloodbank::all()]);
        return view('inventory.create',['bloodInventory'=>BloodInventory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $bloodInventory = new BloodInventory;
        $bloodInventory->bloodbank_id = $request->input('bloodbank_id');
        $bloodInventory->blood_group = $request->input('blood_group');
        $bloodInventory->pints_available = $request->input('pints_available');
        $bloodInventory->save(); 

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(BloodInventory $bloodInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $bloodInventory=BloodInventory::findOrfail($id);
      
        
        $bloodbanks=Bloodbank::all();
        
     
        return view('inventory.update',compact('bloodbanks','bloodInventory'));
    }
       
       
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $bloodInventory = BloodInventory::findOrFail($id);
        $bloodInventory->pints_available = $request->input('pints_available');
        $bloodInventory->save();
        return redirect()->route("bloodInventory.index");
       
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $bloodInventory =BloodInventory::findOrFail($id);
         $bloodInventory ->delete();
        return redirect(route('bloodInventory.index'))->with('success','Company Subscription deleted successfully.');
    }
}
