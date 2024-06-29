<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tourist_point', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100)->nullable(false); //define como not null
            $table->integer('touristPointType')->comment('0 - publico e 1 - privado'); // define comentário
            $table->string('city', 50);
            $table->string('state', 2);
            $table->string('street', 100);
            $table->string('district', 50);
            $table->string('zipCode', 8);
            $table->text('description');                                                                   
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tourist_point');
    }
};
