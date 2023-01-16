<?php

namespace App\Http\Controllers\API;
use App\Models\hoadonnhap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
class hoadonnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return hoadonnhap::all();
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
        $db=new hoadonnhap();
        $db->id_ncc = $request->id_ncc;
        $db->id_nhanvien = $request->id_nhanvien;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->thanh_toan = $request->thanh_toan;
        $db->note = $request->note;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hoadonnhap  $hoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return hoadonnhap::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hoadonnhap  $hoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(hoadonnhap $hoadonnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hoadonnhap  $hoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $db = hoadonnhap::findOrFail($id);
        $db->id_ncc = $request->id_ncc;
        $db->id_nhanvien = $request->id_nhanvien;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->thanh_toan = $request->thanh_toan;
        $db->note = $request->note;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hoadonnhap  $hoadonnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        hoadonnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}
