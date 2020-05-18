<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_vendor', function (Blueprint $table) {
        $table->unsignedBigInteger('vendor_id');
        $table->foreign('vendor_id')
          ->references('id')
          ->on('vendors')
          ->onDelete('cascade')
          ->onUpdate('cascade');
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')
          ->references('id')
          ->on('products')
          ->onDelete('cascade')
          ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('product_vendor');
    }
}
