<?php

namespace App\Http\Controllers\API;
use App\Models\hoadonban;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
class hoadonbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return hoadonban::all();
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
        $db=new hoadonban();
        $db->id_kh = $request->id_kh;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note = $request->note;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hoadonban  $hoadonban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return hoadonban::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hoadonban  $hoadonban
     * @return \Illuminate\Http\Response
     */
    public function edit(hoadonban $hoadonban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hoadonban  $hoadonban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $db = hoadonban::findOrFail($id);
        $db->id_kh = $request->id_kh;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note = $request->note;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hoadonban  $hoadonban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hoadonban::findOrFail($id)->delete();
        return "Deleted";
    }
}
