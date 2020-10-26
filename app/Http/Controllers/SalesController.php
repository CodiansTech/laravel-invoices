<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        return view('pages.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'client_name' => 'required',
            'print_postion' => 'required',
            'print_size' => 'required',
            'size' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'address' => 'required',
            'price' => 'required',
            'shipping_price' => 'required',
            'status' => 'required',
        ]);
  
        Sales::create($request->all());
   
        return redirect()->route('sales.index')
                        ->with('success','Sale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        return view('pages.sales.show',compact('sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sale)
    {
        return view('pages.sales.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sale)
    {
        $request->validate([
            'item_name' => 'required',
            'client_name' => 'required',
            'print_postion' => 'required',
            'print_size' => 'required',
            'size' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'address' => 'required',
            'price' => 'required',
            'shipping_price' => 'required',
            'status' => 'required',
        ]);
  
        $sale->update($request->all());
  
        return redirect()->route('sales.index')
                        ->with('success','Sale updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sale)
    {
        $sale->delete();
  
        return redirect()->route('sales.index')
                        ->with('success','Sales deleted successfully');
    }
}
