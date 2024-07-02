<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('touristPoint', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->string('name', 100)->nullable(false); //define como not null
            $table->integer('accessType')->comment('0 - public e 1 - private'); // define comentário
            $table->integer('category')->comment('0-cultural, 1-gastronomic, 2-parks, 3-beaches');
            $table->string('city', 50);
            $table->string('state', 2);
            $table->string('street', 100);
            $table->string('district', 50);
            $table->string('zipCode', 8);
            $table->text('description'); 
            $table->integer('owner')->nullable()->comment('0 - owner, 1 - otherUser');   
            $table->double('generalNotes')->nullable();
            $table->double('visualNote')->nullable();
            $table->double('auditoryNote')->nullable();
            $table->double('mobilityNote')->nullable();
            $table->double('physicalNote')->nullable();                                                             
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('touristPoint');
    }
};

