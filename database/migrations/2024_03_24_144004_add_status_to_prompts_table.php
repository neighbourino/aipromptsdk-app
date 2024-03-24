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
        Schema::table('prompts', function (Blueprint $table) {
            $table->text('status')->nullable();
            $table->timestamp('publish_date')->nullable();
            $table->timestamp('republish_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prompts', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('publish_date');
            $table->dropColumn('republish_date');
        });
    }
};
