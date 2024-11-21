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
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("telp");
            $table->string("twitter");
            $table->string("instagram");
            $table->string("facebook");
            $table->unsignedBigInteger("school_id");
            $table->timestamps();

            $table->foreign("school_id")->references("id")->on("schools")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('majors');
    }
};
