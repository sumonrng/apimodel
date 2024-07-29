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
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name',40)->nullable();
            $table->decimal('min_limit',28,8)->default(0.00000000)->nullable();
            $table->decimal('max_limit',28,8)->default(0.00000000);
            $table->decimal('fixed_charge',28,8)->default(0.00000000)->nullable();
            $table->decimal('rate',28,8)->default(0.00000000)->nullable();
            $table->decimal('percent_charge',5,2)->default(0.00000000)->nullable();
            $table->string('currency',40)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_methods');
    }
};
