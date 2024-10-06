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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname', length: 100);
            $table->date('birthdate');
            $table->string('antiquity', length: 10);
            $table->enum('active_payments', ['1', '0']);
            $table->string('specialization', length: 50);
            $table->string('phone', length: 50);
            $table->enum('status_user', ['1', '0']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['lastname', 'birthdate', 'antiquity', 'active_payments', 'specialization', 'phone', 'status_user']);
        });
    }
};
