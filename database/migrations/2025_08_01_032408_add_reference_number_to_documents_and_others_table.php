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
        Schema::table('documents', function (Blueprint $table) {
            $table->string('reference_number')->nullable()->after('title');
        });

        Schema::table('incoming_mails', function (Blueprint $table) {
            $table->string('reference_number')->nullable()->after('title');
        });

        Schema::table('outgoing_mails', function (Blueprint $table) {
            $table->string('reference_number')->nullable()->after('title');
        });

        Schema::table('other_mails', function (Blueprint $table) {
            $table->string('reference_number')->nullable()->after('title');
        });

        Schema::table('loan_documents', function (Blueprint $table) {
            $table->string('reference_number')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('reference_number');
        });

        Schema::table('incoming_mails', function (Blueprint $table) {
            $table->dropColumn('reference_number');
        });

        Schema::table('outgoing_mails', function (Blueprint $table) {
            $table->dropColumn('reference_number');
        });

        Schema::table('other_mails', function (Blueprint $table) {
            $table->dropColumn('reference_number');
        });

        Schema::table('loan_documents', function (Blueprint $table) {
            $table->dropColumn('reference_number');
        });
    }
};
