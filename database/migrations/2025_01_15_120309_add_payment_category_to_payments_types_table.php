<?php

use App\Models\PaymentCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('payment_types', function (Blueprint $table) {
            $table->foreignIdFor(PaymentCategory::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_types', function (Blueprint $table) {
            $table->dropConstrainedForeignIdFor(PaymentCategory::class);
        });
    }
};
