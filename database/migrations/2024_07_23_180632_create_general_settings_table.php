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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name',40)->nullable();
            $table->string('cur_text',40)->nullable()->comment('currency text');
            $table->string('cur_sym',40)->nullable()->comment('currency symbol');
            $table->string('email_from',40)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_body')->nullable();
            $table->string('sms_from')->nullable();
            $table->string('base_color',40)->nullable();
            $table->string('secondary_color',40)->nullable();
            $table->text('mail_config')->nullable()->comment('email configuration');
            $table->text('sms_config')->nullable();
            $table->text('global_shortcodes')->nullable();
            $table->tinyInteger('kv')->nullable()->default(0);
            $table->tinyInteger('ev')->nullable()->default(0)->comment('email verification, 0 - dont check, 1 - check');
            $table->tinyInteger('en')->nullable()->default(0)->comment('email notification, 0 - dont send, 1 - send');
            $table->tinyInteger('sv')->nullable()->default(0)->comment('mobile verication, 0 - dont check, 1 - check');
            $table->tinyInteger('sn')->nullable()->default(0)->comment('sms notification, 0 - dont send, 1 - send');
            $table->tinyInteger('force_ssl')->nullable()->default(0);
            $table->tinyInteger('maintenance_mode')->nullable()->default(0);
            $table->tinyInteger('secure_password')->nullable()->default(0);
            $table->tinyInteger('agree')->nullable()->default(0);
            $table->tinyInteger('registration')->nullable()->default(0);
            $table->string('active_template',40);
            $table->text('system_info');
            $table->tinyInteger('deposit_commission')->default(1);
            $table->tinyInteger('invest_commission')->default(1);
            $table->tinyInteger('invest_return_commission')->default(1);
            $table->decimal('signup_bonus_amount',11,2)->nullable()->default(0.00);
            $table->tinyInteger('signup_bonus_control')->default(0);
            $table->tinyInteger('promotional_tool')->default(0);
            $table->text('firebase_config')->nullable();
            $table->text('firebase_template')->nullable();
            $table->tinyInteger('push_notify')->default(0);
            $table->text('off_day')->nullable();
            $table->dateTime('last_cron')->nullable();
            $table->tinyInteger('b_transfer')->default(0)->comment('Balance Transfer Status');
            $table->decimal('f_charge',28,8)->default(0.00000000)->comment('Fixed Charge');
            $table->decimal('p_charge',5,2)->default(0.00000000)->comment('Percent Charge');
            $table->tinyInteger('holiday_withdraw')->default(0);
            $table->tinyInteger('language_switch')->default(1)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
