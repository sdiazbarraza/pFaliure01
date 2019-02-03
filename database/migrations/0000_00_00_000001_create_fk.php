<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('shippings',  function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('receiver_id')->references('id')->on('receivers');
        });
        Schema::table('shipping_items',  function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('location_id')->references('id')->on('locations');

        });
        Schema::table('dispatch_orders',  function (Blueprint $table) {
            $table->engine = 'InnoDB';
             $table->foreign('shipping_item_id')->references('id')->on('shipping_items');
            $table->foreign('carrier_id')->references('id')->on('carriers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
