<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->integer('helping_people')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn('helping_people');
        });
    }
};
