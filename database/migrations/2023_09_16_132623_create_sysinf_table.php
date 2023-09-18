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
        Schema::create('sysinf', function (Blueprint $table) {
            $table->id();
            $table->char('distcd', 100);
            $table->string('change_key_1')->nullable();
            $table->string('change_key_2')->nullable();
            $table->string('change_key_3')->nullable();
            $table->string('change_key_4')->nullable();
            $table->string('change_key_5')->nullable();
            $table->string('change_key_6')->nullable();
            $table->string('change_key_7')->nullable();
            $table->string('change_key_8')->nullable();
            $table->string('change_key_9')->nullable();
            $table->string('change_key_10')->nullable();
            $table->string('change_key_11')->nullable();
            $table->string('change_key_12')->nullable();
            $table->string('change_key_13')->nullable();
            $table->string('change_key_14')->nullable();
            $table->string('change_key_15')->nullable();
            $table->string('change_key_16')->nullable();
            $table->string('change_key_17')->nullable();
            $table->string('change_key_18')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sysinf');
    }
};
