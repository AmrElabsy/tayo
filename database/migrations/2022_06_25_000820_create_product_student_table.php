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
        Schema::create('product_student', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger("student_id");
			$table->unsignedBigInteger("product_id");
			$table->integer("amount");
			$table->string("status");
            $table->timestamps();

			$table->foreign("student_id")->references("id")->on("students")->onUpdate("CASCADE")->onDelete("CASCADE");
			$table->foreign("product_id")->references("id")->on("products")->onUpdate("CASCADE")->onDelete("CASCADE");


		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_student');
    }
};
