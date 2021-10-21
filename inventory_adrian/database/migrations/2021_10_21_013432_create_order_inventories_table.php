<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('items');
            $table->integer('Inventory_quantity');
            $table->integer('total_quantity');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventories_id');
            $table->foreign('inventories_id')->references('id')->on('inventories')->onDelete('cascade')->unique();
            $table->string('name');
            $table->string('order');
            $table->integer('price');
            $table->integer('total');
            $table->string('date');
            $table->integer('Order_quantity');
            $table->integer('deducted_quantity');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_inventories');
    }
}
