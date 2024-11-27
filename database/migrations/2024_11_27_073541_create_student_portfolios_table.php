<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('student_name');
            $table->unsignedBigInteger('school_id');
            $table->boolean('is_intern_project')->nullable();
            $table->string('company_name')->nullable();
            $table->string('thumbnail');
            $table->string('yt_embed_url');
            $table->string('student_instagram_url')->nullable();
            $table->string('student_linkedin_url')->nullable();
            $table->string('student_github_url')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_portfolios');
    }
};
