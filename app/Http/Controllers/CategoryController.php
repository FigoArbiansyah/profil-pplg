<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $majors = Major::all();

        return view("admin.pages.category.index", compact("categories", "majors"));
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
            "name" => ['required'],
            "major_id" => ['required'],
        ]);

        $data = new Category;
        $data->name = $request->name;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/category");
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
            "name" => ['required'],
            "major_id" => ['required'],
        ]);

        $data = Category::find($id);

        $data->name = $request->name;
        $data->major_id = $request->major_id;
        $data->save();
        return redirect("/admin-pplg/category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect("/admin-pplg/category");
    }
}
