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
            $table->increments('id');
            $table->string('product_name');
            $table->string('items');
            $table->string('quantity');
            $table->timestamps();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('inventory_id');
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
            $table->string('name');
            $table->string('order');
            $table->string('price');
            $table->string('qty');
            $table->string('total');
            $table->string('date');
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
        Schema::dropIfExists('order_inventories');
    }
}
