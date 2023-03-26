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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('nama', 100)->after('id');
            $table->string('pendidikan', 100)->after('nama');
            $table->string('asal', 100)->after('pendidikan');
            $table->string('funfact', 100)->after('asal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('pendidikan');
            $table->dropColumn('asal');
            $table->dropColumn('funfact');
        });
    }
};
