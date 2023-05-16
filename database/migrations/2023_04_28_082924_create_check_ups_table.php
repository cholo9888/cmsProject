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
        Schema::create('check_ups', function (Blueprint $table) {
            $table->id();
            $table->string('r1');
            $table->string('r2');
            $table->string('r3');
            $table->string('r4');
            $table->string('r5');
            $table->string('r6');
            $table->string('r7');
            $table->string('r8');
            $table->string('r9');
            $table->string('r10');
            $table->string('r11');
            $table->string('r13');
            $table->string('r14');
            $table->string('r15');
            $table->string('r16');
            $table->string('r17');
            $table->string('r18');
            $table->string('r19');
            $table->string('r20');
            $table->string('r21');
            $table->string('r22');
            $table->string('r23');
            $table->string('r24');
            $table->string('r25');
            $table->bigInteger('machine_id')->unsigned();
            $table->timestamps();
            $table->foreign('machine_id')->references('id')->on('machines')->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_ups');
    }
};
