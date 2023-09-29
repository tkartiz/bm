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
        Schema::create('work_specs', function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->string('format');
            $table->string('article');
            $table->string('severity')->default('normal');
            $table->string('quantity')->default('1');
            $table->string('unit')->default('枚');
            $table->boolean('outsourcing')->default('false');
            $table->bigInteger('outsourcing_id')->nullable();
            $table->integer('subttl_price_incl')->nullable();
            $table->integer('subttl_price_exc')->nullable();
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
        Schema::dropIfExists('work_specs');
    }
};
