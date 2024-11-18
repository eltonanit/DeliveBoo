<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('slug')->unique();
            $table->string('address', 120);
            $table->string('phone', 120);
            $table->string('image')->nullable(); // Aggiunto il campo image
            $table->unsignedBigInteger('user_id'); // Solo una volta!
            $table->timestamps();

            // Aggiungi la foreign key
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};