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
        Schema::create('contenus', function (Blueprint $table) {
            $table->biginteger("Num_contenu");
            $table->foreignId("Num_s");
            $table->foreign("Num_s")->references("Num_S")->on("sites");
            $table->primary(["Num_contenu" ,"Num_s"]) ;
            $table->string("Landing_page")->nullable() ;
            $table->string("Galerie")->nullable();
            $table->string("formulaire_de_devis")->nullable() ;
            $table->string("formulaire_de_contact")->nullable() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comtenus');
    }
};
