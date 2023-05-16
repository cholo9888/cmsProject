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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('checkup_id')->unsigned();
            $table->string('operator_name');
            $table->string('machine_name');
            $table->string('capacity');
            $table->integer('fuel');
            $table->string('shift');
            $table->string('start');
            $table->string('end');
            $table->integer('b1')->nullable();
            $table->integer('b2')->nullable();
            $table->integer('b3')->nullable();
            $table->integer('b4')->nullable();
            $table->integer('b5')->nullable();
            $table->integer('b6')->nullable();
            $table->integer('red')->nullable();
            $table->integer('totalordercost')->nullable();
            $table->integer('total')->nullable();
            $table->string('limestone_toonage')->nullable();
            $table->string('redsoil_tonage')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('status')->default('non');
            $table->timestamps();
            $table->foreign('checkup_id')->references('machine_id')->on('check_ups')->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
