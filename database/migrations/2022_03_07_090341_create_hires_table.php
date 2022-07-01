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
        Schema::create('hires', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->enum('status', ['approved', 'reject', 'cancel', 'pending'])->default('pending');
            $table->foreignId('profile_id')->constrained();
            $table->string('name');
            $table->string('address');
            $table->string('mobile_no');
            $table->date('date');
            $table->foreignId('user_id');
            $table->text('description')->nullable();
            $table->string('image');


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
        Schema::dropIfExists('hires');
    }
};