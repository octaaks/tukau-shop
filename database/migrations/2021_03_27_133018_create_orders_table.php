<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['pending','processing','completed','decline']);
            $table->float('grand_total');
            $table->integer('item_count');
            $table->boolean('isPaid')->default(false);
            $table->enum('payment_method', ['cash_on_delivery','transfer','e_money']);
            
            $table->string('fullname');
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('notes')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
