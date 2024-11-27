<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menggunakan Query Builder dengan pagination dan order by
        $articles = DB::table('articles')
                    ->join('categories', 'articles.category_id', '=', 'categories.id')
                    ->select('articles.*', 'categories.name as category_name')
                    ->orderBy('articles.created_at', 'desc') // Mengurutkan berdasarkan ID terbaru
                    ->paginate(10); // Menambahkan pagination dengan 10 item per halaman

        $majors = Major::all();
        $categories = Category::all();

        return view("admin.pages.article.index", compact("articles", "majors", "categories"));
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
            "author" => ['required'],
            "date" => ['required'],
            "title" => ['required'],
            "description" => ['required'],
            "images" => ['image', 'mimes:png,jpg,jpeg'],
            "major_id" => ['required'],
            "category_id" => ['required'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $images = time() . '.' . $request->images->extension();
        $request->images->storeAs(env('APP_STORAGE_PATH'), $images);

        $data = new Article;
        $data->author = $request->author;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->images = $images;
        $data->major_id = $request->major_id;
        $data->category_id = $request->category_id;
        $data->save();
        return redirect("/admin-pplg/article");
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
            "author" => ['required'],
            "date" => ['required'],
            "title" => ['required'],
            "description" => ['required'],
            "images" => ['image', 'mimes:png,jpg,jpeg'],
            "major_id" => ['required'],
            "category_id" => ['required'],
            "is_selected" => ['required']
        ]);

        if (isset($request->images)) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $data = Article::find($id);

        $images = null;

        if ($images = $request->hasFile("images")) {
            $images = time() . '.' . $request->images->extension();
            $request->images->storeAs(env('APP_STORAGE_PATH'), $images);
        } else {
            $images = $data->images;
        }

        $data->author = $request->author;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->images = $images;
        $data->major_id = $request->major_id;
        $data->category_id = $request->category_id;
        $data->is_selected = $request->is_selected;
        $data->save();
        return redirect("/admin-pplg/article");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect("/admin-pplg/article");
    }
}
