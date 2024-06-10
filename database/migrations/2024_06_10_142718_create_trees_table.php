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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->string('Familia', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Nombre_Cientifico', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Nombre_Comun', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Nombre_PY', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Nombre_BR', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Nombre_ARG', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Descripcion', 400)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Principales_Usos', 500)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('Porte', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('Altura');
            $table->boolean('Extinto');
            $table->boolean('ENE_Floracion');
            $table->boolean('FEB_Floracion');
            $table->boolean('MAR_Floracion');
            $table->boolean('ABR_Floracion');
            $table->boolean('MAY_Floracion');
            $table->boolean('JUN_Floracion');
            $table->boolean('JUL_Floracion');
            $table->boolean('AGO_Floracion');
            $table->boolean('SEP_Floracion');
            $table->boolean('OCT_Floracion');
            $table->boolean('NOV_Floracion');
            $table->boolean('DIC_Floracion');
            $table->boolean('ENE_Frutacion');
            $table->boolean('FEB_Frutacion');
            $table->boolean('MAR_Frutacion');
            $table->boolean('ABR_Frutacion');
            $table->boolean('MAY_Frutacion');
            $table->boolean('JUN_Frutacion');
            $table->boolean('JUL_Frutacion');
            $table->boolean('AGO_Frutacion');
            $table->boolean('SEP_Frutacion');
            $table->boolean('OCT_Frutacion');
            $table->boolean('NOV_Frutacion');
            $table->boolean('DIC_Frutacion');
            $table->boolean('CA');
            $table->boolean('TY');
            $table->boolean('PIK');
            $table->boolean('ITA');
            $table->boolean('YR');
            $table->boolean('LIM');
            $table->boolean('POZ');
            $table->boolean('CAR');
            $table->boolean('MBA');
            $table->boolean('Alto_Paraguay');
            $table->boolean('Alto_Parana');
            $table->boolean('Amambay');
            $table->boolean('Boqueron');
            $table->boolean('Caaguazu');
            $table->boolean('Caazapa');
            $table->boolean('Canindeyu');
            $table->boolean('Central');
            $table->boolean('Concepcion');
            $table->boolean('Cordillera');
            $table->boolean('Guaira');
            $table->boolean('Itapua');
            $table->boolean('Misiones');
            $table->boolean('Neembucu');
            $table->boolean('Paraguari');
            $table->boolean('Presidente_Hayes');
            $table->boolean('San_Pedro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trees');
    }
};
