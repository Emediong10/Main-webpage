<?php

use App\Models\PaymentType;
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
        Schema::table('payments', function (Blueprint $table) {
            $table->foreignIdFor(PaymentType::class)->after('id')->nullable();
            $table->string('payable_type')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('payable_type');
            $table->dropConstrainedForeignIdFor(PaymentType::class);
        });
    }
};
