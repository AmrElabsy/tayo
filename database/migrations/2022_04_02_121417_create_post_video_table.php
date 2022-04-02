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
        Schema::create('post_video', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger("video_id");
			$table->unsignedBigInteger("post_id");
			$table->timestamps();

			$table->foreign("video_id")->references("id")->on("images")->onUpdate("CASCADE")->onDelete("CASCADE");
			$table->foreign("post_id")->references("id")->on("posts")->onUpdate("CASCADE")->onDelete("CASCADE");

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_video');
    }
};
