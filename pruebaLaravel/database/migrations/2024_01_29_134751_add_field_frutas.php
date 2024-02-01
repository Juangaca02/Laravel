<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('frutas', function (Blueprint $table) {
            $table->string('pais')->after('temporada');
            $table->renameColumn('nombre', 'nombreFruta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('frutas', function (Blueprint $table) {
            //
        });
    }
};
