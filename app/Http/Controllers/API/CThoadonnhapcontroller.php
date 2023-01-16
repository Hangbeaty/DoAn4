<?php

namespace App\Http\Controllers\API;
use App\Models\CThoadonnhap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
class CThoadonnhapcontroller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CThoadonnhap::all();
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
        $db=new CThoadonnhap();
        $db->id_bill_nhap = $request->id_bill_nhap;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->don_vi = $request->don_vi;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CThoadonnhap  $cThoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CThoadonnhap::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CThoadonnhap  $cThoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(CThoadonnhap $cThoadonnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CThoadonnhap  $cThoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $db = CThoadonnhap::findOrFail($id);
        $db->id_bill_nhap = $request->id_bill_nhap;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->don_vi = $request->don_vi;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CThoadonnhap  $cThoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CThoadonnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}
