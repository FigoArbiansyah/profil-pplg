<?php

namespace App\Http\Controllers;

use App\Models\StudentPortfolio; // Mengganti Article dengan StudentPortfolio
use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menggunakan Query Builder dengan pagination dan order by
        $studentPortfolios = DB::table('student_portfolios')
                    ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan waktu terbaru
                    ->whereNull('deleted_at')
                    ->paginate(10); // Menambahkan pagination dengan 10 item per halaman

        $majors = Major::all();

        return view("admin.pages.karya-siswa.index", compact("studentPortfolios", "majors"));
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
            "student_name" => ['required'],
            "title" => ['required'],
            "description" => ['required'],
            "student_image" => ['required', 'image', 'mimes:png,jpg,jpeg'],
            "thumbnail" => ['required', 'image', 'mimes:png,jpg,jpeg'],
            "is_intern_project" => ['nullable', 'boolean'],
            "company_name" => ['required_if:is_intern_project,true', 'nullable'],
            "yt_embed_url" => ['required', 'url'],
            "student_instagram_url" => ['nullable', 'url'],
            "student_linkedin_url" => ['nullable', 'url'],
            "student_github_url" => ['nullable', 'url'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $thumbnail = null;
        $student_image = null;
        if ($request->hasFile("thumbnail")) {
            $thumbnail = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->storeAs(env('APP_STORAGE_PATH'), $thumbnail);
        }
        if ($request->hasFile("student_image")) {
            $student_image = time() . '.' . $request->student_image->extension();
            $request->student_image->storeAs(env('APP_STORAGE_PATH'), $student_image);
        }

        $data = new StudentPortfolio;
        $data->school_id = 1;
        $data->student_name = $request->student_name;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->thumbnail = $thumbnail;
        $data->student_image = $student_image;
        $data->is_intern_project = isset($request->company_name) ? 1 : 0;;
        $data->company_name = $request->company_name;
        $data->yt_embed_url = $request->yt_embed_url;
        $data->student_instagram_url = $request->student_instagram_url;
        $data->student_linkedin_url = $request->student_linkedin_url;
        $data->student_github_url = $request->student_github_url;
        $data->save();
        return redirect("/admin-pplg/karya-siswa");
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "student_name" => ['required'],
            "title" => ['required'],
            "description" => ['required'],
            "student_image" => ['image', 'mimes:png,jpg,jpeg'],
            "thumbnail" => ['image', 'mimes:png,jpg,jpeg'],
            "is_intern_project" => ['nullable', 'boolean'],
            "company_name" => ['required_if:is_intern_project,true', 'nullable'],
            "yt_embed_url" => ['required', 'url'],
            "student_instagram_url" => ['nullable', 'url'],
            "student_linkedin_url" => ['nullable', 'url'],
            "student_github_url" => ['nullable', 'url'],
        ]);

        if ($request->images) {
            if (!in_array($request->images->extension(), ['png', 'jpg', 'jpeg'])) {
                return back();
            }
        }

        $data = StudentPortfolio::find($id);

        $thumbnail = $data->thumbnail;
        $student_image = $data->student_image;
        if ($request->hasFile("thumbnail")) {
            $thumbnail = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->storeAs(env('APP_STORAGE_PATH'), $thumbnail);
        }
        if ($request->hasFile("student_image")) {
            $student_image = time() . '.' . $request->student_image->extension();
            $request->student_image->storeAs(env('APP_STORAGE_PATH'), $student_image);
        }

        $data->school_id = 1;
        $data->student_name = $request->student_name;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->thumbnail = $thumbnail;
        $data->student_image = $student_image;
        $data->is_intern_project = isset($request->company_name) ? 1 : 0;
        $data->company_name = $request->company_name;
        $data->yt_embed_url = $request->yt_embed_url;
        $data->student_instagram_url = $request->student_instagram_url;
        $data->student_linkedin_url = $request->student_linkedin_url;
        $data->student_github_url = $request->student_github_url;
        $data->save();
        return redirect("/admin-pplg/karya-siswa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentPortfolio::find($id)->delete(); // Mengganti Article dengan StudentPortfolio
        return redirect("/admin-pplg/karya-siswa"); // Mengganti redirect URL
    }
}
