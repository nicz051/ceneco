<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB::table('accounts')
        // ->whereExists(function ($query) {
        //     $query->select(DB::raw(1))
        //           ->from('bills')
        //           ->whereRaw('bills.meter_number = accounts.meter_number')
        //           ->whereRaw('bills.due_date<=2019-12-25')
        //           ->whereRaw('bills.status=0');
        // })
        // ->get();
        // return view('pages.dashboard');

        $accounts = DB::table('accounts')
           ->whereExists(function ($query) {
               $query->select(DB::raw(1))
                     ->from('bills')
                     ->whereRaw('bills.bills_meter_number = accounts.meter_number')
                     ->whereRaw('bills.due_date <= CURDATE()')
                     ->whereRaw('bills.status = 0');
           })
           ->get();

           $accounts1 = DB::table('accounts')
           ->whereExists(function ($query) {
               $query->select(DB::raw(1))
                     ->from('bills')
                     ->whereRaw('bills.bills_meter_number = accounts.meter_number')
                     ->whereRaw('bills.disconnection_date <= CURDATE()')
                     ->whereRaw('bills.status = 0');
           })
           ->get();

        return view('pages.dashboard', ['accounts' => $accounts, 'accounts1' => $accounts1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
