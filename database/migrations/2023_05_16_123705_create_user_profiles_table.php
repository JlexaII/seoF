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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('user_id')->nullable();
            $table->string('lastname')->default('');
            $table->string('company')->default('');
            $table->string('tel')->default('');
            $table->string('website')->default('');
            $table->string('visitors')->default('');
            $table->string('cheked')->default('');
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
        Schema::dropIfExists('user_profiles');
    }
};
