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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->decimal('minimum',28,8)->default(0.00000000);
            $table->decimal('maximum',28,8)->default(0.00000000);
            $table->decimal('fixed_amount',28,8)->default(0.00000000);
            $table->decimal('interest',28,8)->default(0.00000000);
            $table->tinyInteger('interest_type')->nullable()->default(0)->comment("1 = '%' / 0 ='currency'");
            $table->string('time',40);
            $table->string('time_name',40)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('capital_back')->default(0)->nullable();
            $table->tinyInteger('lifetime')->default(0)->nullable();
            $table->string('repeat_time',40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
