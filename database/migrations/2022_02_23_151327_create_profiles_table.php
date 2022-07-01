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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->string('gender')->default('female');
            $table->string('image');
            $table->string('salary');
            $table->string('qualification');
            $table->enum('status', ['pending', 'approved', 'rejected', 'cancel'])->default('pending');
            $table->foreignId('user_id');
            $table->foreignId('category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};