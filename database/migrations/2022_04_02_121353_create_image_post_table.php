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
        Schema::create('image_post', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger("image_id");
			$table->unsignedBigInteger("post_id");
			$table->timestamps();

			$table->foreign("image_id")->references("id")->on("images")->onUpdate("CASCADE")->onDelete("CASCADE");
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
        Schema::dropIfExists('image_post');
    }
};
