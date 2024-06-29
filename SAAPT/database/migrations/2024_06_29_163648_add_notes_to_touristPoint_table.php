<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('touristPoint', function (Blueprint $table) {
            $table->double('generalNotes')->nullable();
            $table->double('visualNote')->nullable();
            $table->double('auditoryNote')->nullable();
            $table->double('mobilityNote')->nullable();
            $table->double('physicalNotes')->nullable();
        });
    }


    public function down(): void
    {
        Schema::table('touristPoint', function (Blueprint $table) {
            $table->dropColumn('generalNotes')->nullable();
            $table->dropColumn('visualNote')->nullable();
            $table->dropColumn('auditoryNote')->nullable();
            $table->dropColumn('mobilityNote')->nullable();
            $table->dropColumn('physicalNotes')->nullable();
        });
    }
};
