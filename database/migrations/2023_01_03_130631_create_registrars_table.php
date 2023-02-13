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
        Schema::create('registrars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim');
            $table->string('force');
            $table->string('class');
            $table->string('email');
            $table->string('domicile');
            $table->string('address');
            $table->string('whatsapp');
            $table->string('line');
            $table->string('division1');
            $table->string('division2');
            $table->text('main_reason');
            $table->text('division1_reason');
            $table->text('division2_reason');
            $table->string('twibbon');
            $table->string('kpm')->nullable();
            $table->enum('isPass', [0, 1, 2])->default(0);
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
        Schema::dropIfExists('registrars');
    }
};
