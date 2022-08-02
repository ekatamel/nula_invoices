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
        Schema::create('customers', function (Blueprint $table) {
          $table->id();
          $table->integer("ico");
          $table->string("name")->nullable();
          $table->string("country")->nullable();
          $table->string("municipality_name")->nullable();
          $table->string("municipality_part_name")->nullable();
          $table->string("city_part_name")->nullable();
          $table->string("street")->nullable();
          $table->integer("zip_code")->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
