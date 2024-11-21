<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapels = Mapel::all();
        $majors = Major::all();

        return view("admin.pages.mapel.index", compact("majors", "mapels"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "major_id" => 'required',
        ]);

        $data = new Mapel;
        $data->name = $request->name;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/mapel");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $this->validate($request, [
            "name" => 'required',
            "major_id" => 'required',
        ]);

        $data = Mapel::find($id);

        $data->name = $request->name;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/mapel");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapel::find($id)->delete();
        return redirect("/admin-pplg/mapel");
    }
}
