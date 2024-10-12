<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\map;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('id', 12)->primary();
            $table->string('product_name',255);
            $table->longText('description');
            $table->double('retail_price')->default(0.0);
            $table->double('wholesale_price')->default(0.0);
            $table->char('origin', 2);
            $table->unsignedBigInteger('quantity')->default(0);
            $table->longText('product_image');
            $table->timestamps(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
