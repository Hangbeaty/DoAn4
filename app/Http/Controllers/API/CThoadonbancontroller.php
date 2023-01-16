<?php

namespace App\Http\Controllers\API;
use App\Models\CThoadonban;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
class CThoadonbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CThoadonban::all();
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
        $db=new CThoadonban();
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CThoadonban  $cThoadonban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CThoadonban::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CThoadonban  $cThoadonban
     * @return \Illuminate\Http\Response
     */
    public function edit(CThoadonban $cThoadonban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CThoadonban  $cThoadonban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $db = CThoadonban::findOrFail($id);
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CThoadonban  $cThoadonban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CThoadonban::findOrFail($id)->delete();
        return "Deleted";

    }
}
