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
        Schema::create('insurance_clause_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('header');
            $table->string('option', 200);
 
            $table->foreign('header')->references('id')->on('insurance_cover_clauses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_clause_references');
    }
};
