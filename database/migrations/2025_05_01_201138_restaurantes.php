<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mongodb')->create('restaurantes', function ($collection) {
            $collection->index('nombre');
            $collection->index('rating');
            $collection->index('precio');
            $collection->index('tipo_comida');
            $collection->index('direccion');
            $collection->index('estado_apertura');
            $collection->index('horarios');
            $collection->index('telefono');
            $collection->index('sitio_web');
            $collection->index('accesibilidad');
            $collection->index('que_ofrecen');
            $collection->index('popular_por');
            $collection->index('parking');
            $collection->index('amenidades');
            $collection->index('clicks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mongodb')->drop('restaurantes');
    }
};
