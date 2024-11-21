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
        Schema::create('jumbotrons', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("paragraph");
            $table->string("images");
            $table->unsignedBigInteger("major_id");
            $table->boolean("is_selected");
            $table->timestamps();

            $table->foreign("major_id")->references("id")->on("majors")
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
        Schema::dropIfExists('jumbotrons');
    }
};
