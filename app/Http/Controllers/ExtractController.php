<?php

namespace App\Http\Controllers;

use App\Models\Extract;
use Illuminate\Http\Request;

class ExtractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extract = Extract::all();
        return view('extract')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  NÃO HAVERÁ
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Display the specified resource.
     */
    public function show(Extract $extract)
    {
             /**$NameEarned = Name::find();
        $Category = Category::find();
        $Value = Value::find();
        $Date = Date::find();
        $Prove = Prove::find();
        $Recurring = Recurring::find();*/

        return view();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extract $extract)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extract $extract)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extract $extract)
    {
        AmountSpent::destroy($id);
        return redirect('AmountSpentController')->with('flash_message', 'User deleted!');  
    }
}
