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
        Schema::create('e__commerce_models', function (Blueprint $table) {
            $table->biginteger("num_E");
            $table->foreignid("Num_s");
            $table->foreign("Num_s")->references("Num_S")->on("sites");
            $table->primary(["num_E" , "Num_s"]) ;
            $table->string("Gestion_Pr")->nullable();
            $table->string("Gestion_Prom")->nullable();
            $table->string("Gestion_Com")->nullable();
            $table->string("Gestion_Pan")->nullable();
            $table->string("Gestion_St")->nullable();
            $table->string("Moteur_Rech")->nullable();
            $table->string("Payment_L")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e__commerce_models');
    }
};
