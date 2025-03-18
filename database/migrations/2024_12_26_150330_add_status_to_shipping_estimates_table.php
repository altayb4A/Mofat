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
        Schema::table('shipping_estimates', function (Blueprint $table) {
            $table->enum('status', ['Pending', 'Updated', 'Paid', 'Ready', 'OnWay','Delivered'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipping_estimates', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
