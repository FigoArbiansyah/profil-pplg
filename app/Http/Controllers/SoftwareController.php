<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::all();
        $softwares = Software::all();

        return view('admin.pages.software.index', compact('majors', 'softwares'));
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
            "images" => 'image|mimes:jpg,png,jpeg',
            "alt" => 'required',
            "major_id" => 'required'
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = time() . '.' . $request->images->extension();
        $request->images->storeAs(env('APP_STORAGE_PATH'), $images);

        $data = new Software;
        $data->images = $images;
        $data->alt = $request->alt;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/software");
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
            "images" => 'image|mimes:jpg,png,jpeg',
            "alt" => 'required',
            "major_id" => 'required'
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $data = Software::find($id);

        $images = null;

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs(env('APP_STORAGE_PATH'), $images);
        } else {
            $images = $data->images;
        }

        $data->images = $images;
        $data->alt = $request->alt;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/software");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Software::find($id)->delete();
        return redirect("/admin-pplg/software");
    }
}
