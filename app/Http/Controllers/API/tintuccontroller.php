<?php

namespace App\Http\Controllers\API;
use App\Models\tintuc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
class tintuccontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tintuc::all();
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
        $db=new tintuc();
        $db->title=$request->tieude;
        $db->content=$request->nd;
        $db->image=$request->anh;
        $db->created_at=new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return tintuc::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function edit(tintuc $tt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $db=tintuc::find($id);
        $db->title=$request->tieude;
        $db->content=$request->nd;
        $db->image=$request->anh;
        $db->created_at=new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return tintuc::find($id)->delete();
    }
}
