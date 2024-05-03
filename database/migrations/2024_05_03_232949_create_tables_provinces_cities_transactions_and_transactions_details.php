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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->string('invoice');
            $table->string('courier_name');
            $table->string('courier_service');
            $table->string('courier_cost');
            $table->integer('weight');
            $table->string('address');
            $table->bigInteger('grand_total');
            $table->string('reference')->nullable();
            $table->string('status', array("UNPAID", "SUCCESS", "EXPIRED", "CANCELLED"));
            $table->timestamps();
        });

        Schema::create('transactions_details', function (Blueprint $table) {
           $table->id();
           $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
           $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
           $table->integer('quantity');
           $table->bigInteger('price'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables_provinces_cities_transactions_and_transactions_details');
    }
};
