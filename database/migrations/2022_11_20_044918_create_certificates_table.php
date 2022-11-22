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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('directorName');
            $table->text('position');
            $table->text('constancy');
            $table->text('constancyM');
            $table->text('constancyF');
            $table->text('varRut');
            $table->text('participation');
            $table->text('organization');
            $table->text('varDuration');
            $table->text('varContent');
            $table->text('end');
            $table->text('endM');
            $table->text('endF');
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
        Schema::dropIfExists('certificates');
    }
};
