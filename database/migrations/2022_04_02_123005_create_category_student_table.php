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
        Schema::create('category_student', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger("category_id");
			$table->unsignedBigInteger("student_id");
			$table->timestamps();

			$table->foreign("category_id")->references("id")->on("categories")->onUpdate("CASCADE")->onDelete("CASCADE");
			$table->foreign("student_id")->references("id")->on("students")->onUpdate("CASCADE")->onDelete("CASCADE");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_student');
    }
};
