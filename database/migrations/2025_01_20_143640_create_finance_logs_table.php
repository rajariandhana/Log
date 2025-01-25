<?php

use App\Models\FinanceCategory;
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
        Schema::create('finance_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('amount_dolar');
            $table->unsignedInteger('amount_cent')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->foreignIdFor(FinanceCategory::class);
            $table->date('date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_logs');
    }
};
