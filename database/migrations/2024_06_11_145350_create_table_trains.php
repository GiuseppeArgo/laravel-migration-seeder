<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * CREATE TABLE `trains`(
     *      ‘id’ Unsigned BIGINT NOT NULL AUTO_INCREMENT
     *      `codice_treno` Unsigned BIGINT NOT NULL,
     *      `azienda` VARCHAR(255) NOT NULL,
     *      `stazione_di_partenza` VARCHAR(255) NOT NULL,
     *      `stazione_di_arrivo` VARCHAR(255) NOT NULL,
     *      `orario_di_partenza` TIME NOT NULL,
     *      `orario_di_arrivo` TIME NOT NULL,
     *      `numero_carrozze` Unsigned TINYINT(3) NOT NULL,
     *      `in_orario` TINYINT(1) DEFAULT 1,
     *      `cancellato` TINYINT(1) DEFAULT 0,
     *      ‘created_at’ TIMESTAMP NULL, 
     *      ‘updated_at’ TIMESTAMP NULL, 
     *      PRIMARY KEY(`id`)
     * );
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codice_treno');
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
