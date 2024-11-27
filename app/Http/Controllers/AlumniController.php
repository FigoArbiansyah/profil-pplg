<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Major;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnis = Alumni::all();
        $majors = Major::all();

        return view("admin.pages.data-alumni.index", compact("majors", "alumnis"));
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
            "images" => ['image', 'mimes:jpg,png,jpeg'],
            "name" => ['required'],
            "profesi" => ['required'],
            "words" => ['required'],
            "major_id" => ['required'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = time() . '.' . $request->images->extension();
        $request->images->storeAs(env('APP_STORAGE_PATH'), $images);

        $data = new Alumni;
        $data->images = $images;
        $data->name = $request->name;
        $data->profesi = $request->profesi;
        $data->words = $request->words;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/data-alumni");
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
            "images" => ['image', 'mimes:jpg,png,jpeg'],
            "name" => ['required'],
            "profesi" => ['required'],
            "words" => ['required'],
            "major_id" => ['required'],
        ]);

        $data = Alumni::find($id);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = null;

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs(env('APP_STORAGE_PATH'), $images);
        } else {
            $images = $data->images;
        }

        $data->images = $images;
        $data->name = $request->name;
        $data->profesi = $request->profesi;
        $data->words = $request->words;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/data-alumni");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumni::find($id)->delete();
        return redirect("/admin-pplg/data-alumni");
    }
}
