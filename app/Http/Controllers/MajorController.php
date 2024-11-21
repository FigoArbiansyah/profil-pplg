<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\School;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        $majors = Major::all();
        return view("admin.pages.data-jurusan.index", compact("schools", "majors"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => ['required'],
            "email" => ['required'],
            "telp" => ['required'],
            "instagram" => ['required'],
            "twitter" => ['required'],
            "facebook" => ['required'],
            "link_youtube" => ['required'],
        ]);

        $major = new Major;
        $major->name = $request->name;
        $major->email = $request->email;
        $major->telp = $request->telp;
        $major->instagram = $request->instagram;
        $major->twitter = $request->twitter;
        $major->facebook = $request->facebook;
        $major->link_youtube = $request->link_youtube;
        $major->school_id = $request->school_id;
        $major->save();
        return redirect('/admin-pplg/data-jurusan');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => ['required'],
            "email" => ['required'],
            "telp" => ['required'],
            "instagram" => ['required'],
            "twitter" => ['required'],
            "facebook" => ['required'],
            "images" => ['image'],
            "link_youtube" => ['required'],
        ]);
        
        $major = Major::find($id);

        $major->name = $request->name;
        $major->email = $request->email;
        $major->telp = $request->telp;
        $major->instagram = $request->instagram;
        $major->twitter = $request->twitter;
        $major->facebook = $request->facebook;
        $major->link_youtube = $request->link_youtube;
        $major->school_id = $request->school_id;
        $major->save();
        return redirect('/admin-pplg/data-jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Major::find($id)->delete();
        return redirect('/admin-pplg/data-jurusan');
    }
}
