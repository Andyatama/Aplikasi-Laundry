<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Outlet;
use App\Member;
use Illuminate\Http\Request;

class GenerateDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generateData = Transaksi::where('dibayar', 'dibayar')->get();

        return view('laporan.generate-data', [
            'generateData' => $generateData
        ]);
        
    }

    public function cariTgl(Request $request){

        $transaksi = Transaksi::all();
        // $outlet = Outlet::all();
        // $member = Member::all();

        // $widget = [
        //     'users' => $users,
        //     'member' => $member,
        //     'paket' => $paket,
        //     'transaksi' => $transaksi
        //     //...
        // ];
        $generateData = Transaksi::where('dibayar', 'dibayar')->get();

        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $transaksi = Transaksi::whereBetween('tgl_bayar', [$from, $to])->get();

        return view('home', compact(
            // 'id_outlet', 
            // 'kode_invoice', 
            // 'id_member', 
            // 'tgl_bayar', 
            // 'generateData', 
            // 'status', 
            // 'dibayar', 
            'from',
            'to'
            )) ;

        // return view('home', ['trx' => $trx, 'from' => $from, 'to' => $to]);
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
