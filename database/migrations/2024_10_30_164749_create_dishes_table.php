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
    Schema::create('dishes', function (Blueprint $table) {
    $table->id();
    $table->string('name', 120);
    $table->string('slug');
    $table->enum('course', ['Appetizer', 'First', 'Second', 'Side', 'Dessert']);
    $table->text('description')->nullable();
    $table->decimal('price', 4, 2);
    $table->boolean('vegetarian');
    $table->boolean('visible');
    $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade');
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
        Schema::dropIfExists('dishes');
    }
};
