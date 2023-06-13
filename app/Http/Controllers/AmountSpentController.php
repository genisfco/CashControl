<?php

namespace App\Http\Controllers;

use App\Models\AmountSpent;
use Illuminate\Http\Request;

class AmountSpentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  NÃO HAVERÁ
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registerAmountSpent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Amount::create($input);
        return redirect('AmountSpentController')->with('flash_message', 'Student Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(AmountSpent $amountSpent)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AmountSpent $amountSpent)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AmountSpent $amountSpent)
    {
        //  NÃO HAVERÁ
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AmountSpent $amountSpent)
    {

    }
}
