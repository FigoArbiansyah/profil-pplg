<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\School;
use App\Models\Major;
use App\Models\Jumbotron;
use App\Models\About;
use App\Models\Skill;
use App\Models\Software;
use App\Models\Mapel;
use App\Models\Article;
use App\Models\Teacher;
use App\Models\Alumni;

class FrontController extends Controller
{
    public function index() {
        $school = School::latest()->first() ?? null;
        $major = Major::latest()->first() ?? null;
        $jumbotrons = Jumbotron::limit(3)->get();
        $about = About::latest()->first() ?? null;
        $skills = Skill::all();
        $softwares = Software::all();
        $mapels = Mapel::all();
        $articlesQuery = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->select('articles.*', 'categories.name as category_name')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        $big_article = $articlesQuery->first();
        $articles = $articlesQuery->slice(1, 3);
        $teachers = Teacher::get();
        $alumnis = Alumni::get();

        return view("index", compact("school", "major", "jumbotrons", "about", "skills", "softwares", "mapels", "big_article", "articles", "teachers", "alumnis"));
    }

    public function article() {
        $articles = DB::table('articles')
                    ->join('categories', 'articles.category_id', '=', 'categories.id')
                    ->select('articles.*', 'categories.name as category_name')
                    ->orderBy('id', 'desc')
                    ->get();

        return view("article", compact("articles"));
    }

    public function detail_article($id) {
        $article = DB::table('articles')
                    ->join('categories', 'articles.category_id', '=', 'categories.id')
                    ->select('articles.*', 'categories.name as category_name')
                    ->where("articles.id", $id)
                    ->orderBy('id', 'desc')
                    ->first();

        $articles = DB::table('articles')
                    ->join('categories', 'articles.category_id', '=', 'categories.id')
                    ->select('articles.*', 'categories.name as category_name')
                    ->orderBy('id', 'desc')
                    ->limit(6)
                    ->get();

        return view("detail-article", compact("articles", "article"));
    }
}
