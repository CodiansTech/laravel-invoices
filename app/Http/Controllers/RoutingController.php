<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function main(){
        $invoices = Invoice::with('customer')->get();
        return view('invoices', compact('invoices'));
    }

    public function sales(){
        return view('pages.sales');
    }
    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {        
        return view($first.'.'.$second);
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        return view($first.'.'.$second.'.'.$third);
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
