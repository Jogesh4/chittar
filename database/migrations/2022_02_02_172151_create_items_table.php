<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('model')->nullable();
            $table->string('tax_category')->nullable();
            $table->string('condition')->nullable();
            $table->string('warranty')->nullable();
            $table->string('return')->nullable();
            $table->string('track_inventory')->nullable();
            $table->string('selling_at')->nullable();
            $table->string('continue_selling_when_stock_out')->nullable();
            $table->string('cash_on_delivery')->nullable();
            $table->string('gift_wrap')->nullable();
            $table->string('min_purchase_qty')->nullable();
            $table->string('max_purchase_qty')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->string('stock_alert_qty')->nullable();
            $table->string('has_multiple_options')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('weight_unit')->nullable();
            $table->string('weight')->nullable();
            $table->string('isbn')->nullable();
            $table->string('hsn')->nullable();
            $table->string('sac')->nullable();
            $table->string('upc')->nullable();            
            $table->string('image')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->foreignId('category_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
