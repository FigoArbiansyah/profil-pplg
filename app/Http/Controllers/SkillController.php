<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keahlian = Skill::all();
        $majors = Major::all();
        return view("admin.pages.keahlian.index", compact("keahlian", "majors"));
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
            "icon" => "required",
            "title" => "required",
            "description" => ["max:250", "required"],
            "major_id" => "required"
        ]);

        $skill = new Skill;
        $skill->icon = $request->icon;
        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->major_id = $request->major_id;
        $skill->save();
        return redirect("/admin-pplg/keahlian");
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
            "icon" => "required",
            "title" => "required",
            "description" => ["max:250", "required"],
            "major_id" => "required",
            "is_selected" => "required"
        ]);

        $skill = Skill::find($id);
        $skill->icon = $request->icon;
        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->major_id = $request->major_id;
        $skill->is_selected = $request->is_selected;
        $skill->save();
        return redirect("/admin-pplg/keahlian");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return redirect("/admin-pplg/keahlian");
    }
}