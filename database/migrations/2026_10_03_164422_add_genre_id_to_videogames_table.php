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
        Schema::table('videogames', function (Blueprint $table) {
            //rimuoviamo la colonna genre dalla tabella videogames
            $table->dropColumn('genre');

            //aggiungiamo la colonnae la constraint
            $table->foreignId('genre_id')->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videogames', function (Blueprint $table) {
            //ricreiamo la colonna genre
            $table->string('genre');

            //rimuoviamo la constraint
            $table->dropForeign('videogames_genre_id_foreign');

            //rimuoviamo la colonna
            $table->dropColumn(('genre_id'));
        });
    }
};
