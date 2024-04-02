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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('range_id')->default(0);
            $table->foreign('range_id')->references('id')->on('ranges');

            $table->unsignedBigInteger('rol_id')->default(0);
            $table->foreign('rol_id')->references('id')->on('rols');

            $table->unsignedBigInteger('army_id')->default(0);
            $table->foreign('army_id')->references('id')->on('armies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
