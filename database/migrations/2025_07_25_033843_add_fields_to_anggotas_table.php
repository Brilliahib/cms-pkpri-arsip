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
        Schema::table('anggotas', function (Blueprint $table) {
            $table->string('instansi')->nullable()->after('name');
            $table->text('alamat')->nullable()->after('instansi');
            $table->string('nomor_telepon')->nullable()->after('alamat');
            $table->string('nama_ketua')->nullable()->after('nomor_telepon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('anggotas', function (Blueprint $table) {
            Schema::table('anggotas', function (Blueprint $table) {
                $table->dropColumn(['instansi', 'alamat', 'nomor_telepon', 'nama_ketua']);
            });
        });
    }
};
