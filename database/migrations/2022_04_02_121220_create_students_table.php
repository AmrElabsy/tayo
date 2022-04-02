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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
			$table->string('father_name');
			$table->string('mother_name');
			$table->string('phone')->unique();
			$table->string('address');
			$table->integer('identity');
			$table->unsignedBigInteger("tayo_class_id");
			$table->unsignedBigInteger("user_id");
			$table->timestamps();

			$table->foreign("tayo_class_id")->references("id")->on("tayo_classes")->onUpdate("CASCADE")->onDelete("CASCADE");
			$table->foreign("user_id")->references("id")->on("users")->onUpdate("CASCADE")->onDelete("CASCADE");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
