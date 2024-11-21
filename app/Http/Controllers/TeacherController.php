<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $majors = Major::all();

        return view('admin.pages.pengajar.index', compact('teachers', 'majors'));
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
            "email" => 'required',
            "description" => 'required',
            "major_id" => 'required',
            "images" => 'image|mimes:png,jpg,jpeg',
            "banner" => 'image',
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = "";
        $banner = "";

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/images', $images);
        }

        if ($banner = $request->hasFile("banner")) {
            $banner = time() . '123.' . $request->banner->extension();
            $request->banner->move("/home/pplgsmkn/public_html/images", $banner);
        }

        if ($images == "" || $banner == "") {
            return redirect('/admin-pplg/teacher')->withInfo("Gagal menambahkan data!");
        }

        $data = new Teacher;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->major_id = $request->major_id;
        $data->images = $images;
        $data->banner = $banner;
        $data->save();
        return redirect('/admin-pplg/teacher');
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
            "banner" => ['image'],
            "name" => ['required'],
            "email" => ['required'],
            "description" => ['required'],
            "major_id" => ['required'],
            "is_selected" => ['required'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $data = Teacher::find($id);

        $images = null;
        $banner = null;

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/images', $images);
        } else {
            $images = $data->images;
        }

        if ($banner = $request->hasFile("banner")) {
            $banner = time() . '123.' . $request->banner->extension();
            $request->banner->move("/home/pplgsmkn/public_html/images", $banner);
        } else {
            $banner = $data->banner;
        }

        $data->images = $images;
        $data->banner = $banner;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->major_id = $request->major_id;
        $data->is_selected = $request->is_selected;
        $data->save();
        return redirect("/admin-pplg/teacher");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect('/admin-pplg/teacher');
    }
}
