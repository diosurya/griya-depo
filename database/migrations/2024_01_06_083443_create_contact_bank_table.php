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
        Schema::create('contact_bank', function (Blueprint $table) {
            Schema::create('contact_bank', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('contact_id')->nullable();
                $table->string('bank_name')->nullable();
                $table->string('account_name')->nullable();
                $table->string('account_number', 50)->nullable();
                $table->string('branch_office')->nullable();
                $table->timestamps();

                $table->unique(['bank_name', 'account_name', 'account_number'], 'unique_account');
                $table->foreign('contact_id')->references('id')->on('contact')->onDelete('cascade')->onUpdate('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_bank');
    }
};
