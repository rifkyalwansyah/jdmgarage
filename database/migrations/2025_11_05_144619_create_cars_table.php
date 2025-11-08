<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand'); // Toyota, Nissan, Honda, dll
            $table->string('model'); // Supra, GT-R, NSX, dll
            $table->string('year');
            $table->decimal('price', 12, 2);
            $table->string('color');
            $table->integer('mileage');
            $table->text('description');
            $table->string('image')->nullable();
            $table->enum('status', ['available', 'sold', 'reserved'])->default('available');
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};