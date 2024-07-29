<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0)->nullable();
            $table->unsignedInteger('plan_id')->default(0)->nullable();
            $table->decimal('amount',28,8)->default(0.00000000);
            $table->decimal('interest',28,8)->default(0.00000000);
            $table->decimal('should_pay',28,8)->default(0.00000000);
            $table->decimal('paid',28,8)->default(0.00000000);
            $table->integer('period')->default(0)->nullable();
            $table->string('hours',40);
            $table->string('time_name',40);
            $table->integer('return_rec_time')->default(0);
            $table->timestamp('next_time');
            $table->timestamp('last_time')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('capital_status')->default(0)->comment('1 = YES & 0 = NO');
            $table->string('trx',40)->nullable();
            $table->string('wallet_type',40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invests');
    }
};
