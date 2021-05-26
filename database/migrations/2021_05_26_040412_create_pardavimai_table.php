<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePardavimaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pardavimai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('darbuotojai_id')->constrained()->references('id')->on('darbuotojai');
            $table->integer('greitis');
            $table->integer('aptarnavimas');
            $table->integer('rekomendacija');
            $table->text('pastabos');
            $table->integer('sutikimas');
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
        Schema::dropIfExists('pardavimai');
    }
}
