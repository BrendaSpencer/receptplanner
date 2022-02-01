<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientLijstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_lijsts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recept_id')->constrained('recepts');
            $table->foreignId('ingredient_id')->constrained('ingredients');
            $table->decimal('aantal');
            $table->string('eenheid');
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
        Schema::dropIfExists('ingredient_lijsts');
    }
}
