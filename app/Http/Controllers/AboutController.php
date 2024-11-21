<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Major;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        $majors = Major::all();
        return view("admin.pages.about.index", compact("about", "majors"));
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
        $validate = $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "images" => "image|mimes:jpg,png,jpeg",
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = time() . '.' . $request->images->extension();
        $request->images->storeAs('public/images', $images);

        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->images = $images;
        $about->major_id = $request->major_id;
        $about->save();
        return redirect("/admin-pplg/about");
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
        $validate = $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "images" => "image|mimes:jpg,png,jpeg",
        ]);

        $about = About::find($id);

        $images = null;

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/images', $images);
        } else {
            $images = $about->images;
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->images = $images;
        $about->major_id = $request->major_id;
        $about->save();
        return redirect("/admin-pplg/about");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::findOrFail($id)->delete();
        return redirect("/admin-pplg/about");
    }
}
