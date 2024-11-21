<!-- 
Route::get("/admin-pplg/data-sekolah", [SchoolController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/data-sekolah", [SchoolController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/data-sekolah/{id}", [SchoolController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/data-sekolah/{id}", [SchoolController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/data-jurusan", [MajorController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/data-jurusan", [MajorController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/data-jurusan/{id}", [MajorController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/data-jurusan/{id}", [MajorController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/jumbotron", [JumbotronController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/jumbotron", [JumbotronController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/jumbotron/{id}", [JumbotronController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/jumbotron/{id}", [JumbotronController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/about", [AboutController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/about", [AboutController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/about/{id}", [AboutController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/about/{id}", [AboutController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/keahlian", [SkillController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/keahlian", [SkillController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/keahlian/{id}", [SkillController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/keahlian/{id}", [SkillController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/data-alumni", [AlumniController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/data-alumni", [AlumniController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/data-alumni/{id}", [AlumniController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/data-alumni/{id}", [AlumniController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/category", [CategoryController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/category", [CategoryController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/category/{id}", [CategoryController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/category/{id}", [CategoryController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/article", [ArticleController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/article", [ArticleController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/article/{id}", [ArticleController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/article/{id}", [ArticleController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/teacher", [TeacherController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/teacher", [TeacherController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/teacher/{id}", [TeacherController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/teacher/{id}", [TeacherController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/mapel", [MapelController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/mapel", [MapelController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/mapel/{id}", [MapelController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/mapel/{id}", [MapelController::class, "destroy"])->middleware("isLogin");

Route::get("/admin-pplg/software", [SoftwareController::class, "index"])->middleware("isLogin");
Route::post("/admin-pplg/software", [SoftwareController::class, "store"])->middleware("isLogin");
Route::put("/admin-pplg/software/{id}", [SoftwareController::class, "update"])->middleware("isLogin");
Route::delete("/admin-pplg/software/{id}", [SoftwareController::class, "destroy"])->middleware("isLogin");
 -->