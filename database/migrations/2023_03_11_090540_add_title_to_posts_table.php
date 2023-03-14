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
            $table->string('anime')->after('id');
            $table->string('title')->after('title');
            $table->string('body')->after('id')
            $table->string('title')->after('id')
            $table->string('title')->after('id')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            
            $table->dropColumn('title');
        });
    }
};
