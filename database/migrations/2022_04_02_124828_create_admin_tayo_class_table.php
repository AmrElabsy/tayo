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
        Schema::create('admin_tayo_class', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger("admin_id");
			$table->unsignedBigInteger("tayo_class_id");
            $table->timestamps();
			$table->foreign("admin_id")->references("id")->on("admins")->onUpdate("CASCADE")->onDelete("CASCADE");
			$table->foreign("tayo_class_id")->references("id")->on("tayo_classes")->onUpdate("CASCADE")->onDelete("CASCADE");

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_tayo_class');
    }
};
