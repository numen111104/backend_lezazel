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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name');
            $table->float('price');
            $table->longText('description');
            $table->string('tags');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('address');
            $table->float('total_price');
            $table->float('shipping_price');
            $table->string('status')->default('PENDING');
            $table->string('payment')->default('MANUAL');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('transactions_items', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
           $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
           $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
           $table->integer('quantity');
           $table->timestamps();
           $table->softDeletes();
        });

        Schema::create('product_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('transactions_items');
        Schema::dropIfExists('product_galleries');
    }
};
