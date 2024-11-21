<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use App\Models\Major;
use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumbotron = Jumbotron::all();
        $majors = Major::all();
        return view("admin.pages.jumbotron.index", compact("jumbotron", "majors"));
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
            "title" => ['required'],
            "paragraph" => ['required'],
            "images" => ['image', 'mimes:jpg,png,jpeg'],
            "major_id" => ['required']
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = time() . '.' . $request->images->extension();
        $request->images->storeAs('public/images', $images);

        $data = new Jumbotron;
        $data->paragraph = $request->paragraph;
        $data->title = $request->title;
        $data->images = $images;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/jumbotron");
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
            "paragraph" => ['required'],
            "title" => ['required'],
            "images" => ['image', 'mimes:jpg,png,jpeg'],
            "major_id" => ['required'],
            "is_selected" => ['required'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $data = Jumbotron::find($id);

        $images = null;

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/images', $images);
        } else {
            $images = $data->images;
        }

        $data->paragraph = $request->paragraph;
        $data->title = $request->title;
        $data->images = $images;
        $data->major_id = $request->major_id;
        $data->is_selected = $request->is_selected;
        $data->save();
        return redirect("/admin-pplg/jumbotron");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jumbotron::find($id)->delete();
        return redirect("/admin-pplg/jumbotron");
    }
}
