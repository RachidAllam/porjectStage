<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->string('codeGresa')->primary();
            $table->string('nomEtab_FR');
            $table->string('nomEtab_AR');
            $table->string('cycle');
            $table->unsignedBigInteger('codeCommune');
            $table->foreign('codeCommune')->references('codeCommune')->on('communes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};
