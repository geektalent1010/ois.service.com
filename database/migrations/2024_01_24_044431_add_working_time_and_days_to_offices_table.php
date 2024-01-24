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
        Schema::table('offices', function (Blueprint $table) {
            $table->string('key')->nullable()->after('city');
            $table->string('flag')->nullable()->after('key');
            $table->string('working_time')->nullable()->after('providedby');
            $table->string('working_days')->nullable()->after('working_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offices', function (Blueprint $table) {
            $table->dropColumn('key');
            $table->dropColumn('flag');
            $table->dropColumn('working_time');
            $table->dropColumn('working_days');
        });
    }
};
